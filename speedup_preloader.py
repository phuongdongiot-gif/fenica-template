import os
import glob
import re

def process_file(filepath):
    filename = os.path.basename(filepath)
    if filename == "index.html":
        return

    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    changed = False

    # Change transition time from 1.5s to 0.8s
    if "opacity 1.5s" in content:
        content = content.replace("transition: opacity 1.5s ease-out, visibility 1.5s ease-out;", "transition: opacity 0.8s ease-out, visibility 0.8s ease-out;")
        changed = True

    # Change outer timeout 4000 to 1500
    if "}, 4000);" in content:
        content = content.replace("}, 4000);", "}, 1500);")
        changed = True

    # Change inner timeout 1500 to 800. We can do this by regex
    new_content = re.sub(r'\}, 1500\);(\s*\}, 1500\);)', r'}, 800);\g<1>', content)
    # Wait, the outer timeout is already changed to 1500. So we have:
    # }, 1500); 
    # }, 1500);
    # To avoid this issue, let's match the exact block:
    pattern = r'(document\.body\.classList\.remove\(\'overflow-hidden\'\);\s*if \(animationId\) cancelAnimationFrame\(animationId\);\s*)\}, 1500\);'
    replacement = r'\g<1>}, 800);'
    
    new_content = re.sub(pattern, replacement, content)
    if new_content != content:
        content = new_content
        changed = True

    if changed:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Successfully updated {filename}")

def main():
    files = glob.glob("*.html")
    for f in files:
        process_file(f)

if __name__ == "__main__":
    main()
