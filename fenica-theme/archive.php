<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<main id="primary" class="site-main pt-24 md:pt-32 relative z-10 text-white min-h-screen">
    <section class="py-16 relative z-10 bg-transparent">
        <div class="max-w-[1600px] mx-auto px-4 md:px-8">
            
            <header class="mb-12 text-center">
                <?php
                the_archive_title( '<h1 class="text-4xl md:text-5xl font-bold playfair mb-4 text-white uppercase tracking-widest" data-aos="fade-down">', '</h1>' );
                the_archive_description( '<div class="text-gray-400 font-light max-w-2xl mx-auto" data-aos="fade-up">', '</div>' );
                ?>
            </header>

            <?php if ( have_posts() ) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 w-full" data-aos="fade-up" data-aos-delay="100">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <div class="h-auto flex">
                            <a href="<?php the_permalink(); ?>" class="group cursor-pointer flex flex-col h-full w-full overflow-hidden transition-all duration-500 bg-white/[0.02] border border-[#d4ae6f]/20 rounded-[2rem] p-4 md:p-5 hover:bg-white/[0.05] hover:border-[#d4ae6f]/40 shadow-lg hover:shadow-[0_10px_30px_rgba(212,174,111,0.15)] hover:-translate-y-2">
                                <div class="relative w-full h-[250px] md:h-[300px] shrink-0 overflow-hidden rounded-[1.5rem]">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'large', array( 'class' => 'absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out' ) ); ?>
                                    <?php else : ?>
                                        <div class="absolute inset-0 w-full h-full bg-[#1a2b3c] flex items-center justify-center">
                                            <span class="text-white/20 playfair text-2xl">Fenica</span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#0e1e2e] via-transparent to-transparent opacity-60 pointer-events-none"></div>
                                </div>
                                <div class="pt-6 flex flex-col flex-1 pb-2">
                                    <div class="flex items-center gap-2 text-[#d4ae6f] text-xs font-bold uppercase tracking-wider mb-3">
                                        <span class="w-2 h-2 rounded-full bg-[#d4ae6f] opacity-50"></span>
                                        <?php 
                                        $cats = get_the_category();
                                        echo !empty($cats) ? esc_html($cats[0]->name) : 'Tin tức';
                                        ?>
                                    </div>
                                    <h3 class="text-xl md:text-2xl font-bold text-white playfair mb-4 group-hover:text-[#d4ae6f] transition-colors leading-tight">
                                        <?php the_title(); ?>
                                    </h3>
                                    <div class="text-gray-300 font-light text-sm md:text-base mb-6 line-clamp-3">
                                        <?php echo wp_trim_words( get_the_excerpt(), 25 ); ?>
                                    </div>
                                    <div class="mt-auto flex items-center gap-2 text-[#d4ae6f] font-bold text-sm uppercase tracking-wide">
                                        Đọc tiếp
                                        <svg class="w-4 h-4 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;
                    ?>
                </div>

                <!-- Pagination -->
                <div class="mt-16 flex justify-center">
                    <?php
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>',
                        'next_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                        'class'     => 'flex gap-2'
                    ) );
                    ?>
                </div>

                <style>
                    /* Custom pagination styling to match theme */
                    .nav-links { display: flex; gap: 0.5rem; align-items: center; justify-content: center; }
                    .nav-links a, .nav-links span { display: flex; align-items: center; justify-content: center; width: 2.5rem; height: 2.5rem; border-radius: 9999px; border: 1px solid rgba(255,255,255,0.1); color: white; transition: all 0.3s; }
                    .nav-links a:hover { background-color: rgba(255,255,255,0.05); border-color: rgba(212,174,111,0.4); color: #d4ae6f; }
                    .nav-links .current { background-color: #d4ae6f; border-color: #d4ae6f; color: #0e1e2e; font-weight: bold; }
                    .nav-links .dots { border: none; }
                </style>

            <?php else : ?>
                <div class="text-center py-20">
                    <p class="text-xl text-gray-400 font-light">Chưa có bài viết nào trong chuyên mục này.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
