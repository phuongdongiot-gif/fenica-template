with open(r'c:\Users\catmu\Downloads\fenica\fenica-theme\front-page.php', 'r', encoding='utf-8') as f:
    content = f.read()

start_index = content.find('<div class="swiper-wrapper flex items-stretch">')
if start_index != -1:
    end_pattern = content.find('</section>', start_index)
    print(content[end_pattern-500:end_pattern+100])
