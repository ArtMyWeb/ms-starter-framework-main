<?php
get_header();

get_template_part( '_inc/page','hero'  );
?>


    <section class="">
        <div class="container">
            <div class="blog-grid grid grid-cols-1 col-3 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 50,
                    'post_status' => 'publish'
                );

                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                        $post_id = get_the_ID();
                        $post_title = get_the_title();
                        $post_excerpt = get_the_excerpt();
                        $post_permalink = get_the_permalink();
                        $post_thumbnail = get_the_post_thumbnail_url($post_id, 'large');
                        ?>
                        <article class="blog-item group h-full overflow-hidden">
                            <div class="relative">
                                <div class="blog-img h-full max-h-[475px]">
                                    <?php if ($post_thumbnail): ?>
                                        <img class="w-full h-auto object-cover" src="<?php echo esc_url($post_thumbnail); ?>" alt="<?php echo esc_attr($post_title); ?>">
                                    <?php else: ?>
                                        <img class="w-full h-auto object-cover" src="/wp-content/uploads/2025/11/Bg.png" alt="<?php echo esc_attr($post_title); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="blog-content flex flex-col text-white z-10 vertical-border bg-light-dark/90 p-5 !absolute bottom-0 left-0 w-full">
                                    <h3 class="text-[1.375rem]/[1.2] font-archivo font-semibold pb-2">
                                        <a href="<?php echo esc_url($post_permalink); ?>" class="hover:text-light-gold transition-colors">
                                            <?php echo esc_html($post_title); ?>
                                        </a>
                                    </h3>
                                    <div class="blog-excerpt">
                                        <div class="">
                                            <div class="">
                                                <p><?php echo esc_html($post_excerpt); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo esc_url($post_permalink); ?>"
                                        class="text-light-gold text-[1rem]/[1.2] font-archivo font-medium underline underline-offset-5 hover:text-white transition-colors">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Fallback content if no posts found
                    ?>
                    <div class="col-span-full text-center py-10">
                        <p class="text-gray-600">No blog posts found.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>