<?php 

    $default_img = get_template_directory_uri() . '/_dist/img/img-hero-subpage.jpg';

    if ( is_page() || is_singular('staff') || is_singular('video')  ) {

        if ( has_post_thumbnail( $post->ID ) ) {

            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
            $image = $image[0];

        } else {

            $image = $default_img;

        }

    } elseif ( is_search() || is_404() || is_home() || is_category() || is_singular('post') ) {

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_option('page_for_posts') ), 'full' ); 

        if ( $image ) {

            $image = $image[0];

        }  else {

            $image = $default_img;

        }

    } ?>

