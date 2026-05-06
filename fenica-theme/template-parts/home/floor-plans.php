<section id="floor-plans-section"
    class="w-full min-h-[90vh] bg-transparent relative flex flex-col justify-center overflow-hidden py-8 lg:py-24">
    <!-- Radial Glow Background (Cinematic Lighting) -->
    <div
        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[80vw] h-[80vw] md:w-[50vw] md:h-[50vw] bg-[radial-gradient(circle_at_center,rgba(212,174,111,0.12)_0%,transparent_60%)] pointer-events-none z-0">
    </div>

    <div class="w-full flex flex-col px-4 max-w-[1600px] mx-auto z-10 relative">

        <!-- Header & Tabs -->
        <div class="w-full flex flex-col items-center justify-center text-center mb-8 lg:mb-12" data-aos="fade-up"
            data-aos-duration="1000">
            <div class="overview-title-container mb-6">
                <h2 class="py-1 py-1 text-2xl lg:text-4xl font-bold playfair uppercase tracking-wide animate-gradient-text drop-shadow-[0_2px_15px_rgba(212,174,111,0.4)]"
                    id="floor-main-title">
                    Mặt bằng Tầng 3-3A
                </h2>
                <div class="flex items-center justify-center gap-3 mt-6">
                    <div class="h-[1px] w-12 bg-gradient-to-r from-transparent to-[#d4ae6f]"></div>
                    <div
                        class="w-2.5 h-2.5 rotate-45 bg-gradient-to-br from-[#f0e0ca] to-[#d4ae6f] shadow-[0_0_10px_rgba(212,174,111,0.8)]">
                    </div>
                    <div class="h-[1px] w-12 bg-gradient-to-l from-transparent to-[#d4ae6f]"></div>
                </div>
            </div>

            <!-- Interactive Tabs -->
            <div
                class="flex items-center gap-3 md:gap-4 overflow-x-auto max-w-full pb-4 px-2 scrollbar-hide justify-start md:justify-center">
                <button
                    class="floor-tab-btn active px-6 py-2.5 rounded-full border text-[13px] md:text-[14px] font-bold uppercase tracking-wider transition-all duration-300 bg-[#d4ae6f]/20 border-[#d4ae6f] text-[#d4ae6f] shadow-[0_0_15px_rgba(212,174,111,0.3)] whitespace-nowrap"
                    data-floor="1">Tầng 3-3A</button>
                <button
                    class="floor-tab-btn px-6 py-2.5 rounded-full border text-[13px] md:text-[14px] font-bold uppercase tracking-wider transition-all duration-300 bg-black/20 border-white/10 text-white/60 hover:text-white hover:border-white/30 hover:bg-white/5 whitespace-nowrap"
                    data-floor="2">Tầng 5-7</button>
                <button
                    class="floor-tab-btn px-6 py-2.5 rounded-full border text-[13px] md:text-[14px] font-bold uppercase tracking-wider transition-all duration-300 bg-black/20 border-white/10 text-white/60 hover:text-white hover:border-white/30 hover:bg-white/5 whitespace-nowrap"
                    data-floor="3">Tầng</button>
                <button
                    class="floor-tab-btn px-6 py-2.5 rounded-full border text-[13px] md:text-[14px] font-bold uppercase tracking-wider transition-all duration-300 bg-black/20 border-white/10 text-white/60 hover:text-white hover:border-white/30 hover:bg-white/5 whitespace-nowrap"
                    data-floor="4">Tầng 8-13</button>
                <button
                    class="floor-tab-btn px-6 py-2.5 rounded-full border text-[13px] md:text-[14px] font-bold uppercase tracking-wider transition-all duration-300 bg-black/20 border-white/10 text-white/60 hover:text-white hover:border-white/30 hover:bg-white/5 whitespace-nowrap"
                    data-floor="5">Tầng 14-21</button>
            </div>
        </div>

        <!-- Floor Plan Image Container (Cinematic Box) -->
        <div class="w-full relative flex items-center justify-center p-0" data-aos="zoom-in" data-aos-duration="1200"
            data-aos-delay="200">
            <div
                class="relative w-full aspect-[4/3] md:aspect-[16/9] lg:aspect-[2/1] border border-[#d4ae6f]/40 rounded-2xl md:rounded-[2rem] shadow-[0_20px_60px_rgba(0,0,0,0.6)] overflow-hidden flex items-center justify-center group">

                <!-- Inner Cinematic Glow -->
                <div
                    class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.05)_0%,transparent_70%)] pointer-events-none">
                </div>

                <!-- Images -->
                <a id="floor-img-1"
                    href="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-03.png"
                    data-title="Mặt bằng tầng 3-3A"
                    class="glightbox floor-img absolute inset-0 w-full h-full z-10 opacity-100 scale-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-03.png"
                        class="w-full h-full object-contain p-4 md:p-8 hover:scale-[1.02] transition-transform duration-500 cursor-zoom-in"
                        alt="Mặt bằng tầng 3-3A" loading="lazy" title="Mặt bằng tầng 3-3A">
                </a>
                <a id="floor-img-2"
                    href="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-04.png"
                    data-title="Mặt bằng tầng 5-7"
                    class="glightbox floor-img absolute inset-0 w-full h-full z-0 opacity-0 scale-95 pointer-events-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-04.png"
                        class="w-full h-full object-contain p-4 md:p-8 hover:scale-[1.02] transition-transform duration-500 cursor-zoom-in"
                        alt="Mặt bằng tầng 5-7" loading="lazy" title="Mặt bằng tầng 5-7">
                </a>
                <a id="floor-img-3"
                    href="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-05.png"
                    data-title="Mặt bằng tầng"
                    class="glightbox floor-img absolute inset-0 w-full h-full z-0 opacity-0 scale-95 pointer-events-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-05.png"
                        class="w-full h-full object-contain p-4 md:p-8 hover:scale-[1.02] transition-transform duration-500 cursor-zoom-in"
                        alt="Mặt bằng tầng" loading="lazy" title="Mặt bằng tầng">
                </a>
                <a id="floor-img-4"
                    href="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-06.png"
                    data-title="Mặt bằng tầng 8-13"
                    class="glightbox floor-img absolute inset-0 w-full h-full z-0 opacity-0 scale-95 pointer-events-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-06.png"
                        class="w-full h-full object-contain p-4 md:p-8 hover:scale-[1.02] transition-transform duration-500 cursor-zoom-in"
                        alt="Mặt bằng tầng 8-13" loading="lazy" title="Mặt bằng tầng 8-13">
                </a>
                <a id="floor-img-5"
                    href="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-07.png"
                    data-title="Mặt bằng tầng 14-21"
                    class="glightbox floor-img absolute inset-0 w-full h-full z-0 opacity-0 scale-95 pointer-events-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-07.png"
                        class="w-full h-full object-contain p-4 md:p-8 hover:scale-[1.02] transition-transform duration-500 cursor-zoom-in"
                        alt="Mặt bằng tầng 14-21" loading="lazy" title="Mặt bằng tầng 07">
                </a>
            </div>
        </div>
    </div>
</section>