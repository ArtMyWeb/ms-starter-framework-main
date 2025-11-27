<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
 
		<!--
			// Google fonts (Archivo & Pontano Sans) are loaded below
		-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Figtree:wght@600&family=Pontano+Sans:wght@300..700&family=Work+Sans:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/bsz4csh.css">

 
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
$header_phone = get_field('header_phone', 'option');
?>
   <!-- BEGIN of header -->
    <header id="header"
        class="group/header fixed z-[1100]  w-full transform-gpu group-[.modal-open]/body:-translate-y-[--modal-wrapper-mobile-nav-modal-scroll-position] group-[.modal-open]/body:duration-0 [&.scroll-down]:-translate-y-[100%] [&.scroll-up]:translate-y-0 sm:[&.scroll-up]:-translate-y-[calc(100%-(100%-5rem))] bg-dark">
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
                                            <a class=" text-[1.25rem] lg:text-[2.875rem] "
                                                href="tel:<?php echo esc_attr($header_phone); ?>">
                                                <?php echo esc_html($header_phone); ?>                                            </a>
                                        </div>
                                                                                                </div>
                            <!-- .container -->
                            <div class="drilldown-menu-box group max-md:absolute left-0 top-[var(--header-height)] z-50 w-full max-md:pointer-events-none max-md:h-[calc(100dvh-var(--wp-admin--admin-bar--height,0px)-var(--header-height))] transition-transform duration-[600ms]  md:mt-1.5 pt-3.5">
                                <div id="mobile-menu"
                                    class=" group/deskop-menu w-full max-md:group-[.active]:translate-x-0 max-md:absolute max-md:h-full max-md:right-0 max-md:top-0 max-md:pointer-events-auto max-md:translate-x-full transition-transform duration-[600ms] max-md:bg-dark">
                                    <div class="max-sm:h-full">
                                        <div class="menu-header-menu-container">
                                            <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'header-menu',
                                                    'menu_id' => 'primary-menu',
                                                )
                                            ); ?>                                     
 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex justify-between px-[10px] md:hidden py-1 md:py-3.5 max-md:bg-blue container  ">
                                    <a href="https://alopezlawfidev.wpenginepowered.com" class="logo flex-shrink-0 md:hidden">
                        <div class="">
                            <img width="274" height="81" src="/wp-content/uploads/2025/11/Layer_1.svg" class="w-auto h-12 sm:h-20" alt="" decoding="async" />                        </div>
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

			