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
if ( ! defined( 'WPCF7_AUTOP' ) ) {
    define('WPCF7_AUTOP', false); // Disable CF7 auto paragraph
}
add_filter( 'wpcf7_load_css', '__return_false' ); // Disable CF7 default CSS
