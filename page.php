<?php
/**
 * The main template file
 */

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();

        // Hero section for non-front pages
        if (!is_front_page()) {
            get_template_part('_inc/page', 'hero');
        }
        ?>

        <main id="site-content">
            <?php
            $has_sidebar = is_active_sidebar('sidebar');
            $container_class = $has_sidebar
                ? 'container lg:grid lg:grid-cols-[2fr_1fr] gap-16 lg:pt-24'
                : 'container lg:flex gap-16 lg:pt-24';
            ?>

            <div class="<?php echo esc_attr($container_class); ?>">

                <?php
                // Flexible content for non-front pages
                if (!is_front_page()) {
                    get_template_part('_inc/content', 'flexible');
                }

                // Page content section
                if (!empty(get_the_content())) : ?>
                    <div class="bio-content max-lg:mb-10">

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-featured-image mb-8">
                                <?php the_post_thumbnail('full', ['class' => 'w-full h-auto object-cover']); ?>
                            </div>
                        <?php endif; ?>

                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($has_sidebar) : ?>
                    <div class="sidebar-container">
                        <aside class="sidebar">
                            <?php dynamic_sidebar('sidebar'); ?>
                        </aside>
                    </div>
                <?php endif; ?>

            </div>
        </main>

    <?php
    endwhile;
endif;

get_footer();
