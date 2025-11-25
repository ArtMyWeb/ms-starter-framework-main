<?php
// Dispatcher for ACF flexible content field 'home'.
if ( function_exists('have_rows') && have_rows('home') ) :
    while ( have_rows('home') ) : the_row();
        $layout = get_row_layout();
        $partials = [
            'home_hero'            => 'home-hero',
            'home_text_media'      => 'home-text-media',
            'home_honors'          => 'home-honors',
            'home_why_hire'        => 'home-why-hire',
            'home_practice_blog'   => 'home-practice-blog',
            'home_video'           => 'home-video',
            'home_service_areas'   => 'home-service-areas',
            'home_attorneys'       => 'home-attorneys',
            'home_cta'             => 'home-cta',
            'home_faq'             => 'home-faq',
            'home_two_col'         => 'home-two-col',
            'home_blog_grid'       => 'home-blog-grid',
            'home_trustindex'      => 'home-trustindex',
        ];
        if ( isset( $partials[ $layout ] ) ) {
            $file = get_template_directory() . '/_inc/flex/' . $partials[ $layout ] . '.php';
            if ( file_exists( $file ) ) {
                include $file;
            }
        }
    endwhile;
endif;
