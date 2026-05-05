import re

def update_bento(filepath):
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
    except Exception:
        return

    pattern = r'(<!-- Bento Featured Section -->\s*<div class="flex flex-col lg:flex-row gap-4 lg:gap-6 h-auto lg:h-\[700px\] mb-20"[^>]*>).*?(<!-- Normal Grid Section -->|<!-- Danh sách bài viết -->|<div class="grid grid-cols-1 md:grid-cols-2)'
    
    php_code = r'''<!-- Bento Featured Section -->
            <?php
            $bento_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'post_status' => 'publish'
            ));
            $b_posts = array();
            if ($bento_query->have_posts()) {
                while ($bento_query->have_posts()) {
                    $bento_query->the_post();
                    $cats = get_the_category();
                    $b_posts[] = array(
                        'title' => get_the_title(),
                        'permalink' => get_permalink(),
                        'excerpt' => wp_trim_words(get_the_excerpt(), 18, '...'),
                        'thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_template_directory_uri() . '/assets/images/fenica-goc-nhin-thu-ba.webp',
                        'category' => !empty($cats) ? esc_html($cats[0]->name) : 'Tin tức',
                        'date' => get_the_date('j \T\h\g n')
                    );
                }
                wp_reset_postdata();
            }
            while (count($b_posts) < 4) {
                $b_posts[] = array(
                    'title' => 'Chưa có bài viết',
                    'permalink' => '#',
                    'excerpt' => 'Đang cập nhật...',
                    'thumbnail' => get_template_directory_uri() . '/assets/images/fenica-goc-nhin-thu-ba.webp',
                    'category' => 'Tin tức',
                    'date' => date('j \T\h\g n')
                );
            }
            ?>
            <div class="flex flex-col lg:flex-row gap-4 lg:gap-6 h-auto lg:h-[700px] mb-20" data-aos="fade-up">
                <!-- Col 1: Large Card (45%) -->
                <div class="w-full lg:w-[45%] h-[400px] lg:h-full" onclick="window.location.href='<?php echo esc_url($b_posts[0]['permalink']); ?>';" style="cursor:pointer;">
                    <div class="relative w-full h-full rounded-[2rem] md:rounded-[2.5rem] overflow-hidden group">
                        <img src="<?php echo esc_url($b_posts[0]['thumbnail']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="<?php echo esc_attr($b_posts[0]['title']); ?>">
                        <div class="absolute bottom-0 left-0 bg-[#0e1e2e] rounded-tr-[2rem] pt-5 pr-6 px-4 md:pt-6 md:pr-8 pb-0 w-[90%] md:w-[85%] z-10">
                            <div class="absolute -top-6 md:-top-8 left-0 w-6 h-6 md:w-8 md:h-8 bg-transparent rounded-bl-[2rem] shadow-[-16px_16px_0_0_#0e1e2e]"></div>
                            <p class="text-[#d4ae6f] text-xs md:text-sm font-bold uppercase tracking-wider mb-2 flex items-center gap-2">
                                <?php echo esc_html($b_posts[0]['category']); ?> <span class="text-white/50 font-normal">| <?php echo esc_html($b_posts[0]['date']); ?></span>
                            </p>
                            <h3 class="p-x-2 py-1 text-2xl md:text-3xl lg:text-4xl font-bold playfair text-white leading-tight uppercase line-clamp-2">
                                <?php echo esc_html($b_posts[0]['title']); ?></h3>
                        </div>
                        <div class="absolute top-4 left-4 md:top-6 md:left-6 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20 z-10">
                            <span class="text-lg md:text-xl">🔥</span>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Middle Column (35%) -->
                <div class="w-full lg:w-[35%] flex flex-col lg:grid lg:grid-rows-[1.2fr_1fr] gap-4 lg:gap-6 h-auto lg:h-full">
                    <!-- Top: Lime (Gold) Card -->
                    <div class="relative w-full h-[350px] lg:h-full rounded-[2rem] md:rounded-[2.5rem] bg-gradient-to-br from-[#d4ae6f] to-[#f0e0ca] p-6 md:p-8 flex flex-col group overflow-visible" onclick="window.location.href='<?php echo esc_url($b_posts[1]['permalink']); ?>';" style="cursor:pointer;">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
                        <div class="absolute top-0 right-0 bg-[#0e1e2e] rounded-bl-[2rem] pl-3 pb-3 md:pl-4 md:pb-4 z-10 overflow-hidden rounded-tr-3xl">
                            <div class="absolute top-0 -left-6 w-6 h-6 bg-transparent rounded-tr-[1.5rem] shadow-[12px_-12px_0_0_#0e1e2e]"></div>
                            <div class="absolute -bottom-6 right-0 w-6 h-6 bg-transparent rounded-tr-[1.5rem] shadow-[12px_-12px_0_0_#0e1e2e]"></div>
                            <a href="<?php echo esc_url($b_posts[1]['permalink']); ?>" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center hover:scale-110 transition-transform group/btn">
                                <svg class="w-4 h-4 md:w-5 md:h-5 text-[#0e1e2e] group-hover/btn:-translate-y-1 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg>
                            </a>
                        </div>
                        <p class="text-[#0e1e2e] text-xs md:text-sm font-bold uppercase tracking-wider mb-2 relative z-10"><?php echo esc_html($b_posts[1]['category']); ?></p>
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-black text-[#0e1e2e] leading-none mb-3 md:mb-4 playfair uppercase relative z-10 line-clamp-2"><?php echo esc_html($b_posts[1]['title']); ?></h3>
                        <p class="text-[#0e1e2e]/80 text-xs md:text-sm mb-4 md:mb-6 line-clamp-2 md:line-clamp-3 relative z-10"><?php echo esc_html($b_posts[1]['excerpt']); ?></p>
                    </div>

                    <!-- Bottom: Image/Video Card -->
                    <div class="relative w-full h-[250px] lg:h-full rounded-[2rem] md:rounded-[2.5rem] overflow-hidden group" onclick="window.location.href='<?php echo esc_url($b_posts[2]['permalink']); ?>';" style="cursor:pointer;">
                        <img src="<?php echo esc_url($b_posts[2]['thumbnail']); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="<?php echo esc_attr($b_posts[2]['title']); ?>">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 md:w-16 md:h-16 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center border border-white/40 group-hover:scale-110 transition-transform cursor-pointer z-10">
                            <svg class="w-5 h-5 md:w-6 md:h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full p-5 md:p-6 bg-gradient-to-t from-[#0e1e2e]/90 to-transparent">
                            <div class="flex items-center gap-3 text-white/70 text-[10px] md:text-xs mb-1 md:mb-2">
                                <span><?php echo esc_html($b_posts[2]['date']); ?></span>
                                <span>.</span>
                                <span><?php echo esc_html($b_posts[2]['category']); ?></span>
                            </div>
                            <h3 class="text-white font-bold uppercase tracking-wide text-xs md:text-sm line-clamp-1"><?php echo esc_html($b_posts[2]['title']); ?></h3>
                        </div>
                    </div>
                </div>

                <!-- Col 3: Right Column (20%) -->
                <div class="w-full lg:w-[20%] flex flex-col lg:grid lg:grid-rows-[1.5fr_1fr] gap-4 lg:gap-6 h-auto lg:h-full">
                    <!-- Top: Vertical Card -->
                    <div class="relative w-full h-[250px] lg:h-full rounded-[2rem] md:rounded-[2.5rem] bg-[#f0e0ca]/5 overflow-hidden group border border-white/10" onclick="window.location.href='<?php echo esc_url($b_posts[3]['permalink']); ?>';" style="cursor:pointer;">
                        <div class="absolute top-0 left-0 w-full p-5 md:p-6 z-20">
                            <p class="text-[#d4ae6f] text-[10px] md:text-xs font-bold uppercase tracking-wider mb-1"><?php echo esc_html($b_posts[3]['category']); ?></p>
                            <p class="text-white/60 text-[10px] mb-2 md:mb-3"><?php echo esc_html($b_posts[3]['date']); ?></p>
                            <h3 class="text-lg md:text-xl lg:text-2xl font-black text-white playfair uppercase leading-tight line-clamp-3"><?php echo esc_html($b_posts[3]['title']); ?></h3>
                        </div>
                        <img src="<?php echo esc_url($b_posts[3]['thumbnail']); ?>" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 opacity-80" alt="<?php echo esc_attr($b_posts[3]['title']); ?>">
                        <div class="absolute inset-0 bg-gradient-to-b from-[#0e1e2e] via-[#0e1e2e]/40 to-transparent"></div>
                    </div>

                    <!-- Bottom: Categories Card -->
                    <div class="relative w-full h-[200px] lg:h-full rounded-[2rem] md:rounded-[2.5rem] bg-[#1a2b3c] p-5 md:p-6 flex flex-col group border border-white/5">
                        <div class="flex flex-wrap gap-2 mb-auto z-10">
                            <?php 
                            $cats = get_categories(array('number' => 4, 'hide_empty' => false));
                            foreach ($cats as $cat) {
                                echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '" class="px-3 py-1.5 rounded-full bg-[#f0e0ca] text-[#0e1e2e] text-[10px] font-bold hover:bg-[#d4ae6f] transition-colors">' . esc_html($cat->name) . '</a>';
                            }
                            ?>
                        </div>
                        <div class="absolute bottom-0 right-0 bg-[#0e1e2e] rounded-tl-[2rem] pt-3 pl-3 md:pt-4 md:pl-4 z-20 rounded-br-3xl">
                            <div class="absolute top-0 -right-5 md:-right-6 w-5 h-5 md:w-6 md:h-6 bg-transparent rounded-bl-[1.5rem] shadow-[-10px_10px_0_0_#0e1e2e]"></div>
                            <div class="absolute -bottom-5 md:-bottom-6 left-0 w-5 h-5 md:w-6 md:h-6 bg-transparent rounded-bl-[1.5rem] shadow-[-10px_10px_0_0_#0e1e2e]"></div>
                            <a href="#" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center hover:scale-110 transition-transform group/btn">
                                <svg class="w-4 h-4 md:w-5 md:h-5 text-[#0e1e2e] group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <p class="text-white text-xs md:text-sm font-bold mt-auto z-10 relative">Xem tất cả<br>Danh mục</p>
                    </div>
                </div>
            </div>

            \2'''
            
    match = re.search(pattern, content, re.DOTALL)
    if match:
        new_content = content[:match.start()] + php_code.replace('\1', '').replace('\2', match.group(2)) + content[match.end():]
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print("Updated bento grid in", filepath)
    else:
        print("Pattern not found in", filepath)

update_bento(r'c:\Users\catmu\Downloads\fenica\fenica-theme\template-parts\home\md-py-28.php')
update_bento(r'c:\Users\catmu\Downloads\fenica\fenica-theme\template-parts\home\news-grid.php')
