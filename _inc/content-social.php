<?php if ( get_field('social', 'options') ): ?>

	<ul class="c-social__list c-list--unstyled">

	    <?php while( has_sub_field('social', 'options') ): 

	    	$social_icon = get_sub_field('social_icon');
	    	$social_title = get_sub_field('social_title');
	    	$social_link = get_sub_field('social_link');

	    ?>

	        <?php if ( $social_icon ): ?>
		        <li class="c-social__item">
		            <a class="c-social__link"
		               target="_blank"
		               rel="noopener"
		               title="<?php echo $social_title; ?>"
		               href="<?php echo $social_link; ?>">
		                	<i class="fab <?php echo $social_icon; ?>" aria-hidden="true"></i>
		                	<span class="u-visibility--sr-only"><?php echo $social_title; ?></span>
		            </a>
		        </li>
	        <?php endif; ?>

	    <?php endwhile; ?>

	</ul>

<?php endif; ?>
