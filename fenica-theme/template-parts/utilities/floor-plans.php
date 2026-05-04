<section id="floor-plans-section" class="w-full relative flex flex-col justify-start overflow-clip">

        <!-- Overlay Left Sidebar (Sticky inside Absolute wrapper) -->
        <div class="absolute left-0 top-0 w-full h-full pointer-events-none z-50">
            <div class="max-w-[1600px] mx-auto w-full h-full relative px-4">
                <div class="absolute left-4 md:left-8 top-0 h-full w-[280px] xl:w-[320px]">
                    <!-- Sticky Container -->
                    <div
                        class="hidden lg:sticky top-0 h-screen lg:flex flex-col justify-center items-start pointer-events-auto pb-12">
                        <!-- AOS Animation Wrapper -->
                        <div class="w-full" data-aos="fade-right" data-aos-duration="1000">
                            <div
                                class="overview-title-container w-full text-left p-6 xl:p-8 rounded-3xl border border-white/10">
                                <h2 class="lg:text-2xl xl:text-4xl font-bold playfair uppercase tracking-wide animate-gradient-text drop-shadow-[0_2px_15px_rgba(212,174,111,0.4)]"
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

                                <!-- Vertical Tabs List -->
                                <div class="flex flex-col gap-3 w-full border-l border-white/10 pl-5 relative mt-8"
                                    id="floor-nav">
                                    <!-- Active Indicator Line -->
                                    <div class="absolute left-[-1px] top-0 w-[2px] h-12 bg-gradient-to-b from-[#f0e0ca] to-[#d4ae6f] shadow-[0_0_10px_rgba(212,174,111,0.8)] transition-all duration-300"
                                        id="active-indicator"></div>

                                    <a href="#tang-1"
                                        class="floor-nav-link text-left px-4 py-3.5 rounded-xl text-[14px] xl:text-[15px] font-bold uppercase tracking-wider transition-all duration-300 text-white/60 hover:text-white hover:bg-white/5 active-link">Tầng
                                        1</a>
                                    <a href="#tang-2-20"
                                        class="floor-nav-link text-left px-4 py-3.5 rounded-xl text-[14px] xl:text-[15px] font-bold uppercase tracking-wider transition-all duration-300 text-white/60 hover:text-white hover:bg-white/5">Tầng
                                        2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Content (Images Stacked Full Screen) -->
        <div class="w-full flex flex-col relative z-10">

            <!-- Tầng 1 -->
            <div id="tang-1"
                class="floor-section w-full min-h-[100svh] relative flex items-center justify-center p-0 overflow-hidden group border-b border-white/5">
                <!-- Giant Watermark -->
                <h3
                    class="absolute top-[15vh] right-8 lg:right-16 text-6xl md:text-8xl lg:text-[10rem] font-bold playfair text-white/[0.03] uppercase tracking-widest z-0 pointer-events-none whitespace-nowrap">
                    Tầng 1</h3>

                <!-- Image Container -->
                <div
                    class="w-full h-[100svh] z-10 flex flex-col lg:flex-row items-center justify-center p-4 pt-24 pb-12 lg:p-12 lg:pl-[320px] xl:pl-[400px] gap-0 lg:gap-8">
                    <div class="relative w-full lg:w-[75%] flex-1 min-h-0 flex items-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tien-ich-1.png"
                            class="w-full h-full object-contain max-w-[1400px] transition-transform duration-700"
                            alt="Mặt bằng tầng 1" loading="lazy" title="Mặt bằng tầng 1">
                        <!-- Full-scale SVG Overlay for Exact Coordinates -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9932 7016"
                            class="absolute inset-0 w-full h-full pointer-events-none z-20">

                            <!-- Định nghĩa các hiệu ứng dùng chung (Reusable definitions) -->
                            <defs>
                                <g id="pulse-3-rings">
                                    <circle cx="0" cy="0" r="30" fill="none" stroke="currentColor" stroke-width="12">
                                        <animate attributeName="r" values="30; 250" dur="3s" repeatCount="indefinite" />
                                        <animate attributeName="opacity" values="0.8; 0" dur="3s"
                                            repeatCount="indefinite" />
                                    </circle>
                                    <circle cx="0" cy="0" r="30" fill="none" stroke="currentColor" stroke-width="12">
                                        <animate attributeName="r" values="30; 250" dur="3s" begin="1s"
                                            repeatCount="indefinite" />
                                        <animate attributeName="opacity" values="0.8; 0" dur="3s" begin="1s"
                                            repeatCount="indefinite" />
                                    </circle>
                                    <circle cx="0" cy="0" r="30" fill="none" stroke="currentColor" stroke-width="12">
                                        <animate attributeName="r" values="30; 250" dur="3s" begin="2s"
                                            repeatCount="indefinite" />
                                        <animate attributeName="opacity" values="0.8; 0" dur="3s" begin="2s"
                                            repeatCount="indefinite" />
                                    </circle>
                                </g>
                            </defs>

                            <!-- Hotspot CH-01 -->
                            <g class="cursor-pointer group pointer-events-auto" onclick="openDetailSheet(this)"
                                data-title="Mặt Bằng Căn Hộ" data-subtitle="1 Phòng Ngủ +1 (Căn Góc)"
                                data-dtxd="49.94 - 50.48m²" data-dtsd="45.21 - 46.02m²"
                                data-img-3d="<?php echo get_template_directory_uri(); ?>/assets/images/can-ho/mau-can-ho-fenica.jpg"
                                data-img-pos="<?php echo get_template_directory_uri(); ?>/assets/images/can-ho/mau-vi-tri-mat-bang-can-ho.png">

                                <title>Tiện Ích Dự Án | Fenica - Căn hộ TOD, ngay metro số 1, liền kề khu công nghiệp
                                </title>

                                <!-- Reusable 3-Ring Animation. Chỉ cần đổi x, y cho mỗi điểm -->
                                <use href="#pulse-3-rings" x="6760" y="1620"
                                    class="text-white group-hover:text-[#d4ae6f] transition-colors duration-300" />

                                <!-- Core Dot -->
                                <circle cx="6760" cy="1620" r="30" fill="#ffffff" stroke="#ffffff" stroke-width="15"
                                    class="group-hover:fill-[#d4ae6f] group-hover:stroke-[#d4ae6f]/30 transition-colors duration-300">
                                </circle>
                            </g>
                        </svg>
                    </div>
                    <div
                        class="w-full lg:w-[20%] h-auto max-h-[35vh] lg:max-h-none lg:h-[80vh] mt-4 lg:mt-0 shrink-0 rounded-2xl border border-white/10 flex flex-col overflow-hidden">
                        <div class="p-4 lg:p-6 overflow-y-auto custom-scrollbar h-full">
                            <ul
                                class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-1 gap-y-4 lg:gap-y-6 gap-x-6 text-sm">
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">01</span>
                                    <span class="font-semibold">Khuôn viên cảnh quan</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">02</span>
                                    <span class="font-semibold">Lối vào</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">03</span>
                                    <span class="font-semibold">Khu vui chơi trẻ em</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">04</span>
                                    <span class="font-semibold">Yoga</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">05</span>
                                    <span class="font-semibold">Khu thể thao ngoài trời</span>
                                </li>

                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">06</span>
                                    <span class="font-semibold">Lối xuống hầm</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">07</span>
                                    <span class="font-semibold">Vườn hoa</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">08</span>
                                    <span class="font-semibold">Lối lên hầm</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">09</span>
                                    <span class="font-semibold">Sảnh đón Block A</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">10</span>
                                    <span class="font-semibold">Sảnh chờ thang máy</span>
                                </li>

                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">11</span>
                                    <span class="font-semibold">Khu thương mại</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">12</span>
                                    <span class="font-semibold">Phòng SHCĐ</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">13</span>
                                    <span class="font-semibold">Gym</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">14</span>
                                    <span class="font-semibold">Nhà trẻ</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">15</span>
                                    <span class="font-semibold">Sảnh đón Block B</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tầng 2-20 -->
            <div id="tang-2-20"
                class="floor-section w-full min-h-[100svh] relative flex items-center justify-center p-0 overflow-hidden group border-b border-white/5">
                <h3
                    class="absolute top-[15vh] right-8 lg:right-16 text-6xl md:text-8xl lg:text-[10rem] font-bold playfair text-white/[0.03] uppercase tracking-widest z-0 pointer-events-none whitespace-nowrap">
                    Tầng 2-20</h3>

                <div
                    class="w-full h-[100svh] z-10 flex flex-col lg:flex-row items-center justify-center p-4 pt-24 pb-12 lg:p-12 lg:pl-[320px] xl:pl-[400px] gap-0 lg:gap-8">
                    <div class="relative w-full lg:w-[75%] flex-1 min-h-0 flex items-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mau-mat-bang-tien-ich-2.png"
                            class="w-full h-full object-contain max-w-[1400px] transition-transform duration-700"
                            alt="Mặt bằng tầng 2-20" loading="lazy" title="Mặt bằng tầng 2-20">
                    </div>
                    <div
                        class="w-full lg:w-[20%] h-auto max-h-[35vh] lg:max-h-none lg:h-[80vh] mt-4 lg:mt-0 shrink-0 rounded-2xl border border-white/10 flex flex-col overflow-hidden">
                        <div class="p-4 lg:p-6 overflow-y-auto custom-scrollbar h-full">
                            <ul
                                class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-1 gap-y-4 lg:gap-y-6 gap-x-6 text-sm">
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">16</span>
                                    <span class="font-semibold">Khu thương mại</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">17</span>
                                    <span class="font-semibold">Hồ bơi trẻ em</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">18</span>
                                    <span class="font-semibold">Hồ bơi người lớn</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">19</span>
                                    <span class="font-semibold">Khu ghế nằm</span>
                                </li>

                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">20</span>
                                    <span class="font-semibold">Khu BBQ</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">21</span>
                                    <span class="font-semibold">Phòng thay đồ</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">22</span>
                                    <span class="font-semibold">Khu chiếu phim ngoài trời</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">23</span>
                                    <span class="font-semibold">Vườn thư giãn</span>
                                </li>

                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">24</span>
                                    <span class="font-semibold">Phòng livestream</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">25</span>
                                    <span class="font-semibold">Kid Zone</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">26</span>
                                    <span class="font-semibold">Thư viện</span>
                                </li>
                                <li class="flex items-center gap-3 text-white">
                                    <span
                                        class="flex items-center justify-center w-8 h-8 rounded-full border border-gray-400 text-sm font-medium shrink-0">27</span>
                                    <span class="font-semibold">Nhà trẻ</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
