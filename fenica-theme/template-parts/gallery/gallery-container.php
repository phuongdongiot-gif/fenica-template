<section class="gallery-container relative w-full pt-8 lg:pt-20">
    <!-- Normal Wrapper (No longer pinned) -->
    <div class="w-full min-h-screen flex items-center relative overflow-hidden px-4 md:px-8 max-w-[1600px] mx-auto">

        <!-- Background Ambient Glow -->
        <div
            class="absolute left-0 top-1/2 -translate-y-1/2 w-[60vw] h-[60vw] bg-[radial-gradient(circle_at_center,rgba(212,174,111,0.1)_0%,transparent_60%)] pointer-events-none z-0">
        </div>

        <div class="w-full h-full flex flex-col lg:flex-row items-center justify-between gap-10 lg:gap-20 pb-10 pt-16">

            <!-- Left Content (Text) -->
            <div class="w-full lg:w-4/12 flex flex-col justify-center z-20" data-aos="fade-right"
                data-aos-duration="1000">
                <h4 class="text-[#d4ae6f] text-sm md:text-base font-bold uppercase tracking-[0.3em] mb-4">A&T Saigon
                    Riverside</h4>
                <h2
                    class="text-4xl md:text-6xl xl:text-7xl font-bold playfair uppercase tracking-wide animate-gradient-text drop-shadow-[0_2px_15px_rgba(212,174,111,0.4)] leading-tight mb-8">
                    Thư Viện <br /> Hình Ảnh
                </h2>

                <div class="flex items-center gap-3 mb-8">
                    <div class="h-[1px] w-12 bg-gradient-to-r from-transparent to-[#d4ae6f]"></div>
                    <div
                        class="w-2.5 h-2.5 rotate-45 bg-gradient-to-br from-[#f0e0ca] to-[#d4ae6f] shadow-[0_0_10px_rgba(212,174,111,0.8)]">
                    </div>
                    <div class="h-[1px] w-full max-w-[120px] bg-gradient-to-l from-transparent to-[#d4ae6f]"></div>
                </div>

                <!-- Controls -->
                <div class="flex items-center gap-4">
                    <div class="flex gap-2">
                        <button id="gal-prev"
                            class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:border-[#d4ae6f] hover:text-[#d4ae6f] hover:bg-[#d4ae6f]/10 transition-all cursor-pointer shadow-lg backdrop-blur-sm z-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="gal-next"
                            class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:border-[#d4ae6f] hover:text-[#d4ae6f] hover:bg-[#d4ae6f]/10 transition-all cursor-pointer shadow-lg backdrop-blur-sm z-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <p class="text-sm text-gray-400 font-light italic">Vuốt / Kéo để xem ảnh</p>
                </div>
            </div>

            <!-- Right Content (Swiper Cards) -->
            <div class="w-full lg:w-8/12 h-[50vh] lg:h-[75vh] relative z-10 flex items-center justify-center"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div
                    class="swiper gallery-cards-swiper w-full max-w-[400px] lg:max-w-[500px] xl:max-w-[700px] h-[350px] md:h-[450px] lg:h-[600px] xl:h-[700px]">
                    <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div
                            class="swiper-slide rounded-[2rem] overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.6)] border border-white/10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-fenica.jpg"
                                class="w-full h-full object-cover" alt="Gallery 1" loading="lazy" title="Gallery 1">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-6 md:p-8">
                                <h3 class="text-2xl md:text-3xl font-bold text-white playfair tracking-wide">Cảnh
                                    quan về đêm</h3>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="swiper-slide rounded-[2rem] overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.6)] border border-white/10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sanh-fenica.webp"
                                class="w-full h-full object-cover" alt="Gallery 2" loading="lazy" title="Gallery 2">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-6 md:p-8">
                                <h3 class="text-2xl md:text-3xl font-bold text-white playfair tracking-wide">Kiến
                                    trúc mặt ngoài</h3>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div
                            class="swiper-slide rounded-[2rem] overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.6)] border border-white/10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fenica-goc-nhin-thu-ba.webp"
                                class="w-full h-full object-cover" alt="Gallery 3" loading="lazy" title="Gallery 3">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-6 md:p-8">
                                <h3 class="text-2xl md:text-3xl font-bold text-white playfair tracking-wide">Không
                                    gian xanh</h3>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div
                            class="swiper-slide rounded-[2rem] overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.6)] border border-white/10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fenica-goc-nhin-thu-ba.webp"
                                class="w-full h-full object-cover p-8" alt="Gallery 4" loading="lazy" title="Gallery 4">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-6 md:p-8">
                                <h3 class="text-2xl md:text-3xl font-bold text-white playfair tracking-wide">Tổng
                                    thể dự án</h3>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div
                            class="swiper-slide rounded-[2rem] overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.6)] border border-white/10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-03.png"
                                class="w-full h-full object-cover bg-white p-4" alt="Gallery 5" loading="lazy"
                                title="Gallery 5">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-6 md:p-8">
                                <h3 class="text-2xl md:text-3xl font-bold text-white playfair tracking-wide">Mặt
                                    bằng tầng 3-13</h3>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div
                            class="swiper-slide rounded-[2rem] overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.6)] border border-white/10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/goc-nhin-hoan-hon-fenica.webp"
                                class="w-full h-full object-cover p-4" alt="Gallery 6" loading="lazy" title="Gallery 6">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-6 md:p-8">
                                <h3 class="text-2xl md:text-3xl font-bold text-white playfair tracking-wide">Tiện
                                    ích nội khu</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Masonry Image Grid Section -->