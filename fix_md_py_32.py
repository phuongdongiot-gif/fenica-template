import os

filepath = r'c:\Users\catmu\Downloads\fenica\fenica-theme\template-parts\contact\md-py-32.php'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

old_code = '''<!-- Contact Form 7 Placeholder -->
                    <?php echo do_shortcode('[contact-form-7 id=" YOUR_FORM_ID\ title=\Form dang ky tu van\]'); ?>'''

new_code = '''<!-- Contact Form 7 Auto Generated Form -->
 <?php 
 = get_option('fenica_contact_form_id');
 if ( && shortcode_exists('contact-form-7') ) {
 echo do_shortcode('[contact-form-7 id=\ . esc_attr($cf7_id) . \ title=\Form dang ký tu v?n Fenica\]');
 } else if ( shortcode_exists('contact-form-7') ) {
 echo do_shortcode('[contact-form-7 title=\Form dang ký tu v?n\]');
 }
 ?>'''

if old_code in content:
 new_content = content.replace(old_code, new_code)
 with open(filepath, 'w', encoding='utf-8') as f:
 f.write(new_content)
 print(\Successfully replaced the shortcode logic!\)
else:
 print(\Old code not found! Let me search for do_shortcode instead...\)
 import re
 new_content = re.sub(r'<!-- Contact Form 7 Placeholder -->\s*<\?php echo do_shortcode\(\'\[contact-form-7 id=\YOUR_FORM_ID\[^\)]+\)\; \?>', new_code, content)
 with open(filepath, 'w', encoding='utf-8') as f:
 f.write(new_content)
 print(\Replaced using regex.\)
