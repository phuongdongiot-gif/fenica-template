<?php
/**
 * Template Name: Coming Soon Page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp Ra Mắt | <?php bloginfo('name'); ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .playfair {
            font-family: 'Playfair Display', serif;
        }
        .glass-panel {
            background: rgba(14, 30, 46, 0.4);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(212, 174, 111, 0.3);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), inset 0 0 20px rgba(212, 174, 111, 0.1);
        }
        .text-gradient-gold {
            background: linear-gradient(to right, #b38e55, #f9e5b8, #d4ae6f, #f9e5b8, #b38e55);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: shine 4s linear infinite;
        }
        @keyframes shine {
            to { background-position: 200% center; }
        }
        @keyframes y-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .animate-bounce-slow {
            animation: y-bounce 4s ease-in-out infinite;
        }
    </style>
</head>
<body <?php body_class('min-h-screen bg-[#0e1e2e] text-white flex items-center justify-center relative overflow-hidden'); ?>>

    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/anh-du-an-fenica-huong-tu-metro.jpg" class="w-full h-full object-cover opacity-20" alt="Background">
        <div class="absolute inset-0 bg-gradient-to-b from-[#0e1e2e]/90 via-[#0e1e2e]/60 to-[#0e1e2e]/90"></div>
    </div>

    <!-- Animated Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80vw] h-[80vw] md:w-[40vw] md:h-[40vw] bg-[#d4ae6f]/20 rounded-full blur-[100px] z-0 animate-pulse pointer-events-none"></div>

    <main class="relative z-10 w-full max-w-5xl mx-auto px-4 py-12 flex flex-col items-center justify-center text-center">
        <!-- Logo -->
        <div class="mb-10 animate-bounce-slow">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-fenica.png" alt="Fenica Logo" class="w-48 md:w-64 h-auto mx-auto drop-shadow-[0_0_20px_rgba(212,174,111,0.5)]">
            </a>
        </div>

        <!-- Heading -->
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-widest playfair mb-6 text-gradient-gold">
            Sắp Ra Mắt
        </h1>
        
        <p class="text-base md:text-lg lg:text-xl text-gray-300 mb-12 max-w-2xl mx-auto leading-relaxed">
            Chúng tôi đang chuẩn bị mang đến cho bạn một không gian sống đẳng cấp và hoàn mỹ nhất tại dự án Fenica. Đón chờ siêu phẩm bất động sản tại Trung tâm.
        </p>

        <!-- Countdown Timer -->
        <div class="flex flex-wrap justify-center gap-4 md:gap-8 mb-16">
            <div class="glass-panel rounded-2xl p-4 md:p-6 w-24 md:w-32 flex flex-col items-center justify-center transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_30px_rgba(212,174,111,0.3)]">
                <span id="days" class="text-4xl md:text-5xl font-bold text-[#d4ae6f] mb-2 playfair">00</span>
                <span class="text-xs md:text-sm uppercase tracking-widest text-gray-400 font-semibold">Ngày</span>
            </div>
            <div class="glass-panel rounded-2xl p-4 md:p-6 w-24 md:w-32 flex flex-col items-center justify-center transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_30px_rgba(212,174,111,0.3)]">
                <span id="hours" class="text-4xl md:text-5xl font-bold text-[#d4ae6f] mb-2 playfair">00</span>
                <span class="text-xs md:text-sm uppercase tracking-widest text-gray-400 font-semibold">Giờ</span>
            </div>
            <div class="glass-panel rounded-2xl p-4 md:p-6 w-24 md:w-32 flex flex-col items-center justify-center transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_30px_rgba(212,174,111,0.3)]">
                <span id="minutes" class="text-4xl md:text-5xl font-bold text-[#d4ae6f] mb-2 playfair">00</span>
                <span class="text-xs md:text-sm uppercase tracking-widest text-gray-400 font-semibold">Phút</span>
            </div>
            <div class="glass-panel rounded-2xl p-4 md:p-6 w-24 md:w-32 flex flex-col items-center justify-center transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_30px_rgba(212,174,111,0.3)]">
                <span id="seconds" class="text-4xl md:text-5xl font-bold text-[#d4ae6f] mb-2 playfair">00</span>
                <span class="text-xs md:text-sm uppercase tracking-widest text-gray-400 font-semibold">Giây</span>
            </div>
        </div>

        <!-- Notification Form -->
        <div class="w-full max-w-md mx-auto relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-[#d4ae6f] to-[#b38e55] rounded-full blur opacity-30 group-hover:opacity-60 transition duration-1000 group-hover:duration-300"></div>
            <form class="relative flex items-center bg-[#0e1e2e]/90 backdrop-blur-md rounded-full border border-[#d4ae6f]/30 p-1 pl-6 overflow-hidden">
                <input type="email" placeholder="Nhập email nhận thông báo..." class="w-full bg-transparent text-white outline-none placeholder-gray-500 text-sm md:text-base font-light">
                <button type="button" onclick="alert('Cảm ơn bạn đã đăng ký nhận thông tin từ Fenica!');" class="shrink-0 bg-gradient-to-r from-[#b38e55] via-[#d4ae6f] to-[#b38e55] text-[#0e1e2e] font-bold uppercase tracking-wider text-xs md:text-sm px-6 py-3 md:py-4 rounded-full hover:shadow-[0_0_20px_rgba(212,174,111,0.6)] transition-all hover:scale-105">
                    Đăng Ký
                </button>
            </form>
        </div>

        <!-- Social Links / Footer -->
        <div class="mt-16 flex items-center justify-center gap-6 text-gray-400">
            <a href="#" class="hover:text-[#d4ae6f] transform hover:scale-110 transition-all"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
            <a href="#" class="hover:text-[#d4ae6f] transform hover:scale-110 transition-all"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
            <a href="#" class="hover:text-[#d4ae6f] transform hover:scale-110 transition-all"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></a>
        </div>
    </main>

    <script>
        // Set the countdown date (e.g., 3 months from now)
        const now = new Date();
        const countDownDate = new Date(now.setMonth(now.getMonth() + 3)).getTime();

        const x = setInterval(function() {
            const current = new Date().getTime();
            const distance = countDownDate - current;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").innerText = days.toString().padStart(2, '0');
            document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
            document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("days").innerText = "00";
                document.getElementById("hours").innerText = "00";
                document.getElementById("minutes").innerText = "00";
                document.getElementById("seconds").innerText = "00";
            }
        }, 1000);
    </script>

    <?php wp_footer(); ?>
</body>
</html>
