document.addEventListener('DOMContentLoaded', () => {
    // Xử lý nút Play cho Video (Facade)
    document.querySelectorAll('.video-overlay').forEach(overlay => {
        overlay.addEventListener('click', function () {
            const media = this.previousElementSibling;
            if (media && media.tagName === 'IFRAME' && media.hasAttribute('data-src')) {
                media.src = media.getAttribute('data-src');
            }
            this.style.display = 'none';
        });
    });

    // Setup Swiper Video Carousel
    if (typeof Swiper !== 'undefined') {
        const videoSwiper = new Swiper('.video-swiper', {
            slidesPerView: 1.2,
            spaceBetween: 20,
            centeredSlides: true,
            loop: false,
            pagination: {
                el: '.video-swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 1.5,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 1.5,
                    spaceBetween: 40,
                }
            }
        });
    }

    // Setup Swiper TikTok Carousel
    if (typeof Swiper !== 'undefined') {
        const tiktokSwiper = new Swiper('.tiktok-swiper', {
            slidesPerView: 1.2,
            spaceBetween: 20,
            centeredSlides: true,
            loop: false,
            pagination: {
                el: '.tiktok-swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2.2,
                    spaceBetween: 25,
                },
                1024: {
                    slidesPerView: 3.2,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 3.5,
                    spaceBetween: 40,
                }
            }
        });
    }

    // Setup GLightbox cho Video và Hình ảnh
    if (typeof GLightbox !== 'undefined') {
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });

        // Ngăn chặn trình duyệt tự động nhảy sang trang YouTube (đặc biệt trên các slide Swiper duplicate)
        document.addEventListener('click', function (e) {
            if (e.target.closest('.glightbox')) {
                e.preventDefault();
            }
        }, true); // Use capture phase to ensure it runs before link navigation
    }

    // Setup Swiper Stacked Cards Gallery (replaces old GSAP scroll)
    if (typeof Swiper !== 'undefined') {
        const galleryCardsSwiper = new Swiper('.gallery-cards-swiper', {
            effect: "cards",
            grabCursor: true,
            loop: true,
            cardsEffect: {
                perSlideOffset: 12, // Khoảng cách giữa các thẻ
                perSlideRotate: 3,  // Độ nghiêng của thẻ
                slideShadows: true,
            },
            navigation: {
                nextEl: '#gal-next',
                prevEl: '#gal-prev',
            },
        });
    }
});
