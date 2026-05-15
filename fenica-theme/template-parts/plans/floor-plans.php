<section id="floor-plans-section" class="w-full relative flex flex-col justify-start overflow-clip">

    <!-- Responsive Navigation Overlay (Horizontal Top Nav on Mobile / Left Sidebar on Desktop) -->
    <div
        class="fixed top-[65px] md:top-[80px] lg:absolute lg:top-0 left-0 w-full lg:h-full pointer-events-none z-40 lg:z-50">
        <div class="max-w-[1600px] mx-auto w-full h-full relative lg:px-4">
            <div class="lg:absolute left-0 md:left-8 top-0 lg:h-full w-full lg:w-[280px] xl:w-[320px]">
                <!-- Sticky Container -->
                <div
                    class="lg:sticky lg:top-0 lg:h-screen flex flex-col lg:justify-center items-center lg:items-start pointer-events-auto px-4 lg:px-0 pt-4 lg:pt-0 pb-2 lg:pb-12">
                    <!-- AOS Animation Wrapper -->
                    <div class="w-full max-w-md lg:max-w-none" data-aos="fade-down" data-aos-duration="1000">
                        <!-- Desktop Title Box -->
                        <div
                            class="hidden lg:block overview-title-container w-full text-left p-6 xl:p-8 rounded-3xl border border-white/10 bg-[#0e1e2e]/50 backdrop-blur-md">
                            <h2 class="py-1 text-2xl xl:text-4xl font-bold playfair uppercase tracking-wide animate-gradient-text drop-shadow-[0_2px_15px_rgba(212,174,111,0.4)]"
                                id="floor-main-title">
                                Mặt Bằng
                            </h2>
                            <div class="flex items-center gap-3 mt-4">
                                <div class="h-[1px] w-8 bg-gradient-to-r from-transparent to-[#d4ae6f]"></div>
                                <div
                                    class="w-2.5 h-2.5 rotate-45 bg-gradient-to-br from-[#f0e0ca] to-[#d4ae6f] shadow-[0_0_10px_rgba(212,174,111,0.8)]">
                                </div>
                                <div class="h-[1px] flex-1 bg-gradient-to-l from-transparent to-[#d4ae6f]"></div>
                            </div>
                        </div>

                        <!-- Navigation List (Responsive) -->
                        <div class="flex flex-row lg:flex-col gap-2 lg:gap-3 w-full lg:border-l lg:border-white/10 lg:pl-5 relative mt-0 lg:mt-8 bg-[#0e1e2e]/90 lg:bg-transparent backdrop-blur-md lg:backdrop-blur-none border border-[#d4ae6f]/30 lg:border-none p-1.5 lg:p-0 rounded-full lg:rounded-none overflow-x-auto lg:overflow-visible hide-scrollbar shadow-[0_5px_15px_rgba(0,0,0,0.5)] lg:shadow-none snap-x"
                            id="floor-nav">
                            <!-- Active Indicator Line (Desktop only) -->
                            <div class="hidden lg:block absolute left-[-1px] top-0 w-[2px] h-12 bg-gradient-to-b from-[#f0e0ca] to-[#d4ae6f] shadow-[0_0_10px_rgba(212,174,111,0.8)] transition-all duration-300"
                                id="active-indicator"></div>

                            <a href="#tang-3-7"
                                class="floor-nav-link text-center lg:text-left px-5 lg:px-4 py-2 lg:py-3.5 rounded-full lg:rounded-xl text-[12px] lg:text-[14px] xl:text-[15px] font-bold uppercase tracking-wider transition-all duration-300 text-white/60 hover:text-white hover:bg-white/10 lg:hover:bg-white/5 active-link whitespace-nowrap shrink-0 snap-center">Tầng
                                3-7</a>
                            <a href="#tang-8-12a"
                                class="floor-nav-link text-center lg:text-left px-5 lg:px-4 py-2 lg:py-3.5 rounded-full lg:rounded-xl text-[12px] lg:text-[14px] xl:text-[15px] font-bold uppercase tracking-wider transition-all duration-300 text-white/60 hover:text-white hover:bg-white/10 lg:hover:bg-white/5 whitespace-nowrap shrink-0 snap-center">Tầng
                                8-12A</a>
                            <a href="#tang-14-21"
                                class="floor-nav-link text-center lg:text-left px-5 lg:px-4 py-2 lg:py-3.5 rounded-full lg:rounded-xl text-[12px] lg:text-[14px] xl:text-[15px] font-bold uppercase tracking-wider transition-all duration-300 text-white/60 hover:text-white hover:bg-white/10 lg:hover:bg-white/5 whitespace-nowrap shrink-0 snap-center">Tầng
                                14-21</a>
                            <a href="#tang-22"
                                class="floor-nav-link text-center lg:text-left px-5 lg:px-4 py-2 lg:py-3.5 rounded-full lg:rounded-xl text-[12px] lg:text-[14px] xl:text-[15px] font-bold uppercase tracking-wider transition-all duration-300 text-white/60 hover:text-white hover:bg-white/10 lg:hover:bg-white/5 whitespace-nowrap shrink-0 snap-center">Tầng
                                22</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Content (Images Stacked Full Screen) -->
    <div class="w-full flex flex-col relative z-10">

        <!-- Tầng 3-3a -->
        <div id="tang-3-7"
            class="floor-section w-full min-h-[60svh] lg:min-h-[100svh] relative flex items-center justify-center p-0 overflow-hidden group border-b border-white/5">
            <!-- Giant Watermark -->
            <h3
                class="absolute top-[10vh] lg:top-[15vh] right-8 lg:right-16 text-6xl md:text-8xl lg:text-[10rem] font-bold playfair text-white/[0.03] uppercase tracking-widest z-0 pointer-events-none whitespace-nowrap">
                Tầng 3-7</h3>

            <!-- Image Container -->
            <div
                class="w-full h-[60svh] lg:h-[100svh] z-10 flex items-center justify-center p-4 pt-32 pb-8 lg:p-12 lg:pl-[320px] xl:pl-[400px]">
                <div class="relative w-full h-full flex items-center justify-center group/floor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-03.png"
                        class="w-full h-auto lg:h-full max-h-[40svh] lg:max-h-none object-contain max-w-[1400px] transition-transform duration-700"
                        alt="Mặt bằng tầng 3-7" loading="lazy" title="Mặt bằng tầng 3-7">

                    <!-- Custom Expand Button -->
                    <button
                        onclick="openPanZoomModal('<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-03.png', 'Mặt Bằng Tầng 3-7')"
                        class="absolute top-2 right-2 lg:top-4 lg:right-4 z-30 w-10 h-10 md:w-12 md:h-12 bg-[#0e1e2e]/80 backdrop-blur-md border border-[#d4ae6f]/50 rounded-full flex items-center justify-center text-white hover:text-[#d4ae6f] hover:bg-white/10 transition-all shadow-[0_5px_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4">
                            </path>
                        </svg>
                    </button>

                    <!-- Full-scale SVG Overlay for Exact Coordinates -->

                </div>
            </div>
        </div>

        <!-- Tầng 5-7 -->
        <div id="tang-8-12a"
            class="floor-section w-full min-h-[60svh] lg:min-h-[100svh] relative flex items-center justify-center p-0 overflow-hidden group border-b border-white/5">
            <h3
                class="absolute top-[10vh] lg:top-[15vh] right-8 lg:right-16 text-6xl md:text-8xl lg:text-[10rem] font-bold playfair text-white/[0.03] uppercase tracking-widest z-0 pointer-events-none whitespace-nowrap">
                Tầng 8-12A</h3>

            <div
                class="w-full h-[60svh] lg:h-[100svh] z-10 flex items-center justify-center p-4 pt-32 pb-8 lg:p-12 lg:pl-[320px] xl:pl-[400px]">
                <div class="relative w-full h-full flex items-center justify-center group/floor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-04.png"
                        class="w-full h-auto lg:h-full max-h-[40svh] lg:max-h-none object-contain max-w-[1400px] transition-transform duration-700"
                        alt="Mặt bằng tầng 8-12A" loading="lazy" title="Mặt bằng tầng 8-12A">
                    <button
                        onclick="openPanZoomModal('<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-04.png', 'Mặt Bằng Tầng 8-12A')"
                        class="absolute top-2 right-2 lg:top-4 lg:right-4 z-30 w-10 h-10 md:w-12 md:h-12 bg-[#0e1e2e]/80 backdrop-blur-md border border-[#d4ae6f]/50 rounded-full flex items-center justify-center text-white hover:text-[#d4ae6f] hover:bg-white/10 transition-all shadow-[0_5px_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Tầng 39-40 -->
        <div id="tang-14-21"
            class="floor-section w-full min-h-[60svh] lg:min-h-[100svh] relative flex items-center justify-center p-0 overflow-hidden group">
            <h3
                class="absolute top-[10vh] lg:top-[15vh] right-8 lg:right-16 text-6xl md:text-8xl lg:text-[10rem] font-bold playfair text-white/[0.03] uppercase tracking-widest z-0 pointer-events-none whitespace-nowrap">
                Tầng 14-21</h3>

            <div
                class="w-full h-[60svh] lg:h-[100svh] z-10 flex items-center justify-center p-4 pt-32 pb-8 lg:p-12 lg:pl-[320px] xl:pl-[400px]">
                <div class="relative w-full h-full flex items-center justify-center group/floor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-05.png"
                        class="w-full h-auto lg:h-full max-h-[40svh] lg:max-h-none object-contain max-w-[1400px] transition-transform duration-700"
                        alt="Mặt bằng tầng 14-21" loading="lazy" title="Mặt bằng tầng 14-21">
                    <button
                        onclick="openPanZoomModal('<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-05.png', 'Mặt Bằng Căn Hộ')"
                        class="absolute top-2 right-2 lg:top-4 lg:right-4 z-30 w-10 h-10 md:w-12 md:h-12 bg-[#0e1e2e]/80 backdrop-blur-md border border-[#d4ae6f]/50 rounded-full flex items-center justify-center text-white hover:text-[#d4ae6f] hover:bg-white/10 transition-all shadow-[0_5px_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Tầng 8-13 -->
        <div id="tang-22"
            class="floor-section w-full min-h-[60svh] lg:min-h-[100svh] relative flex items-center justify-center p-0 overflow-hidden group">
            <h3
                class="absolute top-[10vh] lg:top-[15vh] right-8 lg:right-16 text-6xl md:text-8xl lg:text-[10rem] font-bold playfair text-white/[0.03] uppercase tracking-widest z-0 pointer-events-none whitespace-nowrap">
                Tầng 22</h3>

            <div
                class="w-full h-[60svh] lg:h-[100svh] z-10 flex items-center justify-center p-4 pt-32 pb-8 lg:p-12 lg:pl-[320px] xl:pl-[400px]">
                <div class="relative w-full h-full flex items-center justify-center group/floor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-06.png"
                        class="w-full h-auto lg:h-full max-h-[40svh] lg:max-h-none object-contain max-w-[1400px] transition-transform duration-700"
                        alt="Mặt bằng tầng 22" loading="lazy" title="Mặt bằng tầng 22">
                    <button
                        onclick="openPanZoomModal('<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tang-06.png', 'Mặt Bằng Căn Hộ')"
                        class="absolute top-2 right-2 lg:top-4 lg:right-4 z-30 w-10 h-10 md:w-12 md:h-12 bg-[#0e1e2e]/80 backdrop-blur-md border border-[#d4ae6f]/50 rounded-full flex items-center justify-center text-white hover:text-[#d4ae6f] hover:bg-white/10 transition-all shadow-[0_5px_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Pan/Zoom Modal -->
<div id="pan-zoom-modal"
    class="fixed inset-0 z-[99999] hidden items-center justify-center bg-[#0e1e2e]/95 backdrop-blur-xl transition-opacity duration-300 opacity-0">
    <!-- Header -->
    <div class="absolute top-0 left-0 w-full p-4 md:p-6 flex justify-between items-center z-50 pointer-events-none">
        <h3 id="pan-zoom-title"
            class="text-white font-bold playfair text-xl md:text-3xl drop-shadow-md pointer-events-auto">Mặt Bằng
        </h3>
        <div class="flex items-center gap-4 pointer-events-auto">
            <div
                class="hidden md:flex items-center gap-2 bg-white/10 backdrop-blur rounded-full px-4 py-2 border border-white/20">
                <button onclick="zoomIn()" class="text-white hover:text-[#d4ae6f]"><svg class="w-6 h-6" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                    </svg></button>
                <span id="zoom-level" class="text-white text-sm w-12 text-center">100%</span>
                <button onclick="zoomOut()" class="text-white hover:text-[#d4ae6f]"><svg class="w-6 h-6" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10H7"></path>
                    </svg></button>
                <button onclick="resetZoom()" class="text-white hover:text-[#d4ae6f] ml-2"><svg class="w-5 h-5"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                        </path>
                    </svg></button>
            </div>
            <button onclick="closePanZoomModal()"
                class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center text-white transition-colors">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Image Container for Pan/Zoom -->
    <div id="pan-zoom-container"
        class="w-full h-full overflow-hidden flex items-center justify-center cursor-grab active:cursor-grabbing touch-none">
        <img id="pan-zoom-image" src=""
            class="max-w-none max-h-none object-contain select-none pointer-events-none origin-center transition-transform duration-100 ease-out"
            alt="Phóng to mặt bằng">
    </div>
