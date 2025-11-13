<?php 

    // the query
    $the_query = new WP_Query( array(
       'posts_per_page' => 5,
    )); 

if ( $the_query->have_posts() ) : ?>

    <div class="c-blog-recent u-block--white u-block-padding--lg c-background--relative">

        <div class="o-container">

            <div class="o-row">

                <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2 u-text--center">
						
					<?php

						$blog_subtitle = get_field('blog_subtitle', 'options');

						if ( $blog_subtitle ): ?>

							<p class="c-lead-secondary u-text--accent-3">
								<?php echo $blog_subtitle; ?>
							</p>

					<?php endif; ?>

					<?php

						$blog_title = get_field('blog_title', 'options');

						if ( $blog_title ): ?>

							<h2>
								<?php echo $blog_title; ?>
							</h2>

					<?php endif; ?>
					
                    <?php

						$blog_content = get_field('blog_content', 'options');

						if ( $blog_content ): ?>

							<?php echo $blog_content; ?>

					<?php endif; ?>

                </div>

            </div>

            <div class="o-row">

                <div class="o-col--xxs-12">

                    <div class="c-carousel">

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <div class="c-carousel__item">

                                <article class="c-blog__item">

                                    <?php get_template_part('_inc/sidebar', 'image'); ?>

                                    <div class="c-blog__excerpt">

                                        <h3 class="c-blog__title u-h5 u-text--accent-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        
                                        <?php the_excerpt() ?>

                                         <a href="<?php the_permalink(); ?>"
                                             title="Read Article: <?php the_title(); ?>" 
                                             class="c-btn--arrow u-text--accent-3">Learn More</a></p>

                                    </div>

                                </article>

                            </div>

                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>

                </div>

            </div>

        </div>

        <?php

        $blog_image = get_field('blog_image', 'options');

            if ( $blog_image ): ?>

                <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $blog_image; ?>"></div>

        <?php endif; ?>

    </div>

<?php else : ?>

  <p><?php __('No News'); ?></p>

<?php endif; ?>