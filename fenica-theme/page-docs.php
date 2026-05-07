<?php
/**
 * Template Name: Tài Liệu Dự Án
 */

get_header(); ?>

<main id="primary" class="site-main relative z-10 pt-32 pb-24 px-4 min-h-[80vh]">

    <div class="max-w-[1200px] mx-auto">
        <!-- Custom Hero Logos area -->
        <div class="flex flex-col items-center justify-center pt-8 pb-4" data-aos="zoom-in" data-aos-duration="1000">
            <div class="flex flex-col items-center justify-center gap-4 md:gap-6 group cursor-pointer relative p-8">
                <!-- Glow effect behind -->
                <div
                    class="absolute inset-0 bg-[#d4ae6f] blur-[100px] opacity-10 group-hover:opacity-30 transition-opacity duration-1000 rounded-full scale-150">
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-fenica.png"
                    alt="Logo Đất Xanh Miền Đông"
                    class="relative z-10 w-40 md:w-56 object-contain transition-all duration-700 opacity-80 group-hover:opacity-100 group-hover:drop-shadow-[0_0_20px_rgba(255,255,255,0.5)] group-hover:translate-y-2"
                    title="Logo Đất Xanh Miền Đông">

                <!-- Animated Separator -->
                <div
                    class="h-[2px] w-12 bg-[#d4ae6f]/50 group-hover:w-full group-hover:bg-[#d4ae6f] transition-all duration-700 shadow-[0_0_10px_rgba(212,174,111,0)] group-hover:shadow-[0_0_15px_rgba(212,174,111,1)]">
                </div>

                <!-- Logo dưới -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cdt-dxmd-fenica.png"
                    alt="Logo Đất Xanh Miền Đông"
                    class="relative z-10 w-40 md:w-56 object-contain transition-all duration-700 opacity-80 group-hover:opacity-100 group-hover:drop-shadow-[0_0_20px_rgba(255,255,255,0.5)] group-hover:translate-y-2"
                    title="Logo Đất Xanh Miền Đông">
            </div>
        </div>

        <!-- Header area -->
        <div class="mb-16 text-center" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-3xl md:text-4xl font-bold uppercase playfair tracking-widest text-white mb-4">Tài Liệu
                <span class="text-[#d4ae6f]">Dự Án</span>
            </h2>
        </div>

        <!-- Global SVG Definitions for Luxury Icons -->
        <svg width="0" height="0" class="absolute hidden">
            <defs>
                <linearGradient id="luxuryGold" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#b38e55" />
                    <stop offset="30%" stop-color="#f9e5b8" />
                    <stop offset="50%" stop-color="#d4ae6f" />
                    <stop offset="70%" stop-color="#f9e5b8" />
                    <stop offset="100%" stop-color="#8a6d3b" />
                </linearGradient>
            </defs>
        </svg>

        <!-- Documents Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-6" data-aos="fade-up"
            data-aos-delay="100">

            <!-- Folder 01. PHÁP LÝ -->
            <a href="https://drive.google.com/drive/u/0/folders/1RfaFTX9rFNOfJSGMcN9x2HU4M9ZGHduC"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">01. PHÁP
                        LÝ</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
            <!-- Folder 02. TÀI LIỆU BÁN HÀNG -->
            <a href="https://drive.google.com/drive/u/0/folders/1pblEvk1RpRMCa9jpOr7PAYN8iuQJpgfB"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">02.
                        TLBH</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
            <!-- Folder 03. TÀI LIỆU ĐÀO TẠO -->
            <a href="https://drive.google.com/drive/u/0/folders/1D-t9ibDEme46JRhyjaVkyxsxiajGGd1c"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">03.
                        TÀI LIỆU TRAINING</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
            <!-- Folder 04. MẶT BẰNG -->
            <a href="https://drive.google.com/drive/u/0/folders/1wH2th_iD5azu0xaKVXlG-IuCo7PlZR36"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">04. MẶT
                        BẰNG</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
            <!-- Folder 05. PTTT -->
            <a href="https://drive.google.com/drive/u/0/folders/1L-AABALNW1IF6_dVHddc738M325OhFI-"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">05.
                        PTTT</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
            <!-- Folder 06. PHỐI CẢNH DA -->
            <a href="https://drive.google.com/drive/u/0/folders/1SR96R7DV8JzFR_AXWBLRAv6QKqnTYgX1"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">06. PHỐI
                        CẢNH DA</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
            <!-- Folder 07. HÌNH ẢNH -->
            <a href="https://drive.google.com/drive/u/0/folders/1QDbkZVY8MtKw62exQEGSjLZmaJkzSQ8W"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">07. HÌNH
                        ẢNH</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
            <!-- Folder 08. NHÀ MẪU -->
            <a href="https://drive.google.com/drive/u/0/folders/1-ayXge6v_r8qlsq-M2Mt954Or04Iv2xn"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">08. NHÀ
                        MẪU</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
            <!-- Folder 09. VIDEO -->
            <a href="https://drive.google.com/drive/u/0/folders/1BTtk6vNbweFK-su4GykAcjsLDB17FdES"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">09.
                        VIDEO</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
            <!-- Folder 10. BIỂU MẪU -->
            <a href="https://drive.google.com/drive/u/0/folders/1lEuOT20MQQhUEyUP-XBIjqQN7SrCGeP7"
                class="group flex items-center justify-between p-4 md:p-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl hover:border-[#d4ae6f]/60 hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 shadow-lg">
                <div class="flex items-center gap-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 shrink-0 drop-shadow-lg group-hover:scale-125 transition-all duration-500"
                        viewBox="200 100 1000 1000">
                        <path fill="#d4ae6f"
                            d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                    </svg>
                    <span class="text-white font-medium text-[14px] md:text-[15px] truncate tracking-wide">10. BIỂU
                        MẪU</span>
                </div>
                <div
                    class="text-gray-400 hover:text-white shrink-0 cursor-pointer p-1 rounded-full hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                    </svg>
                </div>
            </a>
        </div>

    </div>

</main>

<div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fenica-tach-nen.png"
        class="w-full h-full opacity-80 hover:opacity-100 transition-all duration-700" alt="" srcset="">
</div>

<?php get_footer(); ?>