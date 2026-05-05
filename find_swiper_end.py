import re

with open(r'c:\Users\catmu\Downloads\fenica\fenica-theme\front-page.php', 'r', encoding='utf-8') as f:
    content = f.read()

start_index = content.find('<div class="swiper-wrapper flex items-stretch">')
if start_index != -1:
    print(content[start_index:start_index+500])
    
    # find where it ends
    match = re.search(r'(<div class="swiper-wrapper flex items-stretch">.*?)(\s*</div>\s*</div>\s*<!-- Navigation Buttons -->)', content, re.DOTALL)
    if match:
        print("Found match, length: ", len(match.group(1)))
    else:
        # maybe no Navigation buttons?
        match2 = re.search(r'(<div class="swiper-wrapper flex items-stretch">.*?)(\s*</div>\s*</div>)', content, re.DOTALL)
        if match2:
            print("Found match 2, length: ", len(match2.group(1)))
            print("End of match 2:\n", content[match2.end()-200:match2.end()+200])
        else:
            print("No match!")
