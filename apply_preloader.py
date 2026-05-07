import glob
import re

new_preloader_html = """    <!-- Solid Overlay for Preloading Effect -->
    <div id="child-preloader-wrap" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 9999; background-color: #0e1e2e; pointer-events: none; transition: opacity 0.8s ease-out, visibility 0.8s ease-out;">
        <canvas id="child-preloader-canvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></canvas>
        <div id="child-svg-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; pointer-events: none; overflow: hidden;">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1920 1080" class="child-menu-bg-svg origin-center" id="child-logo-svg" style="width: 400px; max-width: 60vw; height: auto; fill: #d4ae6f; opacity: 0; transform: scale(0.5); pointer-events: none;">
                <path d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
            </svg>
        </div>
    </div>"""

child_js_content = """(function() {
    const canvas = document.getElementById('child-preloader-canvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d', { alpha: true });
    let numLines = 140;
    let linesArray = [];
    let renderTicker;

    function setupCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        numLines = window.innerWidth < 768 ? 100 : 300;
        const spacing = canvas.width / numLines;
        const lineWidth = Math.max(1, spacing * 0.45);

        linesArray = [];
        for (let i = 0; i < numLines; i++) {
            const xPos = i * spacing + (spacing - lineWidth) / 2;
            const ratioFromCenter = Math.abs(i - numLines / 2) / (numLines / 2);
            const baseOpacity = 0.2 + 0.8 * (1 - ratioFromCenter);

            linesArray.push({
                x: xPos,
                width: lineWidth,
                baseOpacity: baseOpacity,
                progressY: 0,
                opacity: 1
            });
        }
        if (typeof gsap !== 'undefined') {
            if (!renderTicker) renderTicker = gsap.ticker.add(render);
        }
    }

    function playPreloader() {
        if (typeof gsap === 'undefined') return;

        const tl = gsap.timeline({
            onComplete: () => {
                gsap.ticker.remove(render);
                renderTicker = null;
                const wrap = document.getElementById('child-preloader-wrap');
                if (wrap) {
                    wrap.style.opacity = '0';
                    wrap.style.visibility = 'hidden';
                    setTimeout(() => {
                        wrap.remove();
                    }, 800);
                }
                document.body.classList.remove('overflow-hidden');
                
                // Refresh AOS
                if (typeof AOS !== 'undefined') {
                    setTimeout(() => AOS.refresh(), 100);
                }
            }
        });

        tl.to(linesArray, {
            progressY: 1,
            duration: 1.2,
            ease: "power3.inOut",
            stagger: { amount: 0.8, from: "edges" }
        })
        .to("#child-logo-svg", {
            opacity: 1,
            scale: 1,
            duration: 0.6,
            ease: "back.out(1.5)"
        }, "-=0.2")
        .to(linesArray, {
            opacity: 0,
            duration: 0.4,
            ease: "power2.inOut"
        }, "+=0.3")
        .to("#child-logo-svg", {
            scale: 80,
            opacity: 0,
            duration: 0.4,
            ease: "power4.in"
        }, "+=0.3");
    }

    function render() {
        let w = canvas.width;
        let h = canvas.height;
        let cy = h / 2;

        ctx.clearRect(0, 0, w, h);
        ctx.globalCompositeOperation = 'screen';

        for (let i = 0; i < numLines; i++) {
            let line = linesArray[i];
            if (line.opacity <= 0 || line.progressY <= 0) continue;

            let currentH = cy * line.progressY;
            let finalOpacity = line.opacity * line.baseOpacity;

            ctx.fillStyle = `rgba(15, 103, 160, ${finalOpacity * 0.4})`;
            ctx.fillRect(line.x - line.width, 0, line.width * 3, currentH);
            ctx.fillRect(line.x - line.width, h - currentH, line.width * 3, currentH);

            ctx.fillStyle = `rgba(15, 103, 177, ${finalOpacity})`;
            ctx.fillRect(line.x, 0, line.width, currentH);
            ctx.fillRect(line.x, h - currentH, line.width, currentH);
        }
        ctx.globalCompositeOperation = 'source-over';
    }

    function handleResize() {
        if (!document.getElementById('child-preloader-canvas')) return;
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        if (linesArray.length > 0) {
            const spacing = canvas.width / numLines;
            const lineWidth = Math.max(1.5, spacing * 0.45);
            for (let i = 0; i < numLines; i++) {
                linesArray[i].x = i * spacing + (spacing - lineWidth) / 2;
                linesArray[i].width = lineWidth;
            }
        }
    }

    const checkGsap = setInterval(() => {
        if (typeof gsap !== 'undefined') {
            clearInterval(checkGsap);
            setupCanvas();
            playPreloader();
            window.addEventListener('resize', handleResize);
        }
    }, 100);

})();
"""

with open('assets/js/child-preloader.js', 'w', encoding='utf-8') as f:
    f.write(child_js_content)

for f in glob.glob('*.html'):
    if f in ['index.html', 'animation.html']: continue
    with open(f, 'r', encoding='utf-8') as file:
        content = file.read()
    
    # Replace preloader HTML
    content = re.sub(r'<!-- Solid Overlay for Preloading Effect -->.*?</div>\s*</div>', new_preloader_html, content, flags=re.DOTALL)
    
    # Insert script inclusion
    if '<script src="assets/js/child-preloader.js"></script>' not in content:
        content = content.replace('<script src="assets/js/wave-preloader.js"></script>', 
            '<script src="assets/js/wave-preloader.js"></script>\n    <script src="assets/js/child-preloader.js"></script>')

    with open(f, 'w', encoding='utf-8') as file:
        file.write(content)
