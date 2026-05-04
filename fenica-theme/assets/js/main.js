// Data Structure for the Map
const mapData = [
    {
        id: "30",
        title: "30 Phút",
        radius: 350, // Smallest radius (inner arc)
        color: "#c29b6f",
        nodes: [
            { id: "01", name: "Trung tâm hành chính TP.HCM", img: "https://images.unsplash.com/photo-1596522354195-e84ae3c98731?w=150&h=150&fit=crop&q=80" },
            { id: "02", name: "Trung tâm tài chính Thủ Thiêm", img: "https://images.unsplash.com/photo-1506501139174-099022df5260?w=150&h=150&fit=crop&q=80" },
            { id: "03", name: "Chợ Bến Thành", img: "https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?w=150&h=150&fit=crop&q=80" },
            { id: "04", name: "Sân bay Quốc tế Long Thành", img: "https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=150&h=150&fit=crop&q=80" }
        ]
    },
    {
        id: "20-25",
        title: "20 - 25 Phút",
        radius: 520,
        color: "#c29b6f",
        nodes: [
            { id: "01", name: "Sân bay Tân Sơn Nhất", img: "https://images.unsplash.com/photo-1542296332-2e4473faf563?w=150&h=150&fit=crop&q=80" },
            { id: "02", name: "Ngã tư Hàng Xanh", img: "https://images.unsplash.com/photo-1519501025264-65ba15a82390?w=150&h=150&fit=crop&q=80" },
            { id: "03", name: "Làng Đại học TP.HCM", img: "https://images.unsplash.com/photo-1562774053-701939374585?w=150&h=150&fit=crop&q=80" },
            { id: "04", name: "Bến xe Miền Đông mới", img: "https://images.unsplash.com/photo-1530685932526-48ec92998eaa?w=150&h=150&fit=crop&q=80" },
            { id: "05", name: "KCX Linh Trung 1", img: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=150&h=150&fit=crop&q=80" },
            { id: "06", name: "KCN Công nghệ cao TP.HCM", img: "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=150&h=150&fit=crop&q=80" },
            { id: "07", name: "Phường Trấn Biên", img: "https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=150&h=150&fit=crop&q=80" }
        ]
    },
    {
        id: "10-15",
        title: "10 - 15 Phút",
        radius: 700,
        color: "#c29b6f",
        nodes: [
            { id: "01", name: "Aeon Mall", img: "https://images.unsplash.com/photo-1519567281027-d00b8c62b2e5?w=150&h=150&fit=crop&q=80" },
            { id: "02", name: "Sân Golf Sông Bé", img: "https://images.unsplash.com/photo-1587174486073-ae5e5cff23aa?w=150&h=150&fit=crop&q=80" },
            { id: "03", name: "BVQT Columbia Asia", img: "https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=150&h=150&fit=crop&q=80" },
            { id: "04", name: "BVQT Becamex", img: "https://images.unsplash.com/photo-1538108149393-cebb47cbdceb?w=150&h=150&fit=crop&q=80" },
            { id: "05", name: "KCN Việt Hương", img: "https://images.unsplash.com/photo-1504307651254-35680f356f12?w=150&h=150&fit=crop&q=80" },
            { id: "06", name: "KCN Sóng Thần 1", img: "https://images.unsplash.com/photo-1551281048-735f49df425f?w=150&h=150&fit=crop&q=80" },
            { id: "07", name: "KCN Đồng An", img: "https://images.unsplash.com/photo-1497366216548-37526070297c?w=150&h=150&fit=crop&q=80" },
            { id: "08", name: "KCX Linh Trung 2", img: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=150&h=150&fit=crop&q=80" },
            { id: "09", name: "Phường Thủ Dầu Một", img: "https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=150&h=150&fit=crop&q=80" }
        ]
    },
    {
        id: "5-7",
        title: "5 - 7 Phút",
        radius: 880,
        color: "#c29b6f",
        nodes: [
            { id: "01", name: "Vincom Plaza", img: "https://images.unsplash.com/photo-1519567281027-d00b8c62b2e5?w=150&h=150&fit=crop&q=80" },
            { id: "02", name: "KCN Sóng Thần 2", img: "https://images.unsplash.com/photo-1551281048-735f49df425f?w=150&h=150&fit=crop&q=80" },
            { id: "03", name: "ICD Tân Cảng Sóng Thần", img: "https://images.unsplash.com/photo-1586528116311-ad8ed7e66a65?w=150&h=150&fit=crop&q=80" },
            { id: "04", name: "Trường THPT Nguyễn Thị Minh Khai", img: "https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=150&h=150&fit=crop&q=80" },
            { id: "05", name: "Trường THPT Lý Thái Tổ", img: "https://images.unsplash.com/photo-1509062522246-3755977927d7?w=150&h=150&fit=crop&q=80" },
            { id: "06", name: "THPT Trần Văn Ơn", img: "https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=150&h=150&fit=crop&q=80" },
            { id: "07", name: "Trường THCS Tân Đông Hiệp B", img: "https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=150&h=150&fit=crop&q=80" },
            { id: "08", name: "Trường Tiểu học Tân Đông Hiệp C", img: "https://images.unsplash.com/photo-1503676382389-4809596d5290?w=150&h=150&fit=crop&q=80" }
        ]
    },
    {
        id: "3-5",
        title: "3 - 5 Phút",
        radius: 1080, // Largest radius (outer arc)
        color: "#c29b6f",
        nodes: [
            { id: "01", name: "Ga S12 & Ga S11", img: "https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?w=150&h=150&fit=crop&q=80" },
            { id: "02", name: "Trường Mầm Non Hoa Cúc 2", img: "https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=150&h=150&fit=crop&q=80" },
            { id: "03", name: "Trường tiểu học An Phú 3", img: "https://images.unsplash.com/photo-1509062522246-3755977927d7?w=150&h=150&fit=crop&q=80" },
            { id: "04", name: "Trường tiểu học Bùi Thị Xuân", img: "https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=150&h=150&fit=crop&q=80" },
            { id: "05", name: "Chợ Tân Bình", img: "https://images.unsplash.com/photo-1533900298318-6b8da08a523e?w=150&h=150&fit=crop&q=80" },
            { id: "06", name: "Chợ Phú Phong", img: "https://images.unsplash.com/photo-1519999482648-25049ddd37b1?w=150&h=150&fit=crop&q=80" },
            { id: "07", name: "Khu di tích - du lịch Hồ Lang", img: "https://images.unsplash.com/photo-1542361345-89ce1dd9144d?w=150&h=150&fit=crop&q=80" }
        ]
    }
];

document.addEventListener('DOMContentLoaded', () => {
    // --- Smooth Scrolling with Lenis ---
    if (typeof Lenis !== 'undefined') {
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smooth: true,
        });

        // Tích hợp với GSAP ScrollTrigger
        if (typeof ScrollTrigger !== 'undefined') {
            lenis.on('scroll', ScrollTrigger.update);
            gsap.ticker.add((time) => {
                lenis.raf(time * 1000);
            });
            gsap.ticker.lagSmoothing(0);
        } else {
            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }
            requestAnimationFrame(raf);
        }
    }

    // --- Lightbox Popup (GLightbox) ---
    if (typeof GLightbox !== 'undefined') {
        const lightbox = GLightbox({
            selector: '.glightbox, [data-lightbox="gallery"]',
            touchNavigation: true,
            loop: true,
            zoomable: true,
            autoplayVideos: true
        });
    }

    // 0. --- Preloader Animation ---
    const preloader = document.getElementById('preloader');
    // Global delay for other animations so they don't play behind the preloader
    const preloaderDelay = preloader ? 2.0 : 0.5;

    if (preloader && document.getElementById('fenica-logo-svg') && typeof gsap !== 'undefined') {
        const preTl = gsap.timeline({
            onComplete: () => {
                document.body.classList.remove('overflow-hidden');
                preloader.style.display = 'none';
                if (typeof AOS !== 'undefined') {
                    // Slight delay before refresh to ensure layout is settled
                    setTimeout(() => AOS.refresh(), 100);
                }
            }
        });

        // 1. Animate drawing the strokes of each letter with a stagger
        preTl.to('#fenica-logo-svg .st0', { strokeDashoffset: 0, duration: 0.8, stagger: 0.1, ease: "power2.inOut" })
            // 2. Fill the logo with color
            .to('#fenica-logo-svg .st0', { fill: "#f0e0ca", duration: 0.3, ease: "power2.out" }, "-=0.3")
            // 3. Animate the progress bar
            .to('.preloader-progress', { width: '100%', duration: 0.6, ease: "power2.inOut" }, "-=0.3")
            // 4. Massive scale up (zoom out effect) and fade out
            .to('.preloader-logo', { scale: 8, opacity: 0, duration: 0.5, ease: "power3.in" })
            .to(preloader, { yPercent: -100, duration: 0.5, ease: "power4.inOut" }, "-=0.4");
    }

    // 1. --- Map Initialization ---
    // 1. --- Legend Initialization (Tabs Version) ---
    const legendContainer = document.getElementById('legend-container');
    const legendTabs = document.getElementById('legend-tabs');

    // Only run legend logic if containers exist
    if (legendContainer && legendTabs) {
        // --- Populate Tabs ---
        mapData.forEach((ring, index) => {
            const tabBtn = document.createElement('button');
            const isActive = index === 0;
            // Glassmorphism tab buttons
            tabBtn.className = `swiper-slide w-auto legend-tab-btn whitespace-nowrap px-5 py-2 rounded-full border text-[12px] md:text-[13px] font-bold uppercase tracking-wider transition-all duration-300 ${isActive ? 'bg-[#d4ae6f]/20 border-[#d4ae6f] text-[#d4ae6f] shadow-[0_0_15px_rgba(212,174,111,0.3)]' : 'bg-black/20 border-white/10 text-white/60 hover:text-white hover:border-white/30 hover:bg-white/5'}`;
            tabBtn.textContent = ring.title;
            tabBtn.dataset.index = index;
            legendTabs.appendChild(tabBtn);
        });

        // Initialize Legend Swiper
        const legendSwiper = new Swiper('.legend-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 8,
            grabCursor: true,
            navigation: {
                nextEl: '#legend-next',
                prevEl: '#legend-prev',
            },
        });

        // --- Render Content Pane ---
        const renderPane = (index) => {
            const ring = mapData[index];
            legendContainer.innerHTML = ''; // Clear old content

            const legendSection = document.createElement('div');
            legendSection.className = `legend-pane`;

            legendSection.innerHTML = `
                <div class="flex items-center gap-3 mb-6">
                    <!-- Glow Dot -->
                    <div class="w-2.5 h-2.5 rounded-full bg-gradient-to-br from-[#f0e0ca] to-[#d4ae6f] shadow-[0_0_10px_rgba(212,174,111,0.8)]"></div>
                    <!-- Gradient Text Title -->
                    <h3 class="text-xl font-bold playfair bg-gradient-to-r from-[#f0e0ca] to-[#d4ae6f] bg-clip-text text-transparent uppercase tracking-wider">${ring.title}</h3>
                </div>
                <!-- Dashed Vertical Line -->
                <ul class="space-y-4 pl-[5px] border-l border-dashed border-[#d4ae6f]/40 ml-1 pb-4">
                    ${ring.nodes.map(n => `
                        <li class="legend-item group text-[14px] text-gray-200 font-medium hover:text-[#f0e0ca] transition-all cursor-pointer flex gap-4 items-center relative">
                            <!-- Node Dot on Dashed Line -->
                            <div class="absolute -left-[20.5px] w-2 h-2 rounded-full bg-[#d4ae6f]/30 group-hover:bg-[#d4ae6f] group-hover:shadow-[0_0_8px_rgba(212,174,111,0.8)] transition-all"></div>
                            
                            <!-- Premium SVG Map Pin Icon -->
                            <svg class="w-4 h-4 text-[#d4ae6f] opacity-70 group-hover:opacity-100 transition-opacity shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            
                            <span class="leading-snug tracking-wide">${n.name}</span>
                        </li>
                    `).join('')}
                </ul>`;
            legendContainer.appendChild(legendSection);

            // GSAP Animate In
            if (typeof gsap !== 'undefined') {
                gsap.fromTo(legendSection.querySelector('h3').parentElement,
                    { opacity: 0, x: -10 },
                    { opacity: 1, x: 0, duration: 0.4, ease: "power2.out" }
                );
                gsap.fromTo(legendSection.querySelectorAll('.legend-item'),
                    { opacity: 0, x: -15 },
                    { opacity: 1, x: 0, duration: 0.4, stagger: 0.05, ease: "power2.out", delay: 0.1 }
                );
            }
        };

        // Render first pane initially
        renderPane(0);

        // --- Tab Click Logic ---
        const tabs = legendTabs.querySelectorAll('.legend-tab-btn');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Update active tab styles
                tabs.forEach(t => {
                    t.className = 'legend-tab-btn whitespace-nowrap px-5 py-2 rounded-full border text-[12px] md:text-[13px] font-bold uppercase tracking-wider transition-all duration-300 bg-black/20 border-white/10 text-white/60 hover:text-white hover:border-white/30 hover:bg-white/5';
                });
                tab.className = 'legend-tab-btn whitespace-nowrap px-5 py-2 rounded-full border text-[12px] md:text-[13px] font-bold uppercase tracking-wider transition-all duration-300 bg-[#d4ae6f]/20 border-[#d4ae6f] text-[#d4ae6f] shadow-[0_0_15px_rgba(212,174,111,0.3)]';

                // Render new pane
                renderPane(parseInt(tab.dataset.index));
            });
        });

        // Turn on GSAP force3D for maximum mobile performance
        if (typeof gsap !== 'undefined') {
            gsap.config({ force3D: true });

            // Only animate fenica-title on load if it exists
            const tl = gsap.timeline({ delay: preloaderDelay });
            if (document.querySelector(".fenica-title")) {
                tl.fromTo(".fenica-title",
                    { y: 50, autoAlpha: 0 },
                    { y: 0, autoAlpha: 1, duration: 1.2, ease: "expo.out" }
                );
            }

            // Initial animation for the tabs container coming in
            tl.fromTo("#legend-tabs",
                { opacity: 0, y: 10 },
                { opacity: 1, y: 0, duration: 0.8, ease: "expo.out" },
                "-=0.5"
            );
        }
    }

    // 2. --- Floor Plan Tab Logic ---
    const floorTabs = document.querySelectorAll('.floor-tab-btn');
    const floorTitle = document.getElementById('floor-main-title');
    const floorDesc = document.getElementById('floor-desc');
    const floorImages = document.querySelectorAll('.floor-img');

    const floorData = {
        '1': { title: 'Mặt bằng Tầng 1', desc: 'Không gian thiết kế mở, tối ưu hóa công năng sử dụng và tận dụng tối đa ánh sáng tự nhiên.' },
        '2': { title: 'Mặt bằng Tầng 2-20', desc: 'Khu vực căn hộ tiêu chuẩn, được bố trí khéo léo mang lại sự yên tĩnh và thoải mái tuyệt đối cho gia chủ.' },
        '3': { title: 'Mặt bằng Tầng 39-40', desc: 'Tầng cao cấp với tầm nhìn panorama tuyệt đẹp ôm trọn dòng sông Sài Gòn.' }
    };

    if (floorTabs.length > 0) {
        floorTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active from all
                floorTabs.forEach(t => {
                    t.className = 'floor-tab-btn px-6 py-2.5 rounded-full border text-[13px] md:text-[14px] font-bold uppercase tracking-wider transition-all duration-300 bg-black/20 border-white/10 text-white/60 hover:text-white hover:border-white/30 hover:bg-white/5 whitespace-nowrap';
                });

                // Add active to clicked
                tab.className = 'floor-tab-btn active px-6 py-2.5 rounded-full border text-[13px] md:text-[14px] font-bold uppercase tracking-wider transition-all duration-300 bg-[#d4ae6f]/20 border-[#d4ae6f] text-[#d4ae6f] shadow-[0_0_15px_rgba(212,174,111,0.3)] whitespace-nowrap';

                const floor = tab.dataset.floor;

                // Animate text change
                if (typeof gsap !== 'undefined') {
                    gsap.to([floorTitle, floorDesc], {
                        opacity: 0,
                        y: -10,
                        duration: 0.2,
                        onComplete: () => {
                            floorTitle.textContent = floorData[floor].title;
                            // floorDesc.textContent = floorData[floor].desc;
                            gsap.to([floorTitle], { opacity: 1, y: 0, duration: 0.3, ease: "power2.out" });
                        }
                    });

                    // Crossfade images
                    floorImages.forEach(img => {
                        if (img.id === 'floor-img-' + floor) {
                            img.style.pointerEvents = "auto";
                            gsap.to(img, { opacity: 1, scale: 1, zIndex: 10, duration: 0.6, ease: "power2.out" });
                        } else {
                            img.style.pointerEvents = "none";
                            gsap.to(img, { opacity: 0, scale: 0.95, zIndex: 0, duration: 0.6, ease: "power2.inOut" });
                        }
                    });
                }
            });
        });
    }

    // 3. --- Gallery Marquee Animations ---
    if (typeof gsap !== 'undefined') {
        const m1 = document.getElementById('marquee-1');
        const m2 = document.getElementById('marquee-2');

        if (m1) {
            const marquee1 = gsap.to("#marquee-1", {
                xPercent: -50,
                ease: "none",
                duration: 35,
                repeat: -1
            });
            m1.addEventListener('mouseenter', () => marquee1.pause());
            m1.addEventListener('mouseleave', () => marquee1.play());
        }

        if (m2) {
            gsap.set("#marquee-2", { xPercent: -50 });
            const marquee2 = gsap.to("#marquee-2", {
                xPercent: 0,
                ease: "none",
                duration: 35,
                repeat: -1
            });
            m2.addEventListener('mouseenter', () => marquee2.pause());
            m2.addEventListener('mouseleave', () => marquee2.play());
        }
    }

    // 4. --- Overview Section Animations ---
    const overviewSection = document.getElementById('overview-section');
    if (overviewSection && typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        const overviewTl = gsap.timeline({
            scrollTrigger: {
                trigger: overviewSection,
                start: "top 75%",
                toggleActions: "play none none reverse"
            }
        });

        overviewTl
            .fromTo(".overview-img",
                { scale: 0.8, opacity: 0, clipPath: "inset(100% 0 0 0)" },
                { scale: 1, opacity: 1, clipPath: "inset(0% 0 0 0)", duration: 1.2, ease: "power3.out" }
            )
            .fromTo(".overview-text-left .overview-item",
                { x: -50, opacity: 0 },
                { x: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: "power2.out" },
                "-=0.6"
            )
            .fromTo(".overview-text-right .overview-item",
                { x: 50, opacity: 0 },
                { x: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: "power2.out" },
                "-=0.8"
            );
    }

    // 5. --- Hero Carousel Initialization ---
    if (typeof Swiper !== 'undefined' && document.querySelector('.heroSwiper')) {
        const heroSwiper = new Swiper('.heroSwiper', {
            effect: 'fade', // Smooth fade effect between slides
            loop: true,
            speed: 1500,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                init: function () {
                    animateSlide(this.slides[this.activeIndex]);
                },
                slideChangeTransitionStart: function () {
                    document.querySelectorAll('.slide-anim').forEach(el => {
                        el.classList.remove('opacity-100', 'translate-y-0');
                        el.classList.add('opacity-0', 'translate-y-8');
                    });
                    animateSlide(this.slides[this.activeIndex]);
                }
            }
        });

        function animateSlide(slide) {
            const anims = slide.querySelectorAll('.slide-anim');
            anims.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.remove('opacity-0', 'translate-y-8');
                    el.classList.add('opacity-100', 'translate-y-0');
                }, 100 + (index * 300));
            });
        }
    }
    // 6. --- News Carousel Initialization ---
    if (typeof Swiper !== 'undefined' && document.querySelector('.newsSwiper')) {
        const newsSwiper = new Swiper('.newsSwiper', {
            slidesPerView: 'auto',
            spaceBetween: 32, // matches gap-8
            loop: true,
            speed: 5000,
            freeMode: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            }
        });
    }

    // 7. --- Initialize AOS ---
    if (typeof AOS !== 'undefined') {
        AOS.init({
            once: true,
            offset: 50,
        });

        // Tích hợp đồng bộ AOS với GSAP ScrollTrigger
        // ScrollTrigger.pin làm thay đổi chiều cao trang, khiến AOS tính toán sai toạ độ ban đầu
        if (typeof ScrollTrigger !== 'undefined') {
            // Cập nhật AOS mỗi khi ScrollTrigger tính toán lại (khi load hoặc resize)
            ScrollTrigger.addEventListener('refresh', () => AOS.refresh());

            // Ép làm mới AOS sau 500ms để đảm bảo mọi DOM và ảnh đã load xong
            setTimeout(() => {
                AOS.refresh();
            }, 500);
        }
    }

    // 8. --- GSAP + WebGL Ripple Touch Effect (Nhỏ & Mềm Mại) ---
    if (typeof gsap !== 'undefined') {
        const canvas = document.createElement('canvas');
        canvas.id = 'webgl-ripple-canvas';
        canvas.style.position = 'fixed';
        canvas.style.inset = '0';
        canvas.style.width = '100vw';
        canvas.style.height = '100vh';
        canvas.style.pointerEvents = 'none';
        canvas.style.zIndex = '9999';
        document.body.appendChild(canvas);

        const gl = canvas.getContext('webgl', { premultipliedAlpha: true, alpha: true });

        // Vertex Shader: full screen quad
        const vsSource = `
            attribute vec2 a_position;
            void main() {
                gl_Position = vec4(a_position, 0.0, 1.0);
            }
        `;

        // Fragment Shader: vẽ nhiều gợn sóng mềm mại
        const fsSource = `
            precision mediump float;
            uniform vec2 u_resolution;
            uniform vec3 u_ripples[10]; // x, y, progress (0 -> 1)
            
            void main() {
                vec2 uv = gl_FragCoord.xy / u_resolution.xy;
                uv.y = 1.0 - uv.y; // Lật trục Y vì WebGL ngược với DOM
                
                // Cân bằng tỷ lệ khung hình (Aspect Ratio)
                float aspect = u_resolution.x / u_resolution.y;
                uv.x *= aspect;
                
                vec3 finalColor = vec3(0.0);
                float finalAlpha = 0.0;
                
                for(int i=0; i<10; i++) {
                    float p = u_ripples[i].z;
                    if(p > 0.0 && p < 1.0) {
                        vec2 center = u_ripples[i].xy / u_resolution.xy;
                        center.x *= aspect;
                        
                        float dist = distance(uv, center);
                        
                        // Kích thước nhỏ gọn (Max 8% chiều cao màn hình)
                        float maxRadius = 0.08; 
                        float radius = p * maxRadius;
                        
                        // Độ dày gợn sóng (tăng dần mờ ảo theo thời gian)
                        float thickness = 0.015 + p * 0.02;
                        
                        // Tạo đường viền mềm (feather edge) bằng smoothstep
                        float ring = smoothstep(radius - thickness, radius, dist) - smoothstep(radius, radius + thickness, dist);
                        
                        // Mờ dần theo progress (tạo độ tan biến)
                        float alpha = (1.0 - p) * ring * 0.5; // Giảm opacity một chút cho giống nước trong
                        
                        // Màu xanh nước biển nhạt, trong trẻo và thanh khiết
                        vec3 waterColor = vec3(0.5, 0.8, 1.0); 
                        
                        // Premultiplied alpha blending
                        finalColor += waterColor * alpha;
                        finalAlpha += alpha;
                    }
                }
                
                gl_FragColor = vec4(finalColor, finalAlpha);
            }
        `;

        function createShader(gl, type, source) {
            const shader = gl.createShader(type);
            gl.shaderSource(shader, source);
            gl.compileShader(shader);
            return shader;
        }

        const vs = createShader(gl, gl.VERTEX_SHADER, vsSource);
        const fs = createShader(gl, gl.FRAGMENT_SHADER, fsSource);
        const program = gl.createProgram();
        gl.attachShader(program, vs);
        gl.attachShader(program, fs);
        gl.linkProgram(program);
        gl.useProgram(program);

        // Tạo Buffer
        const positionBuffer = gl.createBuffer();
        gl.bindBuffer(gl.ARRAY_BUFFER, positionBuffer);
        gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([
            -1.0, -1.0, 1.0, -1.0, -1.0, 1.0,
            -1.0, 1.0, 1.0, -1.0, 1.0, 1.0
        ]), gl.STATIC_DRAW);

        const positionLocation = gl.getAttribLocation(program, "a_position");
        gl.enableVertexAttribArray(positionLocation);
        gl.vertexAttribPointer(positionLocation, 2, gl.FLOAT, false, 0, 0);

        const resLocation = gl.getUniformLocation(program, "u_resolution");
        const ripplesLocation = gl.getUniformLocation(program, "u_ripples");

        // Xử lý Resize
        function resize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            gl.viewport(0, 0, canvas.width, canvas.height);
            gl.uniform2f(resLocation, canvas.width, canvas.height);
        }
        window.addEventListener('resize', resize);
        resize();

        // Quản lý trạng thái Ripples (Tối đa 10 cái cùng lúc)
        const MAX_RIPPLES = 10;
        let ripples = Array(MAX_RIPPLES).fill().map(() => ({ x: 0, y: 0, p: 0, active: false }));
        let currentIndex = 0;

        window.addEventListener('pointerdown', (e) => {
            const ripple = ripples[currentIndex];
            ripple.x = e.clientX;
            ripple.y = e.clientY;
            ripple.p = 0.001;
            ripple.active = true;

            // Dùng GSAP để animate uniform `progress` của Shader
            gsap.to(ripple, {
                p: 1.0,
                duration: 1.2,
                ease: "sine.out",
                onComplete: () => {
                    ripple.active = false;
                    ripple.p = 0;
                }
            });

            currentIndex = (currentIndex + 1) % MAX_RIPPLES;
        });

        // Render Loop
        function render() {
            gl.clearColor(0, 0, 0, 0);
            gl.clear(gl.COLOR_BUFFER_BIT);

            let hasActive = false;
            const ripplesData = new Float32Array(MAX_RIPPLES * 3);

            for (let i = 0; i < MAX_RIPPLES; i++) {
                ripplesData[i * 3] = ripples[i].x;
                ripplesData[i * 3 + 1] = ripples[i].y;
                ripplesData[i * 3 + 2] = ripples[i].p;
                if (ripples[i].active) hasActive = true;
            }

            // Chỉ render và tính toán khi có gợn sóng đang hoạt động để tiết kiệm pin/GPU
            if (hasActive) {
                gl.uniform3fv(ripplesLocation, ripplesData);
                gl.drawArrays(gl.TRIANGLES, 0, 6);
            }

            requestAnimationFrame(render);
        }
        render();
    }

    // 9. --- Overview Section GSAP Animations ---
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        const overviewSection = document.getElementById('overview-section');
        if (overviewSection) {
            // Entrance Animation
            const tlOverview = gsap.timeline({
                scrollTrigger: {
                    trigger: overviewSection,
                    start: "top 75%",
                    end: "bottom 20%",
                    toggleActions: "play none none reverse"
                }
            });

            // Title
            tlOverview.fromTo('.overview-title-container',
                { y: 30, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.8, ease: "power3.out" }
            );

            // Building slide up
            tlOverview.fromTo('#overview-building',
                { y: 150, opacity: 0 },
                { y: 0, opacity: 1, duration: 1.2, ease: "expo.out" },
                "-=0.5"
            );

            // Left items slide in
            tlOverview.fromTo('.overview-text-left .overview-item',
                { x: -50, opacity: 0 },
                { x: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: "back.out(1.2)" },
                "-=1.0"
            );

            // Right items slide in
            tlOverview.fromTo('.overview-text-right .overview-item',
                { x: 50, opacity: 0 },
                { x: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: "back.out(1.2)" },
                "-=0.8"
            );

            // Parallax Background Effect
            const overviewBgImg = document.querySelector('#overview-bg img');
            if (overviewBgImg) {
                gsap.to(overviewBgImg, {
                    yPercent: 15,
                    ease: "none",
                    scrollTrigger: {
                        trigger: overviewSection,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: true
                    }
                });
            }

            // Hover interactions for Apartment Buttons
            const aptBtns = document.querySelectorAll('.apt-btn');

            aptBtns.forEach(btn => {
                btn.addEventListener('mouseenter', () => {
                    // Toà nhà hơi zoom nhẹ
                    gsap.to('#overview-building', { scale: 1.03, duration: 0.4, ease: "power2.out" });
                });

                btn.addEventListener('mouseleave', () => {
                    // Trả về trạng thái cũ
                    gsap.to('#overview-building', { scale: 1, duration: 0.8, ease: "power2.out" });
                });
            });
        }
    }

    // 10. --- Floating Contact Modal Logic ---
    const floatBtn = document.getElementById('floating-contact-btn');
    const contactModal = document.getElementById('contact-modal');
    const modalBackdrop = document.getElementById('contact-modal-backdrop');
    const modalContent = document.getElementById('contact-modal-content');
    const closeBtn = document.getElementById('close-contact-modal');

    if (floatBtn && contactModal && modalBackdrop && modalContent && closeBtn) {
        const openModal = () => {
            contactModal.classList.remove('hidden');
            contactModal.classList.add('flex');
            
            // Allow display:flex to apply before animating opacity
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    modalBackdrop.classList.remove('opacity-0');
                    modalBackdrop.classList.add('opacity-100');
                    modalContent.classList.remove('opacity-0', 'scale-95');
                    modalContent.classList.add('opacity-100', 'scale-100');
                });
            });
            document.body.style.overflow = 'hidden';
        };

        const closeModal = () => {
            modalBackdrop.classList.remove('opacity-100');
            modalBackdrop.classList.add('opacity-0');
            modalContent.classList.remove('opacity-100', 'scale-100');
            modalContent.classList.add('opacity-0', 'scale-95');
            
            setTimeout(() => {
                contactModal.classList.add('hidden');
                contactModal.classList.remove('flex');
                document.body.style.overflow = '';
            }, 300);
        };

        floatBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);
        modalBackdrop.addEventListener('click', closeModal);
    }

    // 11. --- Smooth Page Transitions (Exit Animation) ---
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            const target = this.getAttribute('target');
            
            // Bỏ qua nếu: không có href, là hash link, link email/call/js, mở tab mới, hoặc có thuộc tính download
            if (!href || 
                href.startsWith('#') || 
                href.startsWith('mailto:') || 
                href.startsWith('tel:') || 
                href.startsWith('javascript:') || 
                target === '_blank' || 
                this.hasAttribute('download')) {
                return;
            }

            e.preventDefault();
            
            // Tạo một overlay màu #09121d (khớp với màu nền preloader) để tạo cảm giác nối tiếp
            const exitOverlay = document.createElement('div');
            exitOverlay.style.position = 'fixed';
            exitOverlay.style.top = '0';
            exitOverlay.style.left = '0';
            exitOverlay.style.width = '100vw';
            exitOverlay.style.height = '100vh';
            exitOverlay.style.backgroundColor = '#09121d'; // Khớp với màu sóng 3D
            exitOverlay.style.zIndex = '99999';
            exitOverlay.style.opacity = '0';
            exitOverlay.style.transition = 'opacity 0.4s ease-in-out';
            exitOverlay.style.pointerEvents = 'none'; // Không chặn click thêm
            
            document.body.appendChild(exitOverlay);
            
            // Kích hoạt transition
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    exitOverlay.style.opacity = '1';
                });
            });
            
            // Đợi hiệu ứng xong thì chuyển trang
            setTimeout(() => {
                window.location.href = href;
            }, 400);
        });
    });
});