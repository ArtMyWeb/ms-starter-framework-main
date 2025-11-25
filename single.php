<?php
get_header();
?>
<?php 
       get_template_part('_inc/page', 'hero'); 
?>
    <section class="bio-section">
        <div class="container lg:grid lg:grid-cols-[2fr_1fr] gap-16 lg:pt-24">
            <div class="content max-lg:mb-10">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                    <!-- featured image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="featured-image mb-6">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                            <?php the_content(); ?>
                <?php endwhile;
                endif; ?>
            </div>
            <div class="sidebar-container">
                <!-- Sidebar/content will go here -->

                <div class="sidebar">
                    <?php if (is_active_sidebar('sidebar')) : ?>
                                <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        </div>
    </section>

<?php
get_footer();
?>