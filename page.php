<?php

/**
 * The main template file
 *
 */

get_header();
?>

<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <main id="site-content">
            <?php if (!is_front_page()) {
               get_template_part('_inc/page', 'hero'); 
            } ?>
 
            <?php if (!empty(get_the_content())) : ?>
                <div class="container lg:flex gap-16 lg:pt-24">
                    <div class="lg:w-2/3  max-lg:mb-10">
            		<?php get_template_part('_inc/content', 'image'); ?>

                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <?php if (is_active_sidebar('sidebar')) : ?>
                        <div class="lg:w-1/3">
                            <aside class="sidebar">
                                <?php dynamic_sidebar('sidebar'); ?>
                            </aside>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </main>
    <?php endwhile;
endif; ?>

<?php get_footer();
