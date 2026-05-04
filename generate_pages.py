import os
import re

base_dir = r'c:\Users\catmu\Downloads\fenica'
theme_dir = os.path.join(base_dir, 'fenica-theme')

pages = {
    'overview.html': ('page-overview.php', 'Overview Page'),
    'location.html': ('page-location.php', 'Location Page'),
    'plans.html': ('page-plans.php', 'Plans Page'),
    'gallary.html': ('page-gallery.php', 'Gallery Page'),
    'ults.html': ('page-utilities.php', 'Utilities Page'),
    'contact.html': ('page-contact.php', 'Contact Page'),
    'news.html': ('home.php', 'News Page')
}

for html_file, (php_file, template_name) in pages.items():
    html_path = os.path.join(base_dir, html_file)
    out_path = os.path.join(theme_dir, php_file)
    
    if not os.path.exists(html_path):
        print(f"Skipping {html_file}, not found.")
        continue

    with open(html_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Extract content between </header> and <!-- Footer Section -->
    match = re.search(r'</header>\s*(<script[^>]*menu\.js[^>]*></script>)?(.*?)<!-- Footer Section -->', content, re.IGNORECASE | re.DOTALL)
    
    if match:
        main_content = match.group(2).strip()
        
        # Replace assets path
        main_content = re.sub(r'assets/(images|css|js|fonts|svg)/', r'<?php echo get_template_directory_uri(); ?>/assets/\1/', main_content)

        php_content = f"""<?php
/**
 * Template Name: {template_name}
 */

get_header(); ?>

<main id="primary" class="site-main">
    {main_content}
</main>

<?php
get_footer();
"""
        with open(out_path, 'w', encoding='utf-8') as f:
            f.write(php_content)
        print(f"Created {php_file} successfully.")
    else:
        print(f"Could not find start/end markers in {html_file}")

