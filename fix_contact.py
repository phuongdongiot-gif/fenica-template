import re
with open(r'c:\Users\catmu\Downloads\fenica\fenica-theme\template-parts\contact\md-py-32.php', 'r', encoding='utf-8') as f:
    content = f.read()

pattern = r'(<form class="space-y-6">)(.*?)(</form>)'

php_code = r'''<!-- Contact Form 7 Placeholder -->
                    <?php echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Form dang ky tu van"]'); ?>

                    <!-- Fallback static form if CF7 is not active -->
                    <?php if (!shortcode_exists('contact-form-7')): ?>
                        \1\2\3
                    <?php endif; ?>'''

new_content = re.sub(pattern, php_code, content, flags=re.DOTALL)

# Also add the PHP warning
warning = '''<?php
/*
 * LUU Y QUAN TRONG:
 * File nay chua code PHP de goi Contact Form 7.
 * KHONG ghi de file nay bang HTML tinh!
 */
?>
'''
if 'LUU Y QUAN TRONG:' not in new_content:
    if new_content.startswith('<?php'):
        lines = new_content.split('\n', 1)
        new_content = lines[0] + '\n' + warning.replace('<?php\n', '').replace('\n?>\n', '') + lines[1]
    else:
        new_content = warning + new_content

with open(r'c:\Users\catmu\Downloads\fenica\fenica-theme\template-parts\contact\md-py-32.php', 'w', encoding='utf-8') as f:
    f.write(new_content)
print("Updated contact form")
