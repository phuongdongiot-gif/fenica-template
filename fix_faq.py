import re
import os

with open('faq.html', 'r', encoding='utf-8') as f:
    content = f.read()

# Find the style block
style_match = re.search(r'(<style>.*?</style>)', content, re.DOTALL)
if style_match:
    style_block = style_match.group(1)
    
    # Check if it is in head
    head_match = re.search(r'<head>.*?</head>', content, re.DOTALL | re.IGNORECASE)
    if head_match and style_block in head_match.group(0):
        # Remove it from the file completely
        content = content.replace(style_block, '')
        
        # Insert it right before <div class="container">
        target = '<div class="container">'
        content = content.replace(target, style_block + '\n    ' + target)
        
        with open('faq.html', 'w', encoding='utf-8') as f:
            f.write(content)
        print('Done. Moved style block to body.')
    else:
        print('Style block not in head.')
else:
    print('No style block found.')
