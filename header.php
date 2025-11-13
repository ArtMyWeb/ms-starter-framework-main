<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/_dist/img/site-image.png" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />
		<meta property="og:image:alt" content="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>" />

		<!--
			// Enqueue Typekit fonts in functions.php file using wp_enqueue_script();
			// Enqueue Google fonts in functions.php file using wp_enqueue_style();
		-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=IBM+Plex+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">


		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/favicon-16x16.png">
		<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri() ); ?>/_dist/img/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body <?php body_class(); ?>>

	<a id="skip-content" href="#content" class="u-visibility--sr-only">Skip to main content</a>

		<header class="c-header u-block--sticky u-block--fixed-top">

			<?php 

		    $header_info_phone_mobile = get_field('header_phones', 'options');

		    if ( $header_info_phone_mobile ): 

		        $header_mobile_phone = $header_info_phone_mobile[0]['header_phone'];
		        $header_mobile_text = $header_info_phone_mobile[0]['header_text'];

		    ?>

				<a class="c-header__phone-mobile u-text--white u-text--bold u-text--uppercase" href="tel:<?php echo preg_replace('~[^\d]+~', '', $header_mobile_phone); ?>">
					<i class="fa-solid fa-phone u-text--accent-3" aria-hidden="true"></i>  <?php echo $header_mobile_text; ?> <?php echo $header_mobile_phone; ?>
				</a>

			<?php endif; ?>

			<div class="c-header__inner u-block-padding--sm">

				<div class="o-container">

					<div class="c-block--flex c-block--flex-between c-block--flex-v-center">

						<?php

							$header_logo = get_field('header_logo', 'options');

							if ( $header_logo ): ?>

							<a class="c-logo" href="<?php echo esc_url( home_url() ); ?>">
								<img class="u-reset--margin" 
									 src="<?php echo $header_logo['url']; ?>" alt="<?php echo esc_url( bloginfo('name') ); ?>"  width="<?php echo $header_logo['width']; ?>" height="<?php echo $header_logo['height']; ?>">
							</a>

						<?php endif; ?>

						<div class="c-header__cta u-visibility-hidden-xs--down">

							<?php 

						    $header_info_phone = get_field('header_phones', 'options');

						    if ( $header_info_phone ): 

						        $header_phone = $header_info_phone[0]['header_phone'];
						        $header_text = $header_info_phone[0]['header_text'];

						    ?>

								<a class="c-header__phone" href="tel:<?php echo preg_replace('~[^\d]+~', '', $header_phone); ?>">
									<i class="fa-solid fa-phone u-text--accent-3" aria-hidden="true"></i> <?php echo $header_text; ?> <?php echo $header_phone; ?>
								</a>

							<?php endif; ?>

							<?php 

							$header_link = get_field('header_link', 'options');

							if ( $header_link ): 

                                $link_target = $header_link['target'] ? $header_link['target'] : '_self';
                            ?>

                                <a class="c-btn c-btn--primary" target="<?php echo  $link_target; ?>" href="<?php echo $header_link['url']; ?>">
                                    <?php echo $header_link['title']; ?>
                                </a>

                            <?php endif; ?>

						</div>

						<button class="c-nav__icon c-nav__open js-toggle" aria-label="Open Menu">
							<i class="fas fa-bars c-nav__icon--open" aria-hidden="true"></i>
						</button>

					</div>

				</div>

			</div>

			<nav class="c-nav">

				<div class="o-container u-reset--padding">
					
					<button class="c-nav__icon c-nav__icon--padding js-toggle" aria-label="Close Menu">
						<i class="fas fa-times c-nav__icon--close" aria-hidden="true"></i>
					</button>

					<?php

						$header_logo = get_field('header_logo', 'options');

						if ( $header_logo ): ?>

						<a class="c-logo__nav u-visibility-hidden-sm--up" href="<?php echo esc_url( home_url() ); ?>">
							<img class="u-reset--margin" 
								 src="<?php echo $header_logo['url']; ?>" alt="<?php echo esc_url( bloginfo('name') ); ?>"  width="<?php echo $header_logo['width']; ?>" height="<?php echo $header_logo['height']; ?>">
						</a>

					<?php endif; ?>

					 <?php

						$headerConfig = array(
							'theme_location'  => 'main_nav',
							'menu'            => 'main_nav',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'c-nav__list',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul role="menu" id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => new wp_bootstrap_navwalker()
							);

						wp_nav_menu( $headerConfig );

					?>

					<div class="u-text--center u-visibility-hidden-sm--up u-block-padding--lg">

						<?php if ( get_field('header_phones', 'options') ): ?>

							<ul class="c-list--unstyled u-reset--margin">

								<?php while( has_sub_field('header_phones', 'options') ): 

									$header_nav_phone = get_sub_field('header_phone');
									$header_nav_text = get_sub_field('header_text');

								?>

									<li>

										<?php

										if ( $header_nav_phone ): ?>

											<a class="u-text--block u-text--white u-reset--link u-reset-font--tertiary u-text--uppercase u-text--medium" href="tel:<?php echo preg_replace('~[^\d]+~', '', $header_nav_phone); ?>">
												<span class="u-text--block u-text--uppercase u-reset-font--tertiary u-text--accent-2"><?php echo $header_nav_text; ?></span>
												<?php echo $header_nav_phone; ?>

											</a>

										<?php endif; ?>

									</li>

								<?php endwhile; ?>

							</ul>

						<?php endif; ?>

						<?php get_template_part('_inc/content', 'social'); ?>

					</div>
				
				</div>

			</nav>

			<div class="c-nav__mask js-toggle"></div>

		</header><!-- /.header -->

		<main id="content" class="o-main">

			<?php 

				$default_hero = get_field('default_hero')?: 'yes';

				if ( $default_hero === 'yes' ): ?>

				<?php get_template_part('_inc/content', 'title'); ?>

			<?php endif; ?>

			