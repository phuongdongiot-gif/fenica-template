<?php
/**
 * Fenica theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function fenica_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'fenica' ),
        'footer'  => esc_html__( 'Footer Menu', 'fenica' ),
    ) );

    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
}
add_action( 'after_setup_theme', 'fenica_setup' );

/**
 * Enqueue scripts and styles.
 */
function fenica_scripts() {
    // Fonts
    wp_enqueue_style( 'fenica-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap', array(), null );

    // Tailwind CSS (For now via CDN as in HTML, later should be compiled)
    wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com?plugins=typography', array(), null, false );

    // External CSS
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0' );
    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1' );
    wp_enqueue_style( 'glightbox-css', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css', array(), null );

    // Theme Custom CSS
    wp_enqueue_style( 'fenica-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ) );

    // External JS
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0', true );
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap-js'), '3.12.2', true );
    wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true );
    wp_enqueue_script( 'lenis-js', 'https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js', array(), '1.0.42', true );
    wp_enqueue_script( 'glightbox-js', 'https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js', array(), null, true );
    wp_enqueue_script( 'three-js', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js', array(), '128', true );

    // Theme Custom JS
    wp_enqueue_script( 'fenica-menu', get_template_directory_uri() . '/assets/js/menu.js', array(), filemtime( get_template_directory() . '/assets/js/menu.js' ), true );
    wp_enqueue_script( 'fenica-wave', get_template_directory_uri() . '/assets/js/wave-preloader.js', array('three-js'), filemtime( get_template_directory() . '/assets/js/wave-preloader.js' ), true );
    wp_enqueue_script( 'fenica-main', get_template_directory_uri() . '/assets/js/main.js', array('gsap-js', 'swiper-js', 'aos-js', 'lenis-js'), filemtime( get_template_directory() . '/assets/js/main.js' ), true );

    // Enqueue subpage specific JS only if files exist
    if ( file_exists( get_template_directory() . '/assets/js/gallery-init.js' ) ) {
        wp_enqueue_script( 'fenica-gallery', get_template_directory_uri() . '/assets/js/gallery-init.js', array('gsap-js', 'swiper-js'), filemtime( get_template_directory() . '/assets/js/gallery-init.js' ), true );
    }
    if ( file_exists( get_template_directory() . '/assets/js/plans.js' ) ) {
        wp_enqueue_script( 'fenica-plans', get_template_directory_uri() . '/assets/js/plans.js', array(), filemtime( get_template_directory() . '/assets/js/plans.js' ), true );
    }
}
add_action( 'wp_enqueue_scripts', 'fenica_scripts' );

/**
 * Configure Contact Form 7
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' ); // Disable CF7 auto paragraph
add_filter( 'wpcf7_load_css', '__return_false' ); // Disable CF7 default CSS


/**
 * Admin Menu for Fenica Setup
 */
function fenica_setup_menu() {
    add_theme_page(
        'Fenica Setup', 
        'Cài đặt Fenica', 
        'manage_options', 
        'fenica-setup', 
        'fenica_setup_page'
    );
}
add_action( 'admin_menu', 'fenica_setup_menu' );

function fenica_setup_page() {
    if ( isset( $_POST['create_cf7'] ) && check_admin_referer( 'fenica_create_cf7' ) ) {
        if ( fenica_create_cf7_form() ) {
            echo '<div class="notice notice-success is-dismissible"><p>Đã tạo Form liên hệ mẫu (CF7) thành công!</p></div>';
        } else {
            echo '<div class="notice notice-error is-dismissible"><p>Lỗi: Không thể tạo form. Đảm bảo plugin Contact Form 7 đã được kích hoạt.</p></div>';
        }
    }

    $current_form_id = get_option('fenica_contact_form_id');
    ?>
    <div class="wrap">
        <h1>Cài đặt Theme Fenica</h1>
        <p>Tại đây bạn có thể tạo tự động các dữ liệu mẫu cần thiết cho theme.</p>
        
        <div class="card" style="max-width: 600px; margin-top: 20px;">
            <h2>Contact Form 7</h2>
            <p>Tạo form liên hệ mẫu với giao diện chuẩn của Fenica (Tailwind CSS).</p>
            <?php if ( $current_form_id ) : ?>
                <p><strong>Trạng thái:</strong> Đã tạo Form (ID: <?php echo esc_html($current_form_id); ?>)</p>
            <?php else: ?>
                <p><strong>Trạng thái:</strong> Chưa tạo Form mẫu.</p>
            <?php endif; ?>

            <form method="post">
                <?php wp_nonce_field( 'fenica_create_cf7' ); ?>
                <input type="hidden" name="create_cf7" value="1">
                <?php submit_button( 'Tạo/Cập nhật Form Liên Hệ Mẫu', 'primary' ); ?>
            </form>
        </div>
    </div>
    <?php
}

/**
 * Function to actually create the form
 */
function fenica_create_cf7_form() {
    // Check if CF7 is active
    if ( ! post_type_exists( 'wpcf7_contact_form' ) ) {
        return false;
    }

    $form_html = '
<style>
.fenica-form .wpcf7-form-control.wpcf7-text,
.fenica-form .wpcf7-form-control.wpcf7-textarea,
.fenica-form .wpcf7-form-control.wpcf7-select {
    width: 100%;
    padding: 0.75rem 1rem;
    border-radius: 0.75rem;
    border: 1px solid #e5e7eb;
    background-color: transparent;
    color: #0e1e2e;
    outline: none;
    transition: all 0.3s;
}
.fenica-form .wpcf7-form-control:focus {
    border-color: #0e1e2e;
    box-shadow: 0 0 0 2px rgba(14, 30, 46, 0.1);
}
.fenica-form .wpcf7-submit {
    width: 100%;
    padding: 1rem 1.5rem;
    background-color: #0e1e2e;
    color: #ffffff;
    font-weight: bold;
    border-radius: 0.75rem;
    transition: all 0.3s;
    box-shadow: 0 10px 20px rgba(14, 30, 46, 0.15);
    margin-top: 0.5rem;
    cursor: pointer;
    border: none;
}
.fenica-form .wpcf7-submit:hover {
    background-color: #d4ae6f;
    color: #0e1e2e;
    box-shadow: 0 10px 25px rgba(212, 174, 111, 0.3);
}
.fenica-form .wpcf7-acceptance input {
    width: 1rem;
    height: 1rem;
    border: 1px solid #d1d5db;
    border-radius: 0.25rem;
    cursor: pointer;
}
.fenica-form .wpcf7-select {
    appearance: none;
    -webkit-appearance: none;
    padding-left: 1rem;
    padding-right: 2rem;
    cursor: pointer;
    border: none !important;
}

/* Đảm bảo khung bọc input của CF7 full width */
.fenica-form .wpcf7-form-control-wrap {
    display: block;
    width: 100%;
}

/* Style cho dòng chữ báo lỗi bên dưới mỗi input */
.fenica-form .wpcf7-not-valid-tip {
    color: #ef4444 !important; /* Màu đỏ của Tailwind */
    font-size: 0.75rem !important;
    margin-top: 0.35rem;
    display: block;
    font-weight: 500;
}

/* Style cho hộp thông báo tổng thành công/thất bại ở dưới cùng */
.fenica-form .wpcf7-response-output {
    border-radius: 0.75rem !important;
    font-size: 0.875rem;
    margin-top: 1rem !important;
    margin-bottom: 0 !important;
    border: 1px solid #ef4444 !important; /* Mặc định viền đỏ nếu lỗi tổng */
}

/* Nếu thành công đổi viền xanh */
.fenica-form form.sent .wpcf7-response-output {
    border-color: #22c55e !important; 
    color: #166534 !important;
    background-color: #f0fdf4 !important;
}
</style>
<div class="fenica-form">
    <div class="space-y-1">
        <label class="text-sm font-bold text-[#0e1e2e]">Họ và tên *</label>
        [text* hoten placeholder "Họ và tên của bạn"]
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
        <div class="space-y-1">
            <label class="text-sm font-bold text-[#0e1e2e]">Email *</label>
            [email* your-email placeholder "you@company.com"]
        </div>
        <div class="space-y-1">
            <label class="text-sm font-bold text-[#0e1e2e]">Số điện thoại *</label>
            [tel* your-phone placeholder "090 123 4567"]
        </div>
    </div>
    
    <div class="space-y-1 mt-4">
        <label class="text-sm font-bold text-[#0e1e2e]">Lời nhắn</label>
        [textarea your-message 3x3 placeholder "Nhập nội dung cần tư vấn..."]
    </div>
    
    <!-- Đã bỏ h-5 để text lỗi không bị cắt gọt -->
    <div class="flex items-start gap-3 mt-4">
        <div class="mt-1">
            [acceptance acceptance-811]
        </div>
        <div class="space-y-1">
            <label class="text-xs md:text-sm text-gray-500 cursor-pointer">
                Bạn đồng ý với <a href="#" class="text-[#0e1e2e] font-bold hover:text-[#d4ae6f] underline decoration-gray-300 underline-offset-4 transition-colors">chính sách bảo mật</a> của chúng tôi.
            </label>
        </div>
    </div>
    
    [submit "Gửi thông tin"]
</div>
';

    // Check if we are updating an existing one
    $existing_id = get_option('fenica_contact_form_id');
    $post_id = 0;

    if ( $existing_id && get_post( $existing_id ) ) {
        // Update existing form
        $post_id = wp_update_post( array(
            'ID' => $existing_id,
            'post_title' => 'Form đăng ký tư vấn Fenica',
        ) );
    } else {
        // Create the post
        $post_id = wp_insert_post( array(
            'post_title'   => 'Form đăng ký tư vấn Fenica',
            'post_type'    => 'wpcf7_contact_form',
            'post_status'  => 'publish',
        ) );
    }

    if ( $post_id && ! is_wp_error( $post_id ) ) {
        // Save the CF7 properties
        update_post_meta( $post_id, '_form', $form_html );
        update_post_meta( $post_id, '_mail', array(
            'subject'            => 'Fenica - Đăng ký tư vấn từ [ho] [ten]',
            'sender'             => '[your-email]',
            'body'               => "Bạn có một liên hệ mới từ website Fenica:\n\nHọ và tên: [hoten]\nEmail: [your-email]\nĐiện thoại: [quoc-gia] [your-phone]\nLời nhắn:\n[your-message]",
            'recipient'          => get_option('admin_email'),
            'additional_headers' => 'Reply-To: [your-email]',
            'attachments'        => '',
            'use_html'           => false,
            'exclude_blank'      => false,
        ) );
        update_post_meta( $post_id, '_mail_2', array( 'active' => false ) );
        update_post_meta( $post_id, '_messages', array(
            'mail_sent_ok'       => 'Cảm ơn bạn. Thông điệp của bạn đã được gửi.',
            'mail_sent_ng'       => 'Có lỗi xảy ra khi gửi. Vui lòng thử lại sau.',
            'validation_error'   => 'Một hoặc nhiều trường có lỗi. Vui lòng kiểm tra và thử lại.',
            'spam'               => 'Có lỗi xảy ra khi gửi. Vui lòng thử lại sau.',
            'accept_terms'       => 'Vui lòng chấp nhận các điều khoản để tiếp tục.',
            'invalid_required'   => 'Vui lòng điền vào trường bắt buộc này.',
        ) );
        update_post_meta( $post_id, '_additional_settings', '' );
        update_post_meta( $post_id, '_locale', get_locale() );

        // Save the created form ID
        update_option( 'fenica_contact_form_id', $post_id );
        return true;
    }
    return false;
}
