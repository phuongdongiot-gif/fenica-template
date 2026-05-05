import re

def update_grid(filepath):
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
    except Exception:
        return
        
    pattern = r'(<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 w-full"[^>]*>).*?(</div>\s*</div>\s*</section>)'
    
    php_loop = r'''\1
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            $categories = get_the_category();
                            $cat_name = !empty($categories) ? esc_html($categories[0]->name) : 'Tin tức';
                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            if (!$thumbnail) $thumbnail = get_template_directory_uri() . '/assets/images/fenica-goc-nhin-thu-ba.webp';
                    ?>
                    <div class="h-auto flex">
                        <div onclick="window.location.href='<?php the_permalink(); ?>';" class="group cursor-pointer flex flex-col h-full overflow-hidden transition-all duration-500 bg-white/[0.02] border border-[#d4ae6f]/20 rounded-[2rem] p-4 md:p-5 hover:bg-white/[0.05] hover:border-[#d4ae6f]/40 shadow-lg hover:shadow-[0_10px_30px_rgba(212,174,111,0.15)] hover:-translate-y-2 w-full">
                            <div class="relative w-full h-[250px] md:h-[300px] shrink-0 overflow-hidden rounded-[1.5rem]">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0e1e2e] via-transparent to-transparent opacity-60 pointer-events-none"></div>
                            </div>
                            <div class="pt-6 flex flex-col flex-1 pb-2">
                                <div class="flex items-center gap-2 text-[#d4ae6f] text-xs font-bold uppercase tracking-wider mb-3">
                                    <span class="w-2 h-2 rounded-full bg-[#d4ae6f] opacity-50"></span>
                                    <?php echo $cat_name; ?>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-white playfair mb-4 group-hover:text-[#d4ae6f] transition-colors leading-tight">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="text-gray-300 font-light text-sm md:text-base mb-6 line-clamp-3">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="mt-auto flex items-center gap-2 text-[#d4ae6f] font-bold text-sm uppercase tracking-wide">
                                    Đọc tiếp
                                    <svg class="w-4 h-4 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    else :
                        echo '<p class="text-white w-full col-span-3 text-center py-10">Chưa có bài viết nào.</p>';
                    endif;
                    ?>
                    
                    <!-- Pagination -->
                    <div class="w-full col-span-1 md:col-span-2 lg:col-span-3 flex justify-center mt-8">
                        <?php 
                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => 'Trang trước',
                            'next_text' => 'Trang sau',
                            'class'     => 'pagination-custom flex gap-2',
                        )); 
                        ?>
                    </div>
                \2'''
                
    new_content = re.sub(pattern, php_loop, content, flags=re.DOTALL)
    if new_content != content:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"Updated {filepath}")
    else:
        print(f"No match found in {filepath}")

update_grid(r'c:\Users\catmu\Downloads\fenica\fenica-theme\template-parts\home\md-py-28.php')
update_grid(r'c:\Users\catmu\Downloads\fenica\fenica-theme\template-parts\home\news-grid.php')
