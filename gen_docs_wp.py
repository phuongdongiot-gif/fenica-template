import re

def generate_docs_template():
    with open('docs.html', 'r', encoding='utf-8') as f:
        html = f.read()

    # Extract the main content (inside <main>...</main>)
    main_match = re.search(r'<main[^>]*>(.*?)</main>', html, re.DOTALL)
    if not main_match:
        print("Could not find <main> content in docs.html")
        return
    main_content = main_match.group(1)

    # Extract the image under main
    img_match = re.search(r'</main>\s*<div>\s*<img src="([^"]+)"[^>]*>\s*</div>', html, re.DOTALL)
    img_tag = ""
    if img_match:
        img_src = img_match.group(1)
        img_tag = f'\n    <div>\n        <img src="<?php echo get_template_directory_uri(); ?>/{img_src}" class="w-full h-full" alt="" srcset="">\n    </div>\n'

    # Fix asset paths in the main content
    main_content = re.sub(
        r'src="assets/([^"]+)"',
        r'src="<?php echo get_template_directory_uri(); ?>/assets/\1"',
        main_content
    )

    template_content = f"""<?php
/**
 * Template Name: Tài Liệu Dự Án
 */

get_header(); ?>

<main id="primary" class="site-main relative z-10 pt-32 pb-24 px-4 min-h-[80vh]">
{main_content}
</main>
{img_tag}
<?php get_footer(); ?>
"""

    with open('fenica-theme/page-docs.php', 'w', encoding='utf-8') as f:
        f.write(template_content)
    
    print("Successfully created fenica-theme/page-docs.php")

if __name__ == "__main__":
    generate_docs_template()
