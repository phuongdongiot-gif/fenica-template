import os
import re

theme_dir = r'c:\Users\catmu\Downloads\fenica\fenica-theme'
template_parts_dir = os.path.join(theme_dir, 'template-parts')

# Only process specific pages that have sections
pages_to_process = [
    'page-overview.php',
    'page-location.php',
    'page-plans.php',
    'page-gallery.php',
    'page-utilities.php',
    'page-contact.php',
    # 'home.php', # Bỏ qua để không ghi đè file template-parts có code WP_Query động
    'page-faq.php'
]

for page in pages_to_process:
    page_path = os.path.join(theme_dir, page)
    if not os.path.exists(page_path):
        continue
        
    page_name = page.replace('.php', '')
    if page_name.startswith('page-'):
        folder_name = page_name.replace('page-', '')
    else:
        folder_name = page_name

    parts_folder = os.path.join(template_parts_dir, folder_name)
    os.makedirs(parts_folder, exist_ok=True)
    
    with open(page_path, 'r', encoding='utf-8') as f:
        content = f.read()
        
    main_match = re.search(r'(<main[^>]*>)(.*?)(</main>)', content, re.DOTALL | re.IGNORECASE)
    if not main_match:
        print(f"No main tag found in {page}")
        continue
        
    main_start = main_match.group(1)
    main_content = main_match.group(2)
    main_end = main_match.group(3)
    
    # Split by <section. We use a regex that captures the entire section block safely.
    # Actually, a safer way to split HTML in Python without an HTML parser is using split on '<section' 
    # but we have to be careful not to match things inside comments or strings.
    
    sections = re.split(r'(?=<section)', main_content, flags=re.IGNORECASE)
    
    new_main_content = ""
    section_count = 0
    
    for section in sections:
        if section.strip().lower().startswith('<section'):
            section_count += 1
            
            # Try to extract an ID or primary class for the filename
            id_match = re.search(r'<section[^>]*id="([^"]+)"', section, re.IGNORECASE)
            if id_match:
                name = id_match.group(1).replace('-section', '')
            else:
                class_match = re.search(r'<section[^>]*class="([^"]+)"', section, re.IGNORECASE)
                if class_match and ' ' in class_match.group(1):
                    # just take the first meaningful class that isn't a utility class
                    classes = class_match.group(1).split()
                    valid_classes = [c for c in classes if c not in ['w-full', 'py-8', 'py-10', 'py-12', 'py-16', 'py-24', 'relative', 'overflow-hidden', 'bg-transparent', 'z-10', 'flex', 'h-screen']]
                    if valid_classes:
                        name = valid_classes[0]
                    else:
                        name = f"section-{section_count}"
                else:
                    name = f"section-{section_count}"
                    
            # Clean filename
            name = re.sub(r'[^a-z0-9]+', '-', name.lower()).strip('-')
            
            part_filename = f"{name}.php"
            part_path = os.path.join(parts_folder, part_filename)
            
            with open(part_path, 'w', encoding='utf-8') as pf:
                pf.write(section.strip() + '\n')
                
            new_main_content += f"\n    <?php get_template_part('template-parts/{folder_name}/{name}'); ?>\n"
        else:
            new_main_content += section
            
    # Write back to the page file
    if section_count > 0:
        new_full_content = content[:main_match.start(2)] + new_main_content + content[main_match.end(2):]
        with open(page_path, 'w', encoding='utf-8') as f:
            f.write(new_full_content)
        print(f"Componentized {page} into {section_count} parts.")
    else:
        print(f"No sections found in {page}")
