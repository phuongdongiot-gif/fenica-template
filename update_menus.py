import os

target_files = [
    'contact.html', 'faq.html', 'gallary.html', 'location.html',
    'news.html', 'overview.html', 'plans.html', 'ults.html',
    'fenica-theme/header.php'
]

old_ul = '<ul class="hidden md:flex justify-center space-x-8 relative z-20 text-white">'
new_ul = '''<ul id="desktop-menu" class="hidden md:flex justify-center space-x-8 relative z-20 text-white">
                    <div id="magic-line" class="absolute bottom-0 left-0 h-[3px] flex flex-col justify-between transition-all duration-300 pointer-events-none opacity-0 z-[-1]">
                        <div class="h-[1px] bg-[#d4ae6f] w-full"></div>
                        <div class="h-[1px] bg-[#d4ae6f] w-full"></div>
                    </div>'''

zoom_classes = ' hover:font-bold hover:text-sm'

base_dir = r'c:\Users\catmu\Downloads\fenica'

for f in target_files:
    path = os.path.join(base_dir, f)
    if os.path.exists(path):
        with open(path, 'r', encoding='utf-8') as file:
            content = file.read()
            
        modified = False
        if old_ul in content:
            content = content.replace(old_ul, new_ul)
            modified = True
            
        if zoom_classes in content:
            content = content.replace(zoom_classes, '')
            modified = True
            
        if modified:
            with open(path, 'w', encoding='utf-8') as file:
                file.write(content)
            print(f"Updated {f}")
        else:
            print(f"No changes needed for {f}")
    else:
        print(f"File not found: {f}")
