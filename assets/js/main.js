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
    // 1. --- Map Initialization ---
    const mapOrigin = document.getElementById('map-origin');
    const legendContainer = document.getElementById('legend-container');

    // Only run map logic if map container exists
    if (mapOrigin && legendContainer) {
        const mapFragment = document.createDocumentFragment();
        const legendFragment = document.createDocumentFragment();

        // Tính toán tỷ lệ khoảng cách riêng cho mobile (thu nhỏ tối đa để vừa trọn màn hình dọc)
        const isMobile = window.innerWidth < 1024;
        const radiusMultiplier = isMobile ? 0.17 : 1;

        // Render Arcs, Nodes, and Legend
        mapData.forEach((ring, ringIndex) => {
            const currentRadius = ring.radius * radiusMultiplier;

            // --- Ring Wrapper (orbits on mobile, static on desktop) ---
            const ringWrapper = document.createElement('div');
            ringWrapper.className = `absolute top-0 left-0 w-0 h-0 ring-wrapper-${ringIndex}`;

            let orbitDuration = 0;
            if (isMobile) {
                // Inner rings spin faster, outer rings spin slower
                orbitDuration = 40 + ringIndex * 15;
                ringWrapper.style.animation = `spin ${orbitDuration}s linear infinite`;
            }

            // --- Draw Dashed Arc ---
            const arc = document.createElement('div');
            arc.className = `ring-arc-${ringIndex} absolute rounded-full border-[1.5px] border-dashed border-white pointer-events-none`;
            arc.style.width = `${currentRadius * 2}px`;
            arc.style.height = `${currentRadius * 2}px`;
            arc.style.left = '0';
            arc.style.top = '0';
            arc.style.transform = 'translate(-50%, -50%)';
            ringWrapper.appendChild(arc);

            // --- Draw Label Tab ---
            const tab = document.createElement('div');
            if (isMobile) {
                tab.className = `tab-item-${ringIndex} absolute flex flex-col items-center justify-center z-20 bg-[#ba936a] text-white rounded-full border-[1.5px] border-white shadow-sm`;
                tab.style.top = `${currentRadius}px`;
                tab.style.left = `0px`;
                tab.style.transform = `translate(-50%, -50%)`;
            } else {
                tab.className = `tab-item-${ringIndex} absolute bottom-[10px] -translate-x-1/2 flex flex-col items-center z-20 hover:-translate-y-2 transition-transform cursor-pointer`;
                tab.style.left = `-${currentRadius}px`;
                tab.innerHTML = `
                <div class="trapezoid-tab">
                    <div class="font-black leading-none tracking-wide text-lg">${ring.id}</div>
                    <div class="text-[10px] font-bold tracking-widest opacity-90 uppercase mt-0">Phút</div>
                </div>`;
            }
            mapFragment.appendChild(tab);

            // --- Draw Nodes on the Arc ---
            const nodesCount = ring.nodes.length;
            let startAngle, angleStep;
            if (isMobile) {
                angleStep = 360 / nodesCount;
                startAngle = 270 + (angleStep / 2);
            } else {
                startAngle = 15;
                const endAngle = 85;
                angleStep = nodesCount > 1 ? (endAngle - startAngle) / (nodesCount - 1) : 0;
            }

            ring.nodes.forEach((node, nodeIndex) => {
                const angle = startAngle + (angleStep * nodeIndex);

                const nodeEl = document.createElement('div');
                nodeEl.className = 'absolute top-0 left-0 w-0 h-0';
                nodeEl.style.transform = `rotate(${angle}deg)`;

                const nodeSizeClass = isMobile ? "w-7 h-7 border-2" : "w-14 h-14 border-[3px]";
                const badgeClass = isMobile ? "text-[7px] px-1 py-[1px] -bottom-1" : "text-[11px] px-2 py-0.5 -bottom-2";
                const nodeSizePx = isMobile ? 28 : 56;

                const inner = document.createElement('div');
                inner.className = `node-item-${ringIndex} absolute flex flex-col items-center justify-center cursor-pointer group`;
                inner.style.width = `${nodeSizePx}px`;
                inner.style.height = `${nodeSizePx}px`;
                inner.style.left = `-${nodeSizePx / 2}px`;
                inner.style.top = `-${nodeSizePx / 2}px`;
                inner.style.transform = `translateX(-${currentRadius}px) rotate(-${angle}deg)`;

                const contentWrapper = document.createElement('div');
                contentWrapper.className = 'relative flex flex-col items-center justify-center w-full h-full';
                if (isMobile) {
                    contentWrapper.style.animation = `counter-spin ${orbitDuration}s linear infinite`;
                }

                contentWrapper.innerHTML = `
                <div class="node-visual relative ${nodeSizeClass} rounded-full border-white overflow-hidden shadow-lg group-hover:scale-110 group-hover:border-white transition-all duration-300 z-10 bg-[#0e1e2e]">
                    <img src="${node.img}" onerror="this.src='https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=150&h=150&fit=crop&q=80'" loading="lazy" class="w-full h-full object-cover">
                </div>
                <!-- Number Badge -->
                <div class="absolute ${badgeClass} bg-[#8b6135] text-white font-bold rounded-full z-20 shadow-md border-2 border-white group-hover:bg-[#dcb88e] transition-colors">
                    ${node.id}
                </div>
                
                <!-- Hover Tooltip -->
                <div class="absolute bottom-full mb-3 opacity-0 group-hover:opacity-100 transition-opacity bg-[#1e2e3e] text-white text-sm px-4 py-2.5 rounded-xl shadow-2xl whitespace-nowrap pointer-events-none z-30 font-bold border border-white flex items-center gap-2">
                    <span class="bg-[#2a3b4c] text-white px-1.5 py-0.5 rounded-md text-xs">${node.id}</span>
                    ${node.name}
                </div>`;

                inner.appendChild(contentWrapper);
                nodeEl.appendChild(inner);
                ringWrapper.appendChild(nodeEl);
            });

            mapFragment.appendChild(ringWrapper);

            // --- Populate Legend Sidebar ---
            const legendSection = document.createElement('div');
            legendSection.className = `mb-6 legend-item-${ringIndex}`;
            legendSection.innerHTML = `
            <div class="flex items-center gap-2 mb-3">
                <div class="w-0 h-0 border-t-[6px] border-b-[6px] border-l-[8px] border-transparent border-l-white"></div>
                <h3 class="text-xl font-black text-white">${ring.title}</h3>
            </div>
            <ul class="space-y-2 pl-4 border-l-2 border-white ml-1">
                ${ring.nodes.map(n => `
                    <li class="text-[13px] text-white font-medium hover:text-white hover:translate-x-1 transition-transform cursor-pointer flex gap-2">
                        <span class="font-bold text-white">${n.id}.</span> 
                        <span>${n.name}</span>
                    </li>
                `).join('')}
            </ul>`;
            legendFragment.appendChild(legendSection);
        });

        mapOrigin.appendChild(mapFragment);
        legendContainer.appendChild(legendFragment);

        // Turn on GSAP force3D for maximum mobile performance
        if (typeof gsap !== 'undefined') {
            gsap.config({ force3D: true });

            const tl = gsap.timeline({ delay: 0.5 });
            tl.fromTo(".fenica-title",
                { y: 50, autoAlpha: 0 },
                { y: 0, autoAlpha: 1, duration: 1.2, ease: "expo.out" }
            );

            mapData.forEach((_, i) => {
                const ringTl = gsap.timeline();
                ringTl.fromTo(`.ring-arc-${i}`,
                    { scale: 0.6, autoAlpha: 0 },
                    { scale: 1, autoAlpha: 1, duration: 1.2, ease: "expo.out" }, 0)
                    .fromTo(`.tab-item-${i}`,
                        { y: 40, autoAlpha: 0 },
                        { y: 0, autoAlpha: 1, duration: 0.8, ease: "back.out(1.7)" }, 0.15)
                    .fromTo(`.node-item-${i}`,
                        { scale: 0, autoAlpha: 0 },
                        { scale: 1, autoAlpha: 1, duration: 0.7, stagger: 0.08, ease: "back.out(1.5)" }, 0.2)
                    .fromTo(`.legend-item-${i}`,
                        { x: 30, autoAlpha: 0 },
                        { x: 0, autoAlpha: 1, duration: 0.8, ease: "expo.out" }, 0.25);

                if (!isMobile) {
                    ringTl.to(`.ring-arc-${i}, .node-item-${i} .node-visual`, {
                        opacity: 0.4,
                        duration: 1.2,
                        yoyo: true,
                        repeat: -1,
                        ease: "sine.inOut"
                    }, 1.5);
                }
                tl.add(ringTl, i * 0.15);
            });
        }
    }

    // 2. --- Floor Plan Scroll Animations (Pinned) ---
    const floorSection = document.getElementById('floor-plans-section');
    if (floorSection && typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        ScrollTrigger.create({
            trigger: floorSection,
            start: "top top", // Pin exactly when the section hits the top of the viewport
            end: "+=150%",    // Keep it pinned for 1.5 times the viewport height while scrolling
            pin: true,
            scrub: 1,         // Smooth scrubbing
            animation: gsap.timeline()
                .to("#floor-text-1", { opacity: 0, y: -30, duration: 1 }, 0)
                .to("#floor-text-2", { opacity: 1, y: 0, duration: 1 }, 0)
                .to("#floor-img-1", { opacity: 0, duration: 1 }, 0)
                .to("#floor-img-2-wrapper", { clipPath: "inset(0% 0 0 0)", duration: 1, ease: "power2.inOut" }, 0)
                .to("#floor-img-2", { scale: 1, duration: 1, ease: "power1.out" }, 0)
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

    // 6. --- Initialize AOS ---
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
});