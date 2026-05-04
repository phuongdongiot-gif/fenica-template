<?php
/**
 * Template Name: Overview Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Carousel Section -->
    
    <?php get_template_part('template-parts/overview/h-500px'); ?>

    <?php get_template_part('template-parts/overview/overview'); ?>

    <?php get_template_part('template-parts/overview/investor'); ?>

    <?php get_template_part('template-parts/overview/partners'); ?>

    <?php get_template_part('template-parts/overview/section-5'); ?>

    <?php get_template_part('template-parts/overview/flex-col'); ?>
</main>

<?php
get_footer();
