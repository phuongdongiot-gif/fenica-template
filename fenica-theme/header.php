<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen bg-[#0e1e2e] overflow-hidden'); ?>>
    <?php wp_body_open(); ?>
    <h1 class="sr-only"><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></h1>

    <!-- 3D Wave Persistent Background -->
    <div id="bg-canvas"
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; z-index: -10; background-color: #09121d;">
    </div>

    <!-- Preloader -->
    <?php if (is_front_page() || is_page_template('front-page.php')): ?>
        <div id="preloader"
            class="fixed inset-0 z-[9999] bg-[#0e1e2e] flex flex-col items-center justify-center px-6 overflow-hidden">
            <!-- Faded Background Image -->
            <div class="absolute inset-0 z-0 opacity-15 bg-center bg-cover"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-fenica.jpg');">
            </div>

            <svg class="relative z-10 h-8 sm:h-10 md:h-14 max-w-[85vw] w-auto mb-6 md:mb-8 preloader-logo"
                id="fenica-logo-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1156.33 208.54">
                <defs>
                    <style>
                        .st0 {
                            fill: transparent;
                            stroke: #f0e0ca;
                            stroke-width: 3px;
                            stroke-dasharray: 3000;
                            stroke-dashoffset: 3000;
                        }
                    </style>
                </defs>
                <polygon class="st0"
                    points="147.09 40.49 147.09 3.71 0 3.71 0 204.03 39.91 204.03 39.91 122.91 140.36 122.91 140.36 86.13 39.91 86.13 39.91 40.49 147.09 40.49" />
                <polygon class="st0"
                    points="237.94 167.4 237.94 121.33 341.53 121.33 341.53 84.71 237.94 84.71 237.94 40.35 346.54 40.35 346.54 3.71 198.01 3.71 198.01 204.03 347.68 204.03 347.68 167.4 237.94 167.4" />
                <rect class="st0" x="642.4" y="3.71" width="39.93" height="200.31" />
                <path class="st0"
                    d="M837.71,169.41c-35.34,0-63.1-25.33-63.25-65.54,0-38.92,26.9-65.53,63.25-65.53,22.31,0,40.49,10.31,51.79,27.62l34.34-21.04c-16.31-28.03-48.93-44.92-85.85-44.92-61.67,0-105.17,43.64-105.17,103.87s43.5,103.88,105.17,103.88c36.63,0,66.83-16.31,84.57-42.35l-32.63-23.47c-12.02,17.47-30.05,27.48-52.22,27.48Z" />
                <path class="st0"
                    d="M1077.93,3.71h-48.66l-77.97,200.31h41.64l17.45-46.64h85.42l17.45,46.64h42.64L1077.93,3.71ZM1024.13,120.62l29.04-77.41,28.9,77.41h-57.94Z" />
                <path class="st0"
                    d="M555.3,2.61h-11.41c-.73,0-1.32.59-1.32,1.32v82.92c-.02.97-1.08,1.56-1.91,1.05L404.38,3.93c-.88-.44-1.32,0-1.32.88v25.88c0,9.21,5.7,19.3,14.04,24.57l161.36,95.87c.83.49,1.88-.11,1.88-1.07l-.04-119.37c0-16.67-10.53-28.08-25.01-28.08ZM430.7,203.55h10.6c.69,0,1.24-.56,1.24-1.24v-75.53c0-1.32.88-1.75,2.63-.88l132.93,82.48c1.32.44,2.19,0,2.19-1.32v-25.45c0-10.09-5.7-20.18-13.6-24.57l-161.76-95.31c-.83-.49-1.88.11-1.88,1.07v112.66c0,16.67,11.41,28.08,27.64,28.08Z" />
            </svg>
            <div class="relative z-10 w-[80vw] max-w-[12rem] md:max-w-[16rem] h-[2px] bg-white/20 rounded overflow-hidden">
                <div class="h-full bg-[#d4ae6f] w-0 preloader-progress"></div>
            </div>
        </div>
    <?php else: ?>
                <!-- Solid Overlay for Preloading Effect on Subpages -->
        <div id="child-preloader-wrap" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 9999; background-color: #0e1e2e; pointer-events: none; transition: opacity 0.8s ease-out, visibility 0.8s ease-out;">
            <canvas id="child-preloader-canvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></canvas>
            <div id="child-svg-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; pointer-events: none; overflow: hidden;">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1920 1080" class="child-menu-bg-svg origin-center" id="child-logo-svg" style="width: 400px; max-width: 60vw; height: auto; fill: #d4ae6f; opacity: 0; transform: scale(0.5); pointer-events: none;">
                    <path d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                </svg>
            </div>
        </div>
    <?php endif; ?>
    <!-- Header Section -->
    <header class="relative z-[999]">
        <section id="header"
            class="fixed top-0 left-0 w-full z-[499] shadow-md bg-[#0e1e2e]/5 backdrop-blur-md border-b border-[#d4ae6f]/20 transition-all duration-300">
            <!-- Logos Container -->
            <div id="headerContainer"
                class="mx-auto max-w-7xl flex justify-between items-center px-4 py-3 md:py-4 space-x-4 transition-all duration-300">
                <div class="logo-wrap shrink-0">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-fenica.png"
                            alt="<?php bloginfo('name'); ?>"
                            class="logo-img w-20 md:w-32 object-contain transition-all duration-300"
                            title="<?php bloginfo('name'); ?>">
                    </a>
                </div>
                <div class="logo-wrap shrink-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cdt-dxmd-fenica.png"
                        alt="Logo đối tác" class="logo-img w-20 md:w-32 object-contain transition-all duration-300"
                        title="Logo đối tác">
                </div>
            </div>

            <!-- Navigation -->
            <nav class="border-t border-[#d4ae6f]/20 text-xs">
                <!-- Desktop Menu -->
                <ul id="desktop-menu" class="hidden md:flex justify-center space-x-8 relative z-20 text-white">
                    <div id="magic-line"
                        class="absolute bottom-0 left-0 h-[3px] flex flex-col justify-between transition-all duration-300 pointer-events-none opacity-0 z-[-1]">
                        <div class="h-[1px] bg-[#d4ae6f] w-full"></div>
                        <div class="h-[1px] bg-[#d4ae6f] w-full"></div>
                    </div>
                    <li class="contents"><a href="<?php echo home_url('/'); ?>"
                            class="py-3 px-2 tracking-wider hover:text-[#d4ae6f] transition-all duration-300">TRANG
                            CHỦ</a></li>
                    <li class="contents relative group"><a href="<?php echo home_url('/tong-quan'); ?>"
                            class="py-3 px-2 tracking-wider hover:text-[#d4ae6f] transition-all duration-300">TỔNG
                            QUAN</a></li>
                    <li class="contents"><a href="<?php echo home_url('/vi-tri'); ?>"
                            class="py-3 px-2 tracking-wider hover:text-[#d4ae6f] transition-all duration-300">VỊ
                            TRÍ</a></li>
                    <li class="contents"><a href="<?php echo home_url('/tien-ich'); ?>"
                            class="py-3 px-2 tracking-wider hover:text-[#d4ae6f] transition-all duration-300">TIỆN
                            ÍCH</a></li>
                    <li class="contents relative group"><a href="<?php echo home_url('/mat-bang'); ?>"
                            class="py-3 px-2 tracking-wider hover:text-[#d4ae6f] transition-all duration-300">MẶT
                            BẰNG</a></li>
                    <li class="contents"><a href="<?php echo home_url('/thu-vien'); ?>"
                            class="py-3 px-2 tracking-wider hover:text-[#d4ae6f] transition-all duration-300">THƯ
                            VIỆN</a></li>
                    <li class="contents"><a href="<?php echo home_url('/tin-tuc'); ?>"
                            class="py-3 px-2 tracking-wider hover:text-[#d4ae6f] transition-all duration-300">TIN
                            TỨC</a></li>
                    <li class="contents"><a href="<?php echo home_url('/faq'); ?>"
                            class="py-3 px-2 tracking-wider hover:text-[#d4ae6f] transition-all duration-300">FAQ</a>
                    </li>
                    <li class="contents"><a href="<?php echo home_url('/lien-he'); ?>"
                            class="py-3 px-2 tracking-wider hover:text-[#d4ae6f] transition-all duration-300">LIÊN
                            HỆ</a></li>
                </ul>

                <!-- Mobile Menu Button -->
                <div class="md:hidden w-full flex justify-center relative z-50 bg-transparent">
                    <button id="mobile-menu-button"
                        class="text-white hover:text-[#d4ae6f] transition-colors px-4 py-2 mx-auto">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path id="menu-icon-path" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu Content -->
                <div id="mobile-menu"
                    class="hidden absolute top-full left-0 w-full bg-[#0e1e2e]/95 backdrop-blur-xl text-white md:hidden text-lg text-left z-[490] border-t border-[#d4ae6f]/20 shadow-[0_20px_40px_rgba(0,0,0,0.5)] overflow-hidden max-h-[75vh] opacity-0 transition-opacity duration-300 relative">

                    <style>
                        @keyframes menuBgAnim {

                            0%,
                            100% {
                                transform: translateY(0) scale(1) rotate(0deg);
                                opacity: 0.05;
                            }

                            50% {
                                transform: translateY(-15px) scale(1.05) rotate(2deg);
                                opacity: 0.15;
                            }
                        }

                        .menu-bg-svg {
                            animation: menuBgAnim 10s ease-in-out infinite;
                            fill: #d4ae6f;
                        }
                    </style>

                    <!-- Background SVG -->
                    <div
                        class="absolute inset-0 z-0 pointer-events-none flex items-center justify-center overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1920 1080"
                            class="w-[200%] h-auto md:w-full max-w-none opacity-50 menu-bg-svg origin-center">
                            <path
                                d="M1138.1,203.26h-35.36c-2.25,0-4.08,1.83-4.08,4.08v252.98l-.03,4.09c-.02,3.01-3.32,4.84-5.88,3.26l-422.52-260.33c-2.72-1.36-4.08,0-4.08,2.72v80.25c0,28.56,17.68,59.84,43.52,76.17l500.24,297.23c2.57,1.53,5.83-.33,5.83-3.32l-.11-370.08c0-51.68-32.64-87.05-77.53-87.05ZM751.83,826.2h32.86c2.13,0,3.86-1.73,3.86-3.86v-234.16c0-4.08,2.72-5.44,8.16-2.72l412.11,255.7c4.08,1.36,6.8,0,6.8-4.08v-78.89c0-31.28-17.68-62.57-42.16-76.17l-501.5-295.48c-2.57-1.52-5.82.34-5.82,3.32v349.28c0,51.68,35.36,87.05,85.69,87.05Z" />
                        </svg>
                    </div>

                    <!-- Scrollable Content -->
                    <div
                        class="relative z-10 mx-auto max-w-lg w-full px-4 py-6 flex flex-col gap-4 h-full overflow-y-auto max-h-[75vh]">
                        <a href="<?php echo home_url('/'); ?>"
                            class="border-l-2 border-[#d4ae6f]/30 pl-3 block tracking-wider hover:text-[#d4ae6f] hover:border-[#d4ae6f] transition-all duration-300">TRANG
                            CHỦ</a>
                        <a href="<?php echo home_url('/tong-quan'); ?>"
                            class="border-l-2 border-[#d4ae6f]/30 pl-3 block tracking-wider hover:text-[#d4ae6f] hover:border-[#d4ae6f] transition-all duration-300">TỔNG
                            QUAN</a>
                        <a href="<?php echo home_url('/vi-tri'); ?>"
                            class="border-l-2 border-[#d4ae6f]/30 pl-3 block tracking-wider hover:text-[#d4ae6f] hover:border-[#d4ae6f] transition-all duration-300">VỊ
                            TRÍ</a>
                        <a href="<?php echo home_url('/tien-ich'); ?>"
                            class="border-l-2 border-[#d4ae6f]/30 pl-3 block tracking-wider hover:text-[#d4ae6f] hover:border-[#d4ae6f] transition-all duration-300">TIỆN
                            ÍCH</a>
                        <a href="<?php echo home_url('/mat-bang'); ?>"
                            class="border-l-2 border-[#d4ae6f]/30 pl-3 block tracking-wider hover:text-[#d4ae6f] hover:border-[#d4ae6f] transition-all duration-300">MẶT
                            BẰNG</a>
                        <a href="<?php echo home_url('/thu-vien'); ?>"
                            class="border-l-2 border-[#d4ae6f]/30 pl-3 block tracking-wider hover:text-[#d4ae6f] hover:border-[#d4ae6f] transition-all duration-300">THƯ
                            VIỆN</a>
                        <a href="<?php echo home_url('/tin-tuc'); ?>"
                            class="border-l-2 border-[#d4ae6f]/30 pl-3 block tracking-wider hover:text-[#d4ae6f] hover:border-[#d4ae6f] transition-all duration-300">TIN
                            TỨC</a>
                        <a href="<?php echo home_url('/faq'); ?>"
                            class="border-l-2 border-[#d4ae6f]/30 pl-3 block tracking-wider hover:text-[#d4ae6f] hover:border-[#d4ae6f] transition-all duration-300">FAQ</a>
                        <a href="<?php echo home_url('/lien-he'); ?>"
                            class="border-l-2 border-[#d4ae6f]/30 pl-3 block tracking-wider hover:text-[#d4ae6f] hover:border-[#d4ae6f] transition-all duration-300">LIÊN
                            HỆ</a>
                    </div>
                </div>
            </nav>
        </section>
    </header>