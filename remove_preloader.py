import os
import glob
import re

directory = r"c:\Users\catmu\Downloads\fenica"
html_files = glob.glob(os.path.join(directory, "*.html"))

def remove_preloader(content):
    start_str = 'id="preloader"'
    if start_str not in content:
        return content
    
    # Try different formatting of id="preloader"
    start_idx = content.find('<div id="preloader"')
    if start_idx == -1:
        start_idx = content.find('<div\n        id="preloader"')
        if start_idx == -1:
            start_idx = content.find('<div\n    id="preloader"')
            if start_idx == -1:
                # Use regex
                m = re.search(r'<div[^>]*id="preloader"[^>]*>', content)
                if not m:
                    return content
                start_idx = m.start()
    
    # Include the comment before it if exists
    comment_idx = content.rfind('<!-- Preloader -->', max(0, start_idx - 100), start_idx)
    if comment_idx != -1:
        start_idx = comment_idx

    idx = content.find('<div', start_idx)
    depth = 0
    end_idx = -1
    
    tokens = []
    for m in re.finditer(r'<div|</div', content[idx:]):
        tokens.append((m.group(0), m.start() + idx, m.end() + idx))
        
    for text, start, end in tokens:
        if text == '<div':
            depth += 1
        elif text == '</div':
            depth -= 1
            if depth == 0:
                end_idx = content.find('>', end) + 1
                break
                
    if end_idx != -1:
        content = content[:start_idx] + content[end_idx:]
    
    return content

for file_path in html_files:
    if os.path.basename(file_path).lower() == "index.html":
        continue
        
    with open(file_path, "r", encoding="utf-8") as f:
        content = f.read()
        
    original = content
    content = remove_preloader(content)
    
    # Also remove overflow-hidden from body class
    content = re.sub(r'(<body[^>]*class="[^"]*)overflow-hidden([^"]*">)', r'\1\2', content)
    
    # Also remove the preloader removal logic from gallary.html
    gallary_preloader_script = """            // Remove preloader
            setTimeout(() => {
                const preloader = document.getElementById('preloader');
                if(preloader) {
                    preloader.style.opacity = '0';
                    setTimeout(() => { preloader.style.display = 'none'; }, 500);
                }
            }, 1000);"""
    content = content.replace(gallary_preloader_script, "")
    
    if content != original:
        with open(file_path, "w", encoding="utf-8") as f:
            f.write(content)
        print(f"Removed preloader from {os.path.basename(file_path)}")