</div>

<!-- Right Detail Sheet Overlay -->
<div id="detail-sheet-overlay"
    class="fixed inset-0 bg-[#0e1e2e]/80 z-[9998] hidden opacity-0 transition-opacity duration-500 backdrop-blur-sm"
    onclick="closeDetailSheet()"></div>

<!-- Right Detail Sheet -->
<div id="detail-sheet"
    class="fixed top-0 right-0 h-screen w-full md:w-[800px] xl:w-[1000px] bg-[#0e1e2e]/95 backdrop-blur-2xl border-l border-[#d4ae6f]/20 z-[9999] translate-x-full transition-transform duration-500 ease-[cubic-bezier(0.16,1,0.3,1)] shadow-[-20px_0_50px_rgba(0,0,0,0.5)] flex flex-col">

    <!-- Header -->
    <div class="flex items-center justify-between p-6 md:p-8 border-b border-white/10 shrink-0">
        <div>
            <h3 class="text-2xl font-bold playfair text-[#f0e0ca] tracking-wide uppercase" id="sheet-title">Mặt Bằng
                Căn Hộ</h3>
            <p class="text-sm text-[#d4ae6f] mt-1 font-light tracking-widest uppercase" id="sheet-subtitle">1 Phòng
                Ngủ +1 (Căn Góc)</p>
        </div>
        <button onclick="closeDetailSheet()"
            class="w-10 h-10 rounded-full bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>
    </div>

    <!-- Content -->
    <div class="flex-1 overflow-y-auto p-6 md:p-8 custom-scrollbar">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10">

            <!-- Left Column: 3D Layout -->
            <div
                class="w-full h-fit bg-white/5 rounded-2xl border border-white/5 flex items-center justify-center overflow-hidden relative group shadow-lg">
                <div
                    class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(212,174,111,0.1)_0%,transparent_100%)] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/can-ho/can-1-phong-ngu-goc.png"
                    alt="Mặt bằng căn hộ 3D" id="sheet-img-3d"
                    class="w-full h-auto object-cover relative z-10 group-hover:scale-105 transition-transform duration-700"
                    loading="lazy" title="Mặt bằng căn hộ 3D">
            </div>

            <!-- Right Column: Stats & Position -->
            <div class="flex flex-col gap-8 h-fit">

                <!-- Features Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div
                        class="bg-white/5 p-5 md:p-6 rounded-2xl border border-[#d4ae6f]/20 hover:border-[#d4ae6f]/50 hover:bg-white/10 transition-colors flex flex-col items-center justify-center text-center shadow-[0_0_15px_rgba(212,174,111,0.1)]">
                        <p class="text-white/60 text-xs md:text-sm uppercase tracking-widest mb-2 font-light">DTXD
                        </p>
                        <p id="sheet-dtxd" class="text-[#f0e0ca] font-bold text-xl md:text-2xl playfair">49.94 -
                            50.48m²</p>
                    </div>
                    <div
                        class="bg-white/5 p-5 md:p-6 rounded-2xl border border-[#d4ae6f]/20 hover:border-[#d4ae6f]/50 hover:bg-white/10 transition-colors flex flex-col items-center justify-center text-center shadow-[0_0_15px_rgba(212,174,111,0.1)]">
                        <p class="text-white/60 text-xs md:text-sm uppercase tracking-widest mb-2 font-light">DTSD
                        </p>
                        <p id="sheet-dtsd" class="text-[#f0e0ca] font-bold text-xl md:text-2xl playfair">45.21 -
                            46.02m²</p>
                    </div>
                </div>

                <!-- Position on Floor Plan -->
                <div
                    class="w-full h-fit bg-white/5 rounded-2xl border flex items-center justify-center overflow-hidden relative group shadow-lg mt-auto">
                    <div
                        class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(212,174,111,0.1)_0%,transparent_100%)] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/can-ho/mau-vi-tri-mat-bang-can-ho.png"
                        alt="Vị trí mặt bằng" id="sheet-img-pos"
                        class="w-full h-auto object-cover relative z-10 group-hover:scale-105 transition-transform duration-700"
                        loading="lazy" title="Vị trí mặt bằng">
                </div>

            </div>
        </div>
    </div>
</div>