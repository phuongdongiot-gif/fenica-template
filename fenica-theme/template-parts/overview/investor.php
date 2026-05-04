<section id="investor-section" class="w-full py-12 lg:py-20 relative overflow-hidden z-10">
    <div class="max-w-[1200px] mx-auto px-4 md:px-8 relative z-10">
        <div class="text-center mb-10 lg:mb-16">
            <h2 class="text-2xl lg:text-4xl font-bold playfair uppercase tracking-wide animate-gradient-text"
                data-aos="fade-up">
                Chủ Đầu Tư
            </h2>
            <div class="flex items-center justify-center gap-3 mt-6" data-aos="fade-up" data-aos-delay="100">
                <div class="h-[1px] w-12 bg-gradient-to-r from-transparent to-[#d4ae6f]"></div>
                <div
                    class="w-2.5 h-2.5 rotate-45 bg-gradient-to-br from-[#f0e0ca] to-[#d4ae6f] shadow-[0_0_10px_rgba(212,174,111,0.8)]">
                </div>
                <div class="h-[1px] w-12 bg-gradient-to-l from-transparent to-[#d4ae6f]"></div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">
            <!-- Logo side -->
            <div class="w-full lg:w-2/5 flex justify-center" data-aos="fade-right" data-aos-duration="1000">
                <div class="relative w-full max-w-sm group">
                    <!-- Glow effect -->
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-[#d4ae6f]/50 to-[#f0e0ca]/50 rounded-2xl blur opacity-30 group-hover:opacity-60 transition duration-1000">
                    </div>
                    <div
                        class="relative bg-white/[0.03] backdrop-blur-md border border-[#d4ae6f]/30 rounded-2xl p-10 lg:p-14 flex items-center justify-center hover:bg-white/10 transition-all duration-500 shadow-[0_8px_32px_rgba(0,0,0,0.2)]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-fenica.png"
                            alt="A&T Group Logo"
                            class="w-full h-auto object-contain drop-shadow-xl group-hover:scale-105 transition-transform duration-500"
                            title="A&T Group Logo">
                    </div>
                </div>
            </div>

            <!-- Text side -->
            <div class="w-full lg:w-3/5 flex flex-col gap-6 text-center lg:text-left" data-aos="fade-left"
                data-aos-duration="1000" data-aos-delay="200">
                <h3 class="text-2xl md:text-3xl font-bold text-white playfair tracking-wide">
                    Công ty TNHH Đầu tư dự án Phượng Hoàng
                </h3>
                <p class="text-[#d4ae6f] font-light tracking-[0.1em] uppercase text-sm md:text-base">
                    Phượng Hoàng Luxury
                </p>
                <div class="h-[1px] w-full max-w-xs bg-gradient-to-r from-[#d4ae6f]/50 to-transparent mx-auto lg:mx-0">
                </div>
                <p class="text-gray-300 font-light leading-relaxed text-sm md:text-base text-justify lg:text-left">
                    Công ty TNHH Đầu tư dự án Phượng Hoàng là đơn vị chủ đầu tư dự án chung cư có quy mô 579 căn với
                    tên pháp lý là Phượng Hoàng Luxury và tên thương mại là Fenica.

                    Công ty Phượng Hoàng có trụ sở tại Số 180 đường Huỳnh Thị Tươi, Khu phố Tân Thắng, Phường Tân
                    Đông Hiệp, TP Hồ Chí Minh, được thành lập vào cuối năm 2021, có người đại diện pháp luật là Lâm
                    Quang Thới.

                    Đồng hành cùng chủ đầu tư Phượng Hoàng trong việc phát triển dự án Fenica Dĩ An còn có sự tham
                    gia của hai đơn vị đóng vai trò là đơn vị phát triển dự án là NK Properties và DLR.

                    Sự hợp tác này là bảo chứng cho một sản phẩm “giá trị thực”, cam kết bàn giao căn hộ Fenica Dĩ
                    An vào Quý IV/2027, mang lại không gian sống hiện đại, tiện nghi ngay tại cửa ngõ TP.HCM.

                    Mọi diễn biến tại đại công trường từ khâu làm móng đến các nhịp lên tầng đều được ghi nhận định
                    kỳ nhằm giúp khách hàng dễ dàng theo dõi tổ ấm của mình. Mời quý vị khám phá ngay hình ảnh và
                    video thực tế tại Tiến độ thi công dự án Fenica để thấy rõ diện mạo dự án đang thay đổi từng
                    ngày. Liên hệ chúng tôi nếu bạn muốn tham quan thực tế dự án.
                </p>
            </div>
        </div>
    </div>
</section>


<style>
    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes scroll-right {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .animate-scroll-left {
        animation: scroll-left 30s linear infinite;
    }

    .animate-scroll-right {
        animation: scroll-right 30s linear infinite;
    }

    .partner-card {
        width: 220px;
        height: 110px;
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(212, 174, 111, 0.2);
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease;
        padding: 1.5rem;
        flex-shrink: 0;
    }

    .partner-card:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(212, 174, 111, 0.6);
        transform: scale(1.05) translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2), inset 0 0 15px rgba(212, 174, 111, 0.1);
    }

    .partner-card img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        filter: grayscale(100%) opacity(0.5);
        transition: all 0.4s ease;
    }

    .partner-card:hover img {
        filter: grayscale(0%) opacity(1) drop-shadow(0 0 10px rgba(255, 255, 255, 0.2));
    }
</style>

<!-- Partners Section -->