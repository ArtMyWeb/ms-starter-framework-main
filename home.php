<?php get_header(); ?>

<div class="c-blog u-block-padding--lg">
    
    <div class="o-container">

        <div class="o-row">

            <div class="o-col--xxs-12 o-col--md-12">
                    
                <?php if ( have_posts() ) :?>

                    <div class="c-blog__items">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <article class="c-blog__item">

                                <?php get_template_part('_inc/sidebar', 'image'); ?>

                                <div class="c-blog__excerpt">

                                    <h2 class="c-blog__title u-h5 u-text--accent-3">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>

                                    <hr class="u-block-hr--narrow u-block-hr--narrow-left">

                                    <?php the_excerpt() ?>

                                    <a href="<?php the_permalink(); ?>"
                                     title="Read Article: <?php the_title(); ?>" 
                                     class="c-btn--arrow">Learn More</a>

                                </div>

                            </article>

                        <?php endwhile; ?>

                    </div>

                    <?php get_template_part('_inc/pager'); ?>

                <?php endif; ?>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>


