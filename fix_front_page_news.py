import re

with open(r'c:\Users\catmu\Downloads\fenica\fenica-theme\front-page.php', 'r', encoding='utf-8') as f:
    content = f.read()

pattern = r'(<div class="swiper-wrapper flex items-stretch">).*?(</div>\s*</div>\s*</div>\s*</section>)'

php_loop = r'''\1
                    <?php
                    $news_query = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'post_status' => 'publish'
                    ));
                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                            $categories = get_the_category();
                            $cat_name = !empty($categories) ? esc_html($categories[0]->name) : 'Tin tức';
                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            if (!$thumbnail) $thumbnail = get_template_directory_uri() . '/assets/images/anh-du-an-fenica-khoi-de.jpg';
                    ?>
                    <div class="swiper-slide w-[320px] md:w-[420px] shrink-0 h-auto flex">
                        <div onclick="window.location.href='<?php the_permalink(); ?>';" class="group cursor-pointer flex flex-col h-full overflow-hidden transition-all duration-500 bg-white/[0.02] border border-[#d4ae6f]/20 rounded-[2rem] p-4 md:p-5 hover:bg-white/[0.05] hover:border-[#d4ae6f]/40 shadow-lg hover:shadow-[0_10px_30px_rgba(212,174,111,0.15)] hover:-translate-y-2">
                            <div class="relative w-full h-[250px] md:h-[300px] shrink-0 overflow-hidden rounded-[1.5rem]">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0e1e2e] via-transparent to-transparent opacity-60 pointer-events-none"></div>
                            </div>
                            <div class="pt-6 flex flex-col flex-1 pb-2">
                                <div class="flex items-center gap-2 text-[#d4ae6f] text-xs font-bold uppercase tracking-wider mb-3">
                                    <span class="w-2 h-2 rounded-full bg-[#d4ae6f] animate-pulse"></span>
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
                        wp_reset_postdata();
                    else :
                        echo '<p class="text-white">Chưa có bài viết nào.</p>';
                    endif;
                    ?>
                \2'''

new_content = re.sub(pattern, php_loop, content, flags=re.DOTALL)
if new_content != content:
    with open(r'c:\Users\catmu\Downloads\fenica\fenica-theme\front-page.php', 'w', encoding='utf-8') as f:
        f.write(new_content)
    print("Updated front-page.php successfully")
else:
    print("Pattern not found in front-page.php")
