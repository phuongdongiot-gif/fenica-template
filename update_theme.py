import re

new_html = """        <!-- Solid Overlay for Preloading Effect on Subpages -->
        <div id="child-preloader-wrap" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 9999; background-color: #0e1e2e; pointer-events: none; transition: opacity 0.8s ease-out, visibility 0.8s ease-out;">
            <canvas id="child-preloader-canvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></canvas>
            <div id="child-svg-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; pointer-events: none; overflow: hidden;">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1920 1080" class="child-menu-bg-svg origin-center" id="child-logo-svg" style="width: 400px; max-width: 60vw; height: auto; fill: #d4ae6f; opacity: 0; transform: scale(0.5); pointer-events: none;">
                    <path d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                </svg>
            </div>
        </div>"""

with open('fenica-theme/header.php', 'r', encoding='utf-8') as f:
    content = f.read()

content = re.sub(r'<!-- Solid Overlay for Preloading Effect on Subpages -->.*?</div>\s*</div>', new_html, content, flags=re.DOTALL)

with open('fenica-theme/header.php', 'w', encoding='utf-8') as f:
    f.write(content)


# Edit functions.php
with open('fenica-theme/functions.php', 'r', encoding='utf-8') as f:
    content2 = f.read()

if 'child-preloader.js' not in content2:
    to_replace = "wp_enqueue_script( 'fenica-wave', get_template_directory_uri() . '/assets/js/wave-preloader.js', array('three-js'), filemtime( get_template_directory() . '/assets/js/wave-preloader.js' ), true );"
    replacement = to_replace + "\n    wp_enqueue_script( 'fenica-child-preloader', get_template_directory_uri() . '/assets/js/child-preloader.js', array('gsap-js'), filemtime( get_template_directory() . '/assets/js/child-preloader.js' ), true );"
    content2 = content2.replace(to_replace, replacement)
    with open('fenica-theme/functions.php', 'w', encoding='utf-8') as f:
        f.write(content2)
