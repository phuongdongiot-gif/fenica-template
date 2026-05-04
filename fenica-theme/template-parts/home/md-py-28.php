<section class="py-16 md:py-28 relative z-10 bg-transparent">
    <div class="max-w-[1600px] mx-auto px-4 md:px-8">
        <?php
        // Fetch top 4 posts for the Bento grid
        $bento_query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 4,
            'post_status'    => 'publish',
        ));
        $bento_posts = $bento_query->posts;
        wp_reset_postdata();

        if (count($bento_posts) > 0) :
        ?>
        <!-- Bento Featured Section -->
        <div class="flex flex-col lg:flex-row gap-4 lg:gap-6 h-auto lg:h-[700px] mb-20" data-aos="fade-up">
            
            <?php if (isset($bento_posts[0])) : $p = $bento_posts[0]; ?>
            <!-- Col 1: Large Card (45%) -->
            <div class="w-full lg:w-[45%] h-[400px] lg:h-full">
                <a href="<?php echo get_permalink($p->ID); ?>" class="relative w-full h-full rounded-[2rem] md:rounded-[2.5rem] overflow-hidden group block">
                    <?php if (has_post_thumbnail($p->ID)) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url($p->ID, 'large'); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="<?php echo esc_attr($p->post_title); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nha-tre-fenica.webp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="<?php echo esc_attr($p->post_title); ?>">
                    <?php endif; ?>
                    
                    <div class="absolute bottom-0 left-0 bg-[#0e1e2e] rounded-tr-[2rem] pt-5 pr-6 px-4 md:pt-6 md:pr-8 pb-0 w-[90%] md:w-[85%] z-10">
                        <div class="absolute -top-6 md:-top-8 left-0 w-6 h-6 md:w-8 md:h-8 bg-transparent rounded-bl-[2rem] shadow-[-16px_16px_0_0_#0e1e2e]"></div>
                        <p class="text-[#d4ae6f] text-xs md:text-sm font-bold uppercase tracking-wider mb-2 flex items-center gap-2">
                            <?php 
                                $cats = get_the_category($p->ID);
                                echo !empty($cats) ? esc_html($cats[0]->name) : 'Tin Tức';
                            ?>
                            <span class="text-white/50 font-normal">| <?php echo get_the_date('d M Y', $p->ID); ?></span>
                        </p>
                        <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold playfair text-white leading-tight uppercase line-clamp-2">
                            <?php echo esc_html($p->post_title); ?>
                        </h3>
                    </div>
                    <div class="absolute top-4 left-4 md:top-6 md:left-6 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20 z-10 group-hover:bg-[#d4ae6f] transition-colors">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                </a>
            </div>
            <?php endif; ?>

            <!-- Col 2: Middle Column (35%) -->
            <div class="w-full lg:w-[35%] flex flex-col lg:grid lg:grid-rows-[1.2fr_1fr] gap-4 lg:gap-6 h-auto lg:h-full">
                <?php if (isset($bento_posts[1])) : $p = $bento_posts[1]; ?>
                <!-- Top: Lime (Gold) Card -->
                <a href="<?php echo get_permalink($p->ID); ?>" class="relative w-full h-[350px] lg:h-full rounded-[2rem] md:rounded-[2.5rem] bg-gradient-to-br from-[#d4ae6f] to-[#f0e0ca] p-6 md:p-8 flex flex-col group overflow-hidden block">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
                    <div class="absolute top-0 right-0 bg-[#0e1e2e] rounded-bl-[2rem] pl-3 pb-3 md:pl-4 md:pb-4 z-10 overflow-hidden">
                        <div class="absolute top-0 -left-6 w-6 h-6 bg-transparent rounded-tr-[1.5rem] shadow-[12px_-12px_0_0_#0e1e2e]"></div>
                        <div class="absolute -bottom-6 right-0 w-6 h-6 bg-transparent rounded-tr-[1.5rem] shadow-[12px_-12px_0_0_#0e1e2e]"></div>
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center group-hover:scale-110 group-hover:bg-[#0e1e2e] transition-all duration-300">
                            <svg class="w-4 h-4 md:w-5 md:h-5 text-[#0e1e2e] group-hover:-translate-y-1 group-hover:translate-x-1 group-hover:text-[#d4ae6f] transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path></svg>
                        </div>
                    </div>
                    <p class="text-[#0e1e2e] text-xs md:text-sm font-bold uppercase tracking-wider mb-2 relative z-10">
                        <?php 
                            $cats = get_the_category($p->ID);
                            echo !empty($cats) ? esc_html($cats[0]->name) : 'Tin Tức';
                        ?>
                    </p>
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-black text-[#0e1e2e] leading-none mb-3 md:mb-4 playfair uppercase relative z-10 line-clamp-3">
                        <?php echo esc_html($p->post_title); ?>
                    </h3>
                    <p class="text-[#0e1e2e]/80 text-xs md:text-sm mb-4 md:mb-6 line-clamp-3 relative z-10">
                        <?php echo wp_trim_words($p->post_excerpt ?: $p->post_content, 20, '...'); ?>
                    </p>
                </a>
                <?php endif; ?>

                <?php if (isset($bento_posts[2])) : $p = $bento_posts[2]; ?>
                <!-- Bottom: Third Post Card -->
                <a href="<?php echo get_permalink($p->ID); ?>" class="relative w-full h-[200px] lg:h-full rounded-[2rem] md:rounded-[2.5rem] overflow-hidden group block">
                    <?php if (has_post_thumbnail($p->ID)) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url($p->ID, 'large'); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="<?php echo esc_attr($p->post_title); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sanh-fenica.webp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="<?php echo esc_attr($p->post_title); ?>">
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors duration-500"></div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 md:w-16 md:h-16 rounded-full bg-[#d4ae6f]/90 backdrop-blur-md flex items-center justify-center border border-white/30 group-hover:scale-110 transition-transform z-10 opacity-0 group-hover:opacity-100">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-[#0e1e2e]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full p-5 md:p-6 bg-gradient-to-t from-[#0e1e2e]/90 to-transparent">
                        <div class="flex items-center gap-3 text-white/70 text-[10px] md:text-xs mb-1 md:mb-2">
                            <span><?php echo get_the_date('d M Y', $p->ID); ?></span>
                        </div>
                        <h3 class="text-white font-bold uppercase tracking-wide text-xs md:text-sm line-clamp-2"><?php echo esc_html($p->post_title); ?></h3>
                    </div>
                </a>
                <?php endif; ?>
            </div>

            <!-- Col 3: Right Column (20%) -->
            <div class="w-full lg:w-[20%] flex flex-col lg:grid lg:grid-rows-[1.5fr_1fr] gap-4 lg:gap-6 h-auto lg:h-full">
                <?php if (isset($bento_posts[3])) : $p = $bento_posts[3]; ?>
                <!-- Top: Vertical Card -->
                <a href="<?php echo get_permalink($p->ID); ?>" class="relative w-full h-[250px] lg:h-full rounded-[2rem] md:rounded-[2.5rem] bg-[#f0e0ca]/5 overflow-hidden group border border-white/10 block">
                    <div class="absolute top-0 left-0 w-full p-5 md:p-6 z-20">
                        <p class="text-[#d4ae6f] text-[10px] md:text-xs font-bold uppercase tracking-wider mb-1">
                            <?php 
                                $cats = get_the_category($p->ID);
                                echo !empty($cats) ? esc_html($cats[0]->name) : 'Tin Tức';
                            ?>
                        </p>
                        <p class="text-white/60 text-[10px] mb-2 md:mb-3"><?php echo get_the_date('d M Y', $p->ID); ?></p>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-black text-white playfair uppercase leading-tight line-clamp-3">
                            <?php echo esc_html($p->post_title); ?>
                        </h3>
                    </div>
                    <?php if (has_post_thumbnail($p->ID)) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url($p->ID, 'large'); ?>" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 opacity-80" alt="<?php echo esc_attr($p->post_title); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ho-boi-fenica.webp" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 opacity-80" alt="<?php echo esc_attr($p->post_title); ?>">
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-gradient-to-b from-[#0e1e2e] via-[#0e1e2e]/40 to-[#0e1e2e]/80"></div>
                </a>
                <?php endif; ?>

                <!-- Bottom: Categories Card -->
                <div class="relative w-full h-[200px] lg:h-full rounded-[2rem] md:rounded-[2.5rem] bg-[#1a2b3c] p-5 md:p-6 flex flex-col group overflow-hidden border border-white/5">
                    <div class="flex flex-wrap gap-2 mb-auto z-10 max-h-[80px] overflow-hidden">
                        <?php
                        $categories = get_categories(array('number' => 6));
                        foreach ($categories as $cat) :
                        ?>
                        <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="px-3 py-1.5 rounded-full bg-[#f0e0ca] text-[#0e1e2e] text-[10px] font-bold hover:bg-[#d4ae6f] transition-colors">
                            <?php echo esc_html($cat->name); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="absolute bottom-0 right-0 bg-[#0e1e2e] rounded-tl-[2rem] pt-3 pl-3 md:pt-4 md:pl-4 z-20">
                        <div class="absolute top-0 -right-5 md:-right-6 w-5 h-5 md:w-6 md:h-6 bg-transparent rounded-bl-[1.5rem] shadow-[-10px_10px_0_0_#0e1e2e]"></div>
                        <div class="absolute -bottom-5 md:-bottom-6 left-0 w-5 h-5 md:w-6 md:h-6 bg-transparent rounded-bl-[1.5rem] shadow-[-10px_10px_0_0_#0e1e2e]"></div>
                        <a href="#grid-news" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center hover:scale-110 transition-transform">
                            <svg class="w-4 h-4 text-[#0e1e2e]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                    </div>
                    <h3 class="text-white font-bold tracking-wide mt-4 z-10 relative text-xs md:text-sm">Khám phá <br> Chuyên mục</h3>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Grid Content -->
        <div id="grid-news" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 w-full" data-aos="fade-up" data-aos-delay="100">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $grid_query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'offset'         => 4, // Skip the 4 posts from the Bento grid
                'post_status'    => 'publish',
                'paged'          => $paged
            ));

            if ($grid_query->have_posts()) :
                while ($grid_query->have_posts()) : $grid_query->the_post();
            ?>
            <!-- Card -->
            <div class="h-auto flex">
                <a href="<?php the_permalink(); ?>" class="group cursor-pointer flex flex-col h-full w-full overflow-hidden transition-all duration-500 bg-white/[0.02] border border-[#d4ae6f]/20 rounded-[2rem] p-4 md:p-5 hover:bg-white/[0.05] hover:border-[#d4ae6f]/40 shadow-lg hover:shadow-[0_10px_30px_rgba(212,174,111,0.15)] hover:-translate-y-2 block">
                    <div class="relative w-full h-[250px] md:h-[300px] shrink-0 overflow-hidden rounded-[1.5rem]">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title_attribute(); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/anh-du-an-fenica-moi-nhat.jpg" alt="<?php the_title_attribute(); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0e1e2e] via-transparent to-transparent opacity-60 pointer-events-none"></div>
                    </div>
                    <div class="pt-6 flex flex-col flex-1 pb-2">
                        <div class="flex items-center gap-2 text-[#d4ae6f] text-xs font-bold uppercase tracking-wider mb-3">
                            <span class="w-2 h-2 rounded-full bg-[#d4ae6f] opacity-50 group-hover:animate-pulse"></span>
                            <?php 
                                $categories = get_the_category();
                                echo !empty($categories) ? esc_html($categories[0]->name) : 'Tin tức';
                            ?>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white playfair mb-4 group-hover:text-[#d4ae6f] transition-colors leading-tight line-clamp-2">
                            <?php the_title(); ?>
                        </h3>
                        <p class="text-gray-300 font-light text-sm md:text-base mb-6 line-clamp-3">
                            <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                        </p>
                        <div class="mt-auto flex items-center gap-2 text-[#d4ae6f] font-bold text-sm uppercase tracking-wide">
                            Đọc tiếp
                            <svg class="w-4 h-4 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </div>
                    </div>
                </a>
            </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <div class="col-span-full text-center text-white/50 py-10">
                    Chưa có thêm bài viết nào.
                </div>
            <?php endif; ?>
        </div>
        
    </div>
</section>
