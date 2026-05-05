import os

warning = '''<?php
/*
 * LUU Y QUAN TRONG:
 * File nay chua code PHP (WP_Query) goi du lieu DONG tu co so du lieu WordPress (phan Tin tuc).
 * KHONG ghi de file nay bang HTML tinh (static) tu ban thiet ke, neu khong se mat tinh nang lay bai tu dong!
 */
?>
'''

def add_warning(filepath):
    if not os.path.exists(filepath): return
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    if 'LUU Y QUAN TRONG:' not in content:
        if content.startswith('<?php'):
            lines = content.split('\n', 1)
            new_content = lines[0] + '\n' + warning.replace('<?php\n', '').replace('\n?>\n', '') + lines[1]
        else:
            new_content = warning + content
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f'Added warning to {filepath}')

files = [
    r'c:\Users\catmu\Downloads\fenica\fenica-theme\front-page.php',
    r'c:\Users\catmu\Downloads\fenica\fenica-theme\home.php',
    r'c:\Users\catmu\Downloads\fenica\fenica-theme\template-parts\home\md-py-28.php',
    r'c:\Users\catmu\Downloads\fenica\fenica-theme\template-parts\home\news-grid.php',
]

for file in files:
    add_warning(file)
