<?php
/**
 * Template Name: News Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- News Section -->
    
    <?php get_template_part('template-parts/home/news-grid'); ?>
</main>

<?php
get_footer();
