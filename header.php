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
			// Google fonts (Archivo & Pontano Sans) are loaded below
		-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Pontano+Sans:wght@300..700&display=swap" rel="stylesheet">

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

		<!-- Swiper CSS CDN -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

		<?php wp_head(); ?>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body <?php body_class(); ?>>
<?php
$header_logo = get_field('header_logo', 'option');
?>
   <!-- BEGIN of header -->
    <header id="header"
        class="group/header fixed z-[1100]  w-full transform-gpu group-[.modal-open]/body:-translate-y-[--modal-wrapper-mobile-nav-modal-scroll-position] group-[.modal-open]/body:duration-0 [&.scroll-down]:-translate-y-[100%] [&.scroll-up]:translate-y-0 sm:[&.scroll-up]:-translate-y-[calc(100%-(100%-5rem))]">
        <div class="header-inner relative z-30 transform-gpu sm:group-[.scroll-up]/header:translate-y-[calc(5rem/2)] bg-dark py-4">
            <div class="container relative py-1 sm:py-2.5 max-sm:bg-orange">
                                <div class="w-full">
                    <div class="flex items-center justify-between mb-2 max-lg:gap-3">
                                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo max-w-[440px] flex-shrink-0 max-md:hidden">
                                <div class="">
                                
                                <img width="274" height="81" src="<?php echo esc_url($header_logo['url']); ?>" class="w-auto object-contain h-16 lg:h-24" alt="<?php echo esc_attr($header_logo['alt']); ?>" decoding="async" />              
                                                  </div>
                            </a>
                                                <div class="max-md:w-full">
                            <div class="flex sm:items-center md:gap-2.5 lg:gap-7 max-md:w-full justify-center sm:justify-between md:justify-end">
                                                                    <div
                                        class="max-sm:py-3 max-sm:pl-5 max-sm:pr-2 flex sm:items-center max-sm:bg-dark-blue text-white max-sm:hidden">
                                        <p class="font-sans uppercase text-[1rem] lg:text-[16px] leading-[3] font-black tracking-[0.3em]">
                                            24/7 Live Call Answering</p>
                                    </div>
                                                                            <div class="text-cta">
                                            <a class="text-[2.25rem] sm:text-[1.625rem] lg:text-[2.875rem] "
                                                href="tel:9542375101">
                                                (954)-237-5101                                            </a>
                                        </div>
                                                                                                </div>
                            <!-- .container -->
                            <div class="drilldown-menu-box group max-md:absolute left-0 top-[var(--header-height)] z-50 w-full max-md:pointer-events-none max-md:h-[calc(100dvh-var(--wp-admin--admin-bar--height,0px)-var(--header-height))] transition-transform duration-[600ms] border-t border-white/20 md:mt-1.5 pt-3.5">
                                <div id="mobile-menu"
                                    class=" group/deskop-menu w-full max-md:group-[.active]:translate-x-0 max-md:absolute max-md:h-full max-md:right-0 max-md:top-0 max-md:pointer-events-auto max-md:translate-x-full transition-transform duration-[600ms] max-sm:bg-blue">
                                    <div class="max-sm:h-full">
                                        <div class="menu-header-menu-container">
                                            <div class="menu-menu-1-container"><ul id="primary-menu" class="menu"><li id="menu-item-244" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-244"><a class="object-contain" href="https://alopezlawfidev.wpenginepowered.com/" aria-current="page">Home</a></li>
<li id="menu-item-263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-263"><a href="https://alopezlawfidev.wpenginepowered.com/why-hire-us/">Why Hire Us</a></li>
<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="https://alopezlawfidev.wpenginepowered.com/practice-areas/">Practice Areas</a></li>
<li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261"><a href="https://alopezlawfidev.wpenginepowered.com/blog/">Blog</a></li>
<li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="https://alopezlawfidev.wpenginepowered.com/contact/">Contact</a></li>
<li id="menu-item-259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-259"><a href="https://alopezlawfidev.wpenginepowered.com/pay-online/">Pay online</a></li>
<li id="menu-item-258" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-258"><a href="https://alopezlawfidev.wpenginepowered.com/se-habla-espanol/">SE HABLA ESPAÑOl</a></li>
</ul></div>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex justify-between px-side-offset md:hidden py-1 md:py-3.5 max-md:bg-blue">
                                    <a href="https://alopezlawfidev.wpenginepowered.com" class="logo flex-shrink-0 md:hidden">
                        <div class="">
                            <img width="274" height="81" src="https://alopezlawfidev.wpenginepowered.com/wp-content/uploads/2025/10/logo-h-white-1.svg" class="w-auto h-12 sm:h-20" alt="" decoding="async" />                        </div>
                    </a>
                                <button type="button"
                    class="group/nav-button relative inline-flex items-center justify-center rounded-md z-50 md:hidden"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-2"></span>
                    <span class="sr-only text-white">Menu</span>
                    <span
                        class="relative block w-7 h-6 sm:w-12 sm:h-7 [&>span]:transition-all [&>span]:duration-300 text-white group-hover/nav-button:text-white">
                        <span
                            class="absolute rounded-full top-0 block bg-current h-1 w-full group-[.active]/nav-button:rotate-45 group-[.active]/nav-button:mt-3"></span>
                        <span
                            class="absolute rounded-full top-1/2 block bg-current h-1 w-full -mt-0.5 group-[.active]/nav-button:opacity-0"></span>
                        <span
                            class="absolute rounded-full bottom-0 block bg-current h-1 w-full group-[.active]/nav-button:-rotate-45 group-[.active]/nav-button:mb-2 sm:group-[.active]/nav-button:mb-3"></span>
                    </span>
                </button>
            </div>

        </div>
    </header>

		

		<main id="content " class="o-main padding-admin">

			<?php 

				$default_hero = get_field('default_hero')?: 'yes';

				if ( $default_hero === 'yes' ): ?>

				<?php get_template_part('_inc/content', 'title'); ?>

			<?php endif; ?>

			