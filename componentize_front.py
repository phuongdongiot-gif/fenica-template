import os
import re

theme_dir = r'c:\Users\catmu\Downloads\fenica\fenica-theme'
front_page = os.path.join(theme_dir, 'front-page.php')
parts_dir = os.path.join(theme_dir, 'template-parts', 'home')

os.makedirs(parts_dir, exist_ok=True)

# First, we need to read from the original index.html because we messed up front-page.php in the previous step
html_file = r'c:\Users\catmu\Downloads\fenica\index.html'
with open(html_file, 'r', encoding='utf-8') as f:
    content = f.read()

# Extract main content
match = re.search(r'</header>\s*(<script[^>]*menu\.js[^>]*></script>)?(.*?)<!-- Footer Section -->', content, re.IGNORECASE | re.DOTALL)
if not match:
    print("Could not find content in index.html")
    exit()
    
main_content = match.group(2).strip()

# Replace assets
main_content = re.sub(r'assets/(images|css|js|fonts|svg)/', r'<?php echo get_template_directory_uri(); ?>/assets/\1/', main_content)

# Now split by <section
# Note: we use (?=<section) to keep <section in the extracted chunk
sections = re.split(r'(?=<section)', main_content, flags=re.IGNORECASE)

# The first element might be empty or contain non-section stuff, filter it
sections = [s for s in sections if s.strip().startswith('<section')]

filenames = [
    'hero',
    'overview',
    'location-details',
    'connectivity-map',
    'internal-amenities',
    'floor-plans',
    'gallery',
    'news',
    'cta'
]

new_main_content = ""

for i, section in enumerate(sections):
    if i < len(filenames):
        part_name = filenames[i]
        part_filename = f"{part_name}.php"
        part_path = os.path.join(parts_dir, part_filename)
        
        with open(part_path, 'w', encoding='utf-8') as pf:
            pf.write(section.strip() + '\n')
            
        print(f"Extracted {part_filename}")
        new_main_content += f"\n    <?php get_template_part('template-parts/home/{part_name}'); ?>\n"
    else:
        print(f"Warning: Found extra section {i}, appending directly")
        new_main_content += section

php_content = f"""<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<main id="primary" class="site-main">
{new_main_content}
</main>

<?php
get_footer();
"""

with open(front_page, 'w', encoding='utf-8') as f:
    f.write(php_content)

print("front-page.php has been properly componentized!")

# Let's clean up the bad files from before
bad_files = ['hero-carousel.php', 'action-services.php']
for bf in bad_files:
    bp = os.path.join(parts_dir, bf)
    if os.path.exists(bp):
        os.remove(bp)

