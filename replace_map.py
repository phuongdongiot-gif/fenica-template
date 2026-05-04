import re

with open('animation.html', 'r', encoding='utf-8') as f:
    anim = f.read()

svg_match = re.search(r'(<svg.*?</svg>)', anim, re.DOTALL)
if not svg_match:
    print('SVG not found')
    exit(1)

svg = svg_match.group(1)
svg = svg.replace('<svg xmlns=', '<svg id="map-animation-svg" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" xmlns=')

script = """
                <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const paths = document.querySelectorAll("#map-animation-svg path");
                    paths.forEach(path => {
                        if (path.closest('defs')) return;
                        const length = path.getTotalLength();
                        gsap.set(path, { strokeDasharray: length, strokeDashoffset: length });
                    });

                    gsap.to("#map-animation-svg path:not(defs path)", {
                        strokeDashoffset: 0,
                        duration: 3,
                        ease: "power2.inOut",
                        stagger: 0.01,
                        delay: 0.5,
                        repeat: -1,
                        repeatDelay: 0.5
                    });

                    gsap.set("#map-animation-svg text, #map-animation-svg polygon", { opacity: 0 });

                    gsap.to("#map-animation-svg text, #map-animation-svg polygon", {
                        opacity: 1,
                        duration: 1,
                        ease: "power2.out",
                        stagger: 0.005,
                        delay: 2
                    });

                    gsap.fromTo("#special-logo", 
                        { scale: 1 }, 
                        { scale: 1.1, duration: 0.8, ease: "sine.inOut", yoyo: true, repeat: -1, transformOrigin: "center center", delay: 2 }
                    );
                });
                </script>
"""

with open('location.html', 'r', encoding='utf-8') as f:
    idx = f.read()

pattern = r'<img\s+src="assets/images/map\.png"\s+class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"\s+alt="Bản đồ Vị trí"\s+loading="lazy"\s+title="Bản đồ Vị trí">'
if not re.search(pattern, idx):
    print('Pattern not found in location.html')
    exit(1)

new_idx = re.sub(pattern, svg + script, idx)

with open('location.html', 'w', encoding='utf-8') as f:
    f.write(new_idx)

print('Success')
