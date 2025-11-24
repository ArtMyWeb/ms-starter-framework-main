<?php get_header(); ?>

<?php get_template_part('_inc/page', 'hero'); ?>

<div class="c-content u-block-padding--lg">

	<div class="container">

	    <div class="o-row">

	        <div class="o-col--xxs-12 o-col--md-8">

	            <div class="o-content">
	            	
            		<?php get_template_part('_inc/content', 'image'); ?>

	            	<?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
	            	
	            	<?php get_template_part('_inc/content', 'flexible'); ?>
	            	
	            </div>

	        </div>

	        <?php get_sidebar(); ?>

	    </div>

	</div>

</div>

<?php get_footer(); ?>


