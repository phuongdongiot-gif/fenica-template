(function() {
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
