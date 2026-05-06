<?php
/*
 * LƯU Ý QUAN TRỌNG:
 * File này chứa code PHP để gọi Contact Form 7.
 * KHÔNG ghi đè file này bằng HTML tĩnh!
 */
?>
<section class="py-24 md:py-32 relative z-10 pt-32">
    <div class="max-w-[1400px] mx-auto px-4 md:px-8">
        <div class="flex flex-col lg:flex-row bg-transparent">


            <!-- Right: Visual & Testimonial -->
            <div class="w-full lg:w-1/2 h-[500px] lg:h-auto bg-[#1a2b3c] lg:rounded-l-[2.5rem] relative overflow-hidden group"
                data-aos="fade-left" data-aos-delay="100">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/anh-du-an-fenica-moi-nhat.jpg"
                    alt="Fenica Interior"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000"
                    loading="lazy" title="Fenica Interior">

                <!-- Grid Pattern Overlay -->
                <div class="absolute inset-0 pointer-events-none mix-blend-overlay opacity-40 z-10"
                    style="background-image: linear-gradient(rgba(255,255,255,0.15) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.15) 1px, transparent 1px); background-size: 40px 40px;">
                </div>

                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#0e1e2e] via-[#0e1e2e]/50 to-[#0e1e2e]/20 z-10">
                </div>

                <!-- Testimonial Content -->
            </div>
            <!-- Left: Form Card -->
            <div class="w-full lg:w-1/2 bg-white lg:rounded-r-[2.5rem] p-8 md:p-12 shadow-2xl relative overflow-hidden"
                data-aos="fade-right">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-[#f0e0ca]/50 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none">
                </div>

                <div class="relative z-10">
                    <h2 class="text-2xl lg:text-4xl lg:text-[40px] font-bold text-[#0e1e2e] mb-4">Chúng tôi luôn sẵn
                        sàng hỗ trợ</h2>
                    <p class="text-gray-500 mb-10 text-sm md:text-base font-light leading-relaxed">Đội ngũ chuyên
                        viên tư vấn của Fenica luôn túc trực để giải đáp mọi thắc mắc của bạn. Chúng tôi sẽ liên hệ
                        lại trong vòng 24 giờ.</p>

                    <!-- Contact Form 7 Auto Generated Form -->
                    <?php
                    $cf7_id = get_option('fenica_contact_form_id');
                    if ($cf7_id && shortcode_exists('contact-form-7')) {
                        echo do_shortcode('[contact-form-7 id="' . esc_attr($cf7_id) . '" title="Form đăng ký tư vấn Fenica"]');
                    } else if (shortcode_exists('contact-form-7')) {
                        echo do_shortcode('[contact-form-7 title="Form đăng ký tư vấn"]');
                    }
                    ?>

                    <!-- Fallback static form if CF7 is not active -->
                    <?php if (!shortcode_exists('contact-form-7')): ?>
                        <form class="space-y-6">
                            <!-- Name Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-[#0e1e2e]">Họ</label>
                                    <input type="text" placeholder="Họ của bạn"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0e1e2e] focus:ring-2 focus:ring-[#0e1e2e]/10 outline-none transition-all text-[#0e1e2e] bg-transparent">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-[#0e1e2e]">Tên</label>
                                    <input type="text" placeholder="Tên của bạn"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0e1e2e] focus:ring-2 focus:ring-[#0e1e2e]/10 outline-none transition-all text-[#0e1e2e] bg-transparent">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-[#0e1e2e]">Email</label>
                                <input type="email" placeholder="you@company.com"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0e1e2e] focus:ring-2 focus:ring-[#0e1e2e]/10 outline-none transition-all text-[#0e1e2e] bg-transparent">
                            </div>

                            <!-- Phone -->
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-[#0e1e2e]">Số điện thoại</label>
                                <div
                                    class="flex border border-gray-200 rounded-xl focus-within:border-[#0e1e2e] focus-within:ring-2 focus-within:ring-[#0e1e2e]/10 transition-all bg-transparent overflow-hidden">
                                    <div class="relative flex items-center border-r border-gray-200">
                                        <select
                                            class="h-full py-3 pl-4 pr-8 text-sm font-medium text-gray-700 bg-transparent border-none focus:ring-0 outline-none appearance-none cursor-pointer">
                                            <option>US</option>
                                            <option selected>VN</option>
                                        </select>
                                        <div class="absolute right-2 flex items-center pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <input type="tel" placeholder="+84 (090) 123-4567"
                                        class="w-full px-4 py-3 border-none focus:ring-0 outline-none text-[#0e1e2e] bg-transparent">
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-[#0e1e2e]">Lời nhắn</label>
                                <textarea rows="4" placeholder="Nhập nội dung cần tư vấn..."
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0e1e2e] focus:ring-2 focus:ring-[#0e1e2e]/10 outline-none transition-all text-[#0e1e2e] bg-transparent resize-none"></textarea>
                            </div>

                            <!-- Checkbox -->
                            <div class="flex items-start gap-3 pt-2">
                                <div class="flex items-center h-5 mt-0.5">
                                    <input type="checkbox" id="privacy"
                                        class="w-4 h-4 border border-gray-300 rounded text-[#0e1e2e] focus:ring-[#0e1e2e] cursor-pointer">
                                </div>
                                <label for="privacy" class="text-sm text-gray-500 cursor-pointer">
                                    Bạn đồng ý với <a href="#"
                                        class="text-[#0e1e2e] font-bold hover:text-[#d4ae6f] underline decoration-gray-300 underline-offset-4 transition-colors">chính
                                        sách bảo mật</a> của chúng tôi.
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button type="button"
                                class="w-full py-4 px-6 bg-[#0e1e2e] hover:bg-[#d4ae6f] text-white hover:text-[#0e1e2e] font-bold rounded-xl transition-all duration-300 shadow-[0_10px_20px_rgba(14,30,46,0.15)] hover:shadow-[0_10px_25px_rgba(212,174,111,0.3)] mt-2">
                                Gửi thông tin
                            </button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>