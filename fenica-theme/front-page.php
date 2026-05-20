<?php
/*
 * LUU Y QUAN TRONG:
 * File nay chua code PHP (WP_Query) goi du lieu DONG tu co so du lieu WordPress (phan Tin tuc).
 * KHONG ghi de file nay bang HTML tinh (static) tu ban thiet ke, neu khong se mat tinh nang lay bai tu dong!
 *//**
  * Template Name: Home Page
  */

get_header(); ?>

<main id="primary" class="site-main">

    <?php get_template_part('template-parts/home/hero'); ?>

    <?php get_template_part('template-parts/home/overview'); ?>

    <?php get_template_part('template-parts/home/location-details'); ?>

    <?php get_template_part('template-parts/home/connectivity-map'); ?>

    <?php get_template_part('template-parts/home/internal-amenities'); ?>

    <?php get_template_part('template-parts/home/floor-plans'); ?>

    <?php get_template_part('template-parts/home/gallery'); ?>

    <?php get_template_part('template-parts/home/news'); ?>

    <?php get_template_part('template-parts/home/cta'); ?>
    <section class="py-16 md:py-24 relative z-10 bg-transparent">
        <div class="max-w-[1600px] mx-auto px-4 md:px-8">
            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12">
                <div class="max-w-3xl">
                    <h2 class="text-2xl md:text-xl font-bold playfair mb-4 animate-gradient-text drop-shadow-[0_2px_15px_rgba(212,174,111,0.4)]"
                        data-aos="fade-up">
                        Tin tức & Sự kiện mới nhất
                    </h2>
                    <div class="flex items-center gap-3 mt-4 mb-6" data-aos="fade-up">
                        <div class="h-[1px] w-12 bg-gradient-to-r from-transparent to-[#d4ae6f]"></div>
                        <div
                            class="w-2.5 h-2.5 rotate-45 bg-gradient-to-br from-[#f0e0ca] to-[#d4ae6f] shadow-[0_0_10px_rgba(212,174,111,0.8)]">
                        </div>
                        <div class="h-[1px] w-24 bg-gradient-to-r from-[#d4ae6f] to-transparent"></div>
                    </div>
                    <p class="text-base md:text-lg text-gray-300 font-light leading-relaxed" data-aos="fade-up"
                        data-aos-delay="100">
                        Cập nhật những thông tin, tiến độ và sự kiện nổi bật nhất từ dự án <span
                            class="text-[#d4ae6f] font-bold">Fenica</span>.
                    </p>
                </div>
                <a href="<?php echo home_url('/tin-tuc'); ?>"
                    class="inline-flex items-center gap-2 bg-[#d4ae6f]/10 border border-[#d4ae6f]/30 hover:bg-[#d4ae6f] text-[#d4ae6f] hover:text-[#0e1e2e] font-bold py-3 px-6 rounded-full transition-all duration-300 shadow-[0_4px_15px_rgba(212,174,111,0.2)] hover:shadow-[0_4px_25px_rgba(212,174,111,0.4)] shrink-0"
                    data-aos="fade-left" data-aos-delay="200">
                    Xem tất cả bài viết
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Carousel Content -->
            <style>
                .news-ticker .swiper-wrapper {
                    transition-timing-function: linear !important;
                }
            </style>
            <div class="swiper newsSwiper w-full news-ticker overflow-visible" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper flex items-stretch">
                    <?php
                    $news_query = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'post_status' => 'publish'
                    ));
                    if ($news_query->have_posts()):
                        while ($news_query->have_posts()):
                            $news_query->the_post();
                            $categories = get_the_category();
                            $cat_name = !empty($categories) ? esc_html($categories[0]->name) : 'Tin tức';
                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            if (!$thumbnail)
                                $thumbnail = get_template_directory_uri() . '/assets/images/anh-du-an-fenica-khoi-de.jpg';
                            ?>
                            <div class="swiper-slide w-[320px] md:w-[420px] shrink-0 h-auto flex">
                                <div onclick="window.location.href='<?php the_permalink(); ?>';"
                                    class="group cursor-pointer flex flex-col h-full overflow-hidden transition-all duration-500 bg-white/[0.02] border border-[#d4ae6f]/20 rounded-[2rem] p-4 md:p-5 hover:bg-white/[0.05] hover:border-[#d4ae6f]/40 shadow-lg hover:shadow-[0_10px_30px_rgba(212,174,111,0.15)] hover:-translate-y-2">
                                    <div
                                        class="relative w-full h-[250px] md:h-[300px] shrink-0 overflow-hidden rounded-[1.5rem]">
                                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>"
                                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out"
                                            loading="lazy">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-[#0e1e2e] via-transparent to-transparent opacity-60 pointer-events-none">
                                        </div>
                                    </div>
                                    <div class="pt-6 flex flex-col flex-1 pb-2">
                                        <div
                                            class="flex items-center gap-2 text-[#d4ae6f] text-xs font-bold uppercase tracking-wider mb-3">
                                            <span class="w-2 h-2 rounded-full bg-[#d4ae6f] animate-pulse"></span>
                                            <?php echo $cat_name; ?>
                                        </div>
                                        <h3
                                            class="text-xl md:text-2xl font-bold text-white playfair mb-4 group-hover:text-[#d4ae6f] transition-colors leading-tight">
                                            <?php the_title(); ?>
                                        </h3>
                                        <p class="text-gray-300 font-light text-sm md:text-base mb-6 line-clamp-3">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>"
                                            class="mt-auto flex items-center gap-2 text-[#d4ae6f] font-bold text-sm uppercase tracking-wide">
                                            Đọc tiếp
                                            <svg class="w-4 h-4 group-hover:translate-x-2 transition-transform duration-300"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p class="text-white">Chưa có bài viết nào.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Action Services Section -->
    <section class="w-full relative z-10 flex flex-col pt-10 md:pt-20" data-aos="fade-up" data-aos-duration="1000">
        <div class="border-t border-white/20 w-full"></div>
        <!-- Row 1 -->
        <div
            class="group relative border-b border-white/20 cursor-pointer overflow-hidden transition-all duration-500 hover:bg-white/5">
            <!-- Background Image on Hover -->
            <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-30 transition-opacity duration-700 z-0"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/anh-du-an-fenica-huong-tu-metro.jpg');">
            </div>
            <!-- Overlay to darken background image -->
            <div
                class="absolute inset-0 bg-gradient-to-r from-[#0e1e2e] via-[#0e1e2e]/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 z-0">
            </div>

            <div
                class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-8 py-8 md:py-16 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 md:gap-12">
                <!-- Left (Number & Text) -->
                <div class="flex items-start gap-4 md:gap-6 w-full md:w-1/3 order-2 md:order-1 mt-2 md:mt-0">
                    <span
                        class="w-8 h-8 md:w-10 md:h-10 shrink-0 rounded-full border border-white/30 flex items-center justify-center text-xs md:text-sm font-light text-white group-hover:border-white transition-colors">1</span>
                    <p
                        class="text-gray-300 font-light text-sm md:text-base leading-relaxed group-hover:text-white transition-colors max-w-sm pt-1 md:pt-2">
                        Khám phá toàn bộ thông tin và hình ảnh dự án qua ấn phẩm thiết kế chi tiết.</p>
                </div>

                <!-- Center (Big Text) -->
                <div
                    class="w-full md:w-1/3 text-left md:text-center order-1 md:order-2 flex justify-between items-center md:block">
                    <div class="relative inline-flex items-center md:inline-block">
                        <h3
                            class="text-4xl md:text-6xl lg:text-[80px] font-light text-white tracking-tight transition-colors duration-500">
                            Catalogue</h3>
                        <span
                            class="ml-3 md:ml-0 md:absolute md:-top-2 md:-right-14 px-2.5 py-0.5 md:px-3 md:py-1 bg-gradient-to-r from-[#d4ae6f]/20 to-[#d4ae6f]/5 border border-[#d4ae6f]/30 rounded-full text-[#d4ae6f] text-[9px] md:text-xs font-bold uppercase tracking-widest whitespace-nowrap backdrop-blur-sm">
                            Coming soon
                        </span>
                    </div>
                    <!-- Mobile Arrow -->
                    <svg class="w-8 h-8 text-white/30 block md:hidden group-hover:text-white group-hover:translate-x-2 transition-all duration-500"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>

                <!-- Right (Arrow) -->
                <div class="w-full md:w-1/3 hidden md:flex justify-end order-3">
                    <svg class="w-20 h-20 text-white opacity-0 group-hover:opacity-100 -translate-x-12 group-hover:translate-x-0 transition-all duration-700 ease-out"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div
            class="group relative border-b border-white/20 cursor-pointer overflow-hidden transition-all duration-500 hover:bg-white/5">
            <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-30 transition-opacity duration-700 z-0"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/anh-du-an-fenica-phong-ngu.jpg');">
            </div>
            <div
                class="absolute inset-0 bg-gradient-to-r from-[#0e1e2e] via-[#0e1e2e]/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 z-0">
            </div>

            <div
                class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-8 py-8 md:py-16 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 md:gap-12">
                <div class="flex items-start gap-4 md:gap-6 w-full md:w-1/3 order-2 md:order-1 mt-2 md:mt-0">
                    <span
                        class="w-8 h-8 md:w-10 md:h-10 shrink-0 rounded-full border border-white/30 flex items-center justify-center text-xs md:text-sm font-light text-white group-hover:border-white transition-colors">2</span>
                    <p
                        class="text-gray-300 font-light text-sm md:text-base leading-relaxed group-hover:text-white transition-colors max-w-sm pt-1 md:pt-2">
                        Trải nghiệm chân thực không gian sống và tiện ích với góc nhìn toàn cảnh 360 độ.</p>
                </div>

                <div
                    class="w-full md:w-1/3 text-left md:text-center order-1 md:order-2 flex justify-between items-center md:block">
                    <div class="relative inline-flex items-center md:inline-block">
                        <h3
                            class="text-4xl md:text-6xl lg:text-[80px] font-light text-white tracking-tight transition-colors duration-500">
                            VR-360</h3>
                        <span
                            class="ml-3 md:ml-0 md:absolute md:-top-2 md:-right-14 px-2.5 py-0.5 md:px-3 md:py-1 bg-gradient-to-r from-[#d4ae6f]/20 to-[#d4ae6f]/5 border border-[#d4ae6f]/30 rounded-full text-[#d4ae6f] text-[9px] md:text-xs font-bold uppercase tracking-widest whitespace-nowrap backdrop-blur-sm">
                            Coming soon
                        </span>
                    </div>
                    <svg class="w-8 h-8 text-white/30 block md:hidden group-hover:text-white group-hover:translate-x-2 transition-all duration-500"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>

                <div class="w-full md:w-1/3 hidden md:flex justify-end order-3">
                    <svg class="w-20 h-20 text-white opacity-0 group-hover:opacity-100 -translate-x-12 group-hover:translate-x-0 transition-all duration-700 ease-out"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Row 3 -->
        <div
            class="group relative border-b border-white/20 cursor-pointer overflow-hidden transition-all duration-500 hover:bg-white/5">
            <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-30 transition-opacity duration-700 z-0"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/anh-du-an-fenica-khoi-de.jpg');">
            </div>
            <div
                class="absolute inset-0 bg-gradient-to-r from-[#0e1e2e] via-[#0e1e2e]/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 z-0">
            </div>

            <div
                class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-8 py-8 md:py-16 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 md:gap-12">
                <div class="flex items-start gap-4 md:gap-6 w-full md:w-1/3 order-2 md:order-1 mt-2 md:mt-0">
                    <span
                        class="w-8 h-8 md:w-10 md:h-10 shrink-0 rounded-full border border-white/30 flex items-center justify-center text-xs md:text-sm font-light text-white group-hover:border-white transition-colors">3</span>
                    <p
                        class="text-gray-300 font-light text-sm md:text-base leading-relaxed group-hover:text-white transition-colors max-w-sm pt-1 md:pt-2">
                        Tải về trọn bộ thông tin mặt bằng, chính sách bán hàng và hồ sơ pháp lý.</p>
                </div>

                <div
                    class="w-full md:w-1/3 text-left md:text-center order-1 md:order-2 flex justify-between items-center md:block">
                    <div class="relative inline-flex items-center md:inline-block">
                        <h3
                            class="text-4xl md:text-6xl lg:text-[80px] font-light text-white tracking-tight transition-colors duration-500">
                            Tài Liệu</h3>
                        <span
                            class="ml-3 md:ml-0 md:absolute md:-top-2 md:-right-14 px-2.5 py-0.5 md:px-3 md:py-1 bg-gradient-to-r from-[#d4ae6f]/20 to-[#d4ae6f]/5 border border-[#d4ae6f]/30 rounded-full text-[#d4ae6f] text-[9px] md:text-xs font-bold uppercase tracking-widest whitespace-nowrap backdrop-blur-sm">
                            Coming soon
                        </span>
                    </div>
                    <svg class="w-8 h-8 text-white/30 block md:hidden group-hover:text-white group-hover:translate-x-2 transition-all duration-500"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>

                <div class="w-full md:w-1/3 hidden md:flex justify-end order-3">
                    <svg class="w-20 h-20 text-white opacity-0 group-hover:opacity-100 -translate-x-12 group-hover:translate-x-0 transition-all duration-700 ease-out"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
