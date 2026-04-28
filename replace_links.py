import os
import glob

html_files = glob.glob('*.html')

replacements = {
    'href="/"': 'href="index.html"',
    'href="/tong-quan"': 'href="overview.html"',
    'href="/mat-bang-toa-nha"': 'href="plans.html"',
    'href="/mat-bang-tien-ich"': 'href="plans-ults.html"',
    'href="/can-ho"': 'href="#"',
    'href="/phap-ly"': 'href="#"',
    'href="/vi-tri"': 'href="location.html"',
    'href="/mat-bang"': 'href="plans.html"',
    'href="/tien-ich"': 'href="ults.html"',
    'href="/thu-vien"': 'href="gallary.html"',
    'href="/tin-tuc"': 'href="news.html"',
    'href="/lien-he"': 'href="contact.html"'
}

for file in html_files:
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    for old, new in replacements.items():
        content = content.replace(old, new)
        
    with open(file, 'w', encoding='utf-8') as f:
        f.write(content)

print('Done replacing links')
