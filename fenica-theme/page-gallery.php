<?php
/**
 * Template Name: Gallery Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Video Carousel Section -->
    
    <?php get_template_part('template-parts/gallery/pt-32'); ?>

    <?php get_template_part('template-parts/gallery/pt-10'); ?>

    <?php get_template_part('template-parts/gallery/section-3'); ?>

    <?php get_template_part('template-parts/gallery/section-4'); ?>

    <?php get_template_part('template-parts/gallery/section-5'); ?>

    <?php get_template_part('template-parts/gallery/section-6'); ?>

    <?php get_template_part('template-parts/gallery/section-7'); ?>

    <?php get_template_part('template-parts/gallery/gallery-container'); ?>

    <?php get_template_part('template-parts/gallery/pb-24'); ?>
</main>

<?php
get_footer();
