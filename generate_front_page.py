import os
import re

html_file = r'c:\Users\catmu\Downloads\fenica\index.html'
out_file = r'c:\Users\catmu\Downloads\fenica\fenica-theme\front-page.php'

with open(html_file, 'r', encoding='utf-8') as f:
    content = f.read()

# We need everything between </header> (including any menu.js script right after) and <!-- Footer Section -->
match = re.search(r'</header>\s*(<script[^>]*menu\.js[^>]*></script>)?(.*?)<!-- Footer Section -->', content, re.IGNORECASE | re.DOTALL)

if match:
    main_content = match.group(2).strip()
    
    # We need to replace all asset paths with PHP function 
    # assets/images/ -> <?php echo get_template_directory_uri(); ?>/assets/images/
    # Actually, we can keep them relative for now if baseurl is handled, but best practice is to replace it.
    main_content = re.sub(r'assets/(images|css|js|fonts|svg)/', r'<?php echo get_template_directory_uri(); ?>/assets/\1/', main_content)

    php_content = f"""<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    {main_content}
</main>

<?php
get_footer();
"""
    
    with open(out_file, 'w', encoding='utf-8') as f:
        f.write(php_content)
    print("Created front-page.php successfully.")
else:
    print("Could not find start/end markers in index.html")
