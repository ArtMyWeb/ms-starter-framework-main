<div class="o-col--xxs-12 o-col--md-4">

	<aside class="c-sidebar">

		<!-- Checks if a specific sidebar has widgets -->
		<?php if ( is_active_sidebar('sidebar-blog') ) : ?>
			<div class="c-widgets">
				<?php dynamic_sidebar('sidebar-blog'); ?>
			</div>
		<?php endif; ?>

		<?php 

			$sidebar_contact_form = get_field('sidebar_contact_form', 'options');

			if ( $sidebar_contact_form): ?>

			<div class="c-sidebar__form u-block--accent-1">

				<?php 

					$sidebar_contact_title = get_field('sidebar_contact_title', 'options');

					if ( $sidebar_contact_title ): ?>

						<h3 class="u-h5 u-text--white u-text--bold u-text--center">
							<?php echo $sidebar_contact_title; ?>
						</h3>

				<?php endif; ?>

				<?php 

					$sidebar_contact_subtitle = get_field('sidebar_contact_subtitle', 'options');

					if ( $sidebar_contact_subtitle ): ?>

						<p class="u-text--white u-text--center">
							<?php echo $sidebar_contact_subtitle; ?>
						</p>

						<hr class="u-block-hr--accent-2">

					<?php endif; ?>

		        <?php echo $sidebar_contact_form; ?>
		            
		    </div>

	    <?php endif; ?>


        <?php get_template_part('_inc/content', 'cases'); ?>

	    <div class="c-sidebar__nav">

	        <?php 

				$sidebar_practice_areas_title = get_field('sidebar_practice_areas_title', 'options');

				if ( $sidebar_practice_areas_title ): ?>

	        		<h3 class="u-h5 u-text--bold">
	        			<?php echo $sidebar_practice_areas_title; ?>
	        		</h3>

			<?php endif; ?>

            <?php

                $sidebarConfig = array(
                    'theme_location'  => 'sidebar_nav',
                    'menu'            => 'sidebar_nav',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'c-sidebar__list c-list--unstyled',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul role="menu" id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                    );

                wp_nav_menu( $sidebarConfig );

            ?>

            <?php

                $sidebar_practice_areas_link = get_field('sidebar_practice_areas_link', 'options');

                if ( $sidebar_practice_areas_link ): ?>

                	<a class="c-btn c-btn--primary c-btn--block" href="<?php echo $sidebar_practice_areas_link['url']; ?>"><?php echo $sidebar_practice_areas_link['title']; ?></a>

            <?php endif; ?>

	    </div>

        <div class="c-sidebar__reviews">
			
			<?php

                $reviews_title = get_field('reviews_title', 'options');

                if ( $reviews_title ): ?>

                    <h3 class="u-h5 u-text--bold">
                        <?php echo $reviews_title; ?>
                    </h3>

            <?php endif; ?>

            <?php

                $reviews_subtitle = get_field('reviews_subtitle', 'options');

                if ( $reviews_subtitle ): ?>

                    <p class="c-lead">
                        <?php echo $reviews_subtitle; ?>
                    </p>

            <?php endif; ?>

			<?php if ( get_field('reviews', 'options') ): ?>

            	<div class="c-carousel__reviews-sidebar">

                    <?php while ( has_sub_field('reviews', 'options') ): 

                        $author = get_sub_field('reviews_author');
                        $quote  = get_sub_field('reviews_quote');
                        $image  = get_sub_field('reviews_image');

                    ?>

	                    <div class="c-carousel__item">

	                        <?php if ( $quote ): ?>
	                        
	                            <div class="c-carousel__reviews-sidebar__block">
	                                
	                                <blockquote class="c-carousel__reviews-sidebar__quote u-reset--blockquote">

	                                	<?php

							                if ( $image ): ?>

							                    <img class="c-sidebar__reviews-img"
													 src="<?php echo $image['url']; ?>"
													 alt="<?php echo $image['alt']; ?>"
													 width="<?php echo $image['width']; ?>"
													 height="<?php echo $image['height']; ?>">

							            <?php endif; ?>

	                                    <div class="c-sidebar__reviews__block">
	                                    	
	                                    	<?php if ( $quote ): ?>

		                                    	<p class="u-reset--margin">

		                                    		<?php echo $quote; ?>
		                                    		
		                                    		<?php if ( $author ): ?>

				                                        <cite class="c-sidebar__reviews-author"><?php echo $author; ?></cite>

				                                    <?php endif; ?>
		                                    	</p>

		                                    <?php endif; ?>

	                                    </div>

	                                </blockquote>

	                            </div>

	                        <?php endif; ?>

	                    </div>

                	<?php endwhile; ?>

                </div>

            <?php endif; ?>
			
			<?php

                $reviews_content = get_field('reviews_content', 'options');

                if ( $reviews_content ): ?>

                    <div class="c-reviews__content">
                        <?php echo $reviews_content; ?>
                    </div>

            <?php endif; ?>

			<?php 

			$reviews_link = get_field('reviews_link', 'options');

			if ( $reviews_link ): ?>

				<a href="<?php echo $reviews_link['url']; ?>" class="c-btn c-btn--primary c-btn--block">
                    <?php echo $reviews_link['title']; ?>
                </a>

            <?php endif; ?>
					
		</div>

		<div class="c-sidebar__cta">

            <?php 

            	$about_img = get_field('about_image', 'options');

            	if ( $about_img ): ?>

                <img class="u-reset--margin b-lazy"
                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                     data-original="<?php echo $about_img['url']; ?>"
                     alt="<?php echo $about_img['alt']; ?>"
                     width="<?php echo $about_img['width']; ?>"
                     height="<?php echo $about_img['height']; ?>">

            <?php endif; ?>

	    	<div class="c-sidebar__cta-content">	

				<?php

	                $about_title = get_field('about_title', 'options');

	                if ( $about_title ): ?>

	                    <h3 class="u-h5 u-text--white u-text--bold">
	                        <?php echo $about_title; ?>
	                    </h3>

	            <?php endif; ?>

	            <?php

	                $about_subtitle = get_field('about_subtitle', 'options');

	                if ( $about_subtitle ): ?>

	                    <p class="u-text--accent-2 u-text--letter-spacing u-text--medium u-text--uppercase u-reset-font--primary">
	                        <?php echo $about_subtitle; ?>
	                    </p>

	                    <hr class="u-block-hr--accent-2">

	            <?php endif; ?>

	            <?php 

	            	$about_content = get_field('about_content', 'options');

	            	if ( $about_content ): ?>

	                <div class="u-text--white"><?php echo $about_content; ?></div>

	            <?php endif; ?>

	            <?php

                    $about_address = get_field('info_address', 'options');

                    if ( $about_address ): ?>

                        <?php

                            $link_primary = get_field('link_primary', 'options');

                            if ( $link_primary ): ?>

                            <a class="u-text--white u-reset--link u-reset-font--tertiary u-text--uppercase u-text--medium" href="<?php echo $link_primary['url']; ?>" title="<?php echo $link_primary['title']; ?>" target="_blank">
                                <i class="fa-sharp fa-regular fa-location-dot u-text--accent-2" aria-hidden="true"></i>     
                                <span class="u-text--block"><?php echo $about_address; ?></span>
                            </a>

                        <?php endif; ?>

                <?php endif; ?>

                <?php if ( get_field('header_phones', 'options') ): ?>

                    <?php while( has_sub_field('header_phones', 'options') ): 

                        $about_phone = get_sub_field('header_phone');

                    ?>

                        <?php

                            if ( $about_phone ): ?>

                            <a class="u-text--white u-reset--link u-reset-font--tertiary u-text--uppercase u-text--medium" href="tel:<?php echo preg_replace('~[^\d]+~', '', $about_phone); ?>">

                                <i class="fa-sharp fa-regular fa-phone u-text--accent-2" aria-hidden="true"></i>

                                <span class="u-text--block"><?php echo $about_phone; ?></span>
                            </a>

                        <?php endif; ?>

                    <?php endwhile; ?>

                <?php endif; ?>

	            <?php 

				$about_link = get_field('about_link', 'options');

				if ( $about_link ): ?>
	                                
	                <div class="u-block-padding--sm u-reset--padding-bottom">
	                	
	                	<a class="c-btn c-btn--primary c-btn--block" href="<?php echo $about_link['url']; ?>"><?php echo $about_link['title']; ?></a>

	                </div>

	            <?php endif; ?>

            </div> 

		</div>

	</aside>

</div>