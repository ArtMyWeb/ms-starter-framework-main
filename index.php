<?php get_header(); ?>

<div class="c-blog u-block-padding--lg">
    
    <div class="o-container">

        <div class="o-row">

            <div class="o-col--xxs-12 o-col--md-8">

                <div class="o-content">
                    
                    <?php if ( have_posts() ) :?>

                        <div class="c-blog__items">

                            <?php while ( have_posts() ) : the_post(); ?>

                                <article class="c-blog__item <?php echo is_sticky() ? 'c-blog__item--full' : ''; ?>">

                                    <?php if ( first_image_as_featured() ) : ?>

                                        <div class="c-blog__featured">
                                            <img src="<?php echo first_image_as_featured(); ?>" alt="<?php the_title(); ?>" width="300" height="200">
                                        </div>

                                    <?php endif; ?>

                                    <div class="c-blog__excerpt">

                                        <h2 class="c-blog__title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>

                                        <?php the_excerpt() ?>

                                        <a href="<?php the_permalink(); ?>"
                                         title="Read Article: <?php the_title(); ?>" 
                                         class="c-btn c-btn--primary">Read More</a>

                                    </div>

                                </article>

                            <?php endwhile; ?>

                        </div>

                        <?php get_template_part('_inc/pager'); ?>

                    <?php endif; ?>

                </div>

            </div>

            <?php get_sidebar('blog'); ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>
