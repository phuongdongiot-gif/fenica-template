<?php
/*
 * LUU Y QUAN TRONG:
 * File nay chua code PHP (WP_Query) goi du lieu DONG tu co so du lieu WordPress (phan Tin tuc).
 * KHONG ghi de file nay bang HTML tinh (static) tu ban thiet ke, neu khong se mat tinh nang lay bai tu dong!
 *//**
 * Template Name: News Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- News Section -->
    
    <?php get_template_part('template-parts/home/md-py-28'); ?>
</main>

<?php
get_footer();
