<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<main id="primary" class="site-main pt-24 md:pt-32 pb-24 relative z-10 text-white min-h-screen">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        
        <!-- Hero Article Section -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <div class="max-w-[1200px] mx-auto px-4 md:px-8">
                
                <!-- Breadcrumb or Category -->
                <div class="mb-6 flex flex-wrap items-center gap-2 text-[#d4ae6f] text-xs md:text-sm font-bold uppercase tracking-wider" data-aos="fade-down">
                    <?php 
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );   
                    } else {
                        echo 'Tin tức';
                    }
                    ?>
                    <span class="text-white/50 font-normal">| <?php echo get_the_date('d m Y'); ?></span>
                </div>

                <!-- Title -->
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold playfair leading-tight mb-8" data-aos="fade-up">
                    <?php the_title(); ?>
                </h1>

                <!-- Thumbnail -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="relative w-full h-[400px] md:h-[600px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden mb-12 shadow-2xl group" data-aos="fade-up" data-aos-delay="200">
                        <?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000' ) ); ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0e1e2e] to-transparent opacity-60"></div>
                    </div>
                <?php endif; ?>

                <!-- Content Container -->
                <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 relative">
                    
                    <!-- Main Content -->
                    <div class="w-full lg:w-2/3" data-aos="fade-up" data-aos-delay="300">
                        <!-- Tailwind Typography wrapper for wp_content -->
                        <div class="prose prose-lg prose-invert prose-p:font-light prose-p:leading-relaxed prose-p:text-gray-300 prose-headings:playfair prose-headings:text-white prose-a:text-[#d4ae6f] prose-img:rounded-[1.5rem] prose-img:shadow-xl prose-img:w-full max-w-none">
                            <?php the_content(); ?>
                        </div>
                        
                        <!-- Tags -->
                        <?php 
                        $tags = get_the_tags();
                        if ($tags): 
                        ?>
                        <div class="mt-12 pt-8 border-t border-white/10 flex flex-wrap gap-3 items-center">
                            <span class="text-white/60 text-sm font-bold uppercase tracking-wider mr-2">Từ khoá:</span>
                            <?php foreach ($tags as $tag): ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="px-4 py-2 rounded-full bg-white/5 text-white/80 hover:bg-[#d4ae6f] hover:text-[#0e1e2e] text-sm font-medium transition-colors">
                                    #<?php echo $tag->name; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Sidebar / Related -->
                    <div class="w-full lg:w-1/3" data-aos="fade-left" data-aos-delay="400">
                        <div class="sticky top-32">
                            <!-- Author Box -->
                            <div class="bg-white/[0.02] border border-[#d4ae6f]/20 rounded-[2rem] p-6 md:p-8 mb-8 backdrop-blur-md">
                                <h3 class="text-xl font-bold playfair mb-6 text-white uppercase tracking-wider border-b border-white/10 pb-4">Tác giả</h3>
                                <div class="flex items-center gap-4">
                                    <div class="w-16 h-16 rounded-full overflow-hidden bg-white/10 border border-[#d4ae6f]/30">
                                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 64, '', '', array('class'=>'w-full h-full object-cover') ); ?>
                                    </div>
                                    <div>
                                        <p class="text-lg font-bold text-[#d4ae6f]"><?php echo get_the_author(); ?></p>
                                        <p class="text-xs text-white/60 mt-1 uppercase tracking-wider">Ban Biên Tập Fenica</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Posts -->
                            <div class="bg-white/[0.02] border border-[#d4ae6f]/20 rounded-[2rem] p-6 md:p-8 backdrop-blur-md">
                                <h3 class="text-xl font-bold playfair mb-6 text-white uppercase tracking-wider border-b border-white/10 pb-4">Bài viết liên quan</h3>
                                <div class="flex flex-col gap-6">
                                    <?php
                                    $related = new WP_Query( array(
                                        'category__in'   => wp_get_post_categories( $post->ID ),
                                        'posts_per_page' => 3,
                                        'post__not_in'   => array( $post->ID )
                                    ) );

                                    if( $related->have_posts() ) :
                                        while( $related->have_posts() ) : $related->the_post();
                                    ?>
                                        <a href="<?php the_permalink(); ?>" class="group flex gap-4 items-center">
                                            <div class="w-24 h-20 shrink-0 rounded-xl overflow-hidden relative">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500' ) ); ?>
                                                <?php else : ?>
                                                    <div class="w-full h-full bg-white/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                                        <svg class="w-6 h-6 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <h4 class="text-sm font-bold text-white group-hover:text-[#d4ae6f] transition-colors line-clamp-2 leading-snug"><?php the_title(); ?></h4>
                                                <p class="text-[10px] text-white/50 mt-2 uppercase tracking-wider"><?php echo get_the_date('d.m.Y'); ?></p>
                                            </div>
                                        </a>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else:
                                    ?>
                                        <p class="text-sm text-gray-400">Không có bài viết liên quan.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </article>

        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
