<?php get_header(); ?>

<div class="c-content u-block-padding--lg">

    <div class="o-container">

        <div class="o-row">

            <div class="o-col--xxs-12 o-col--md-8">

               <div class="o-content">
                   
                    <?php if ( have_posts() ) :?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <article>

                                <?php get_template_part('_inc/content', 'image'); ?>

                                <?php the_content(); ?>

                            </article>

                        <?php endwhile; ?>

                        <?php single_pager_nav(); ?>

                    <?php endif; ?>
                
               </div>

            </div>

           <?php get_sidebar('blog'); ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>


