<?php
/**
 * The main template file
 */

get_header(); ?>

<main id="primary" class="site-main pt-32 pb-16 min-h-screen text-white relative z-10 px-4">
    <div class="max-w-[1200px] mx-auto">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
                    <header class="entry-header mb-6">
                        <?php the_title('<h1 class="entry-title text-2xl lg:text-4xl font-bold playfair">', '</h1>'); ?>
                    </header>
                    <div class="entry-content font-light leading-relaxed">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else:
            ?>
            <p>Không tìm thấy nội dung.</p>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
