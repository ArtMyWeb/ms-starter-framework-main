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

<div class="c-hero-subpage u-block--accent-1 u-block-padding--xl c-background--relative">

    <div class="o-container">

        <div class="o-row">

            <div class="o-col--xxs-12 o-col--sm-7">

                <div class="c-hero-subpage__content">
                    
                    <div class="c-block--flex c-block--flex-nowrap u-block-padding--xs c-block--flex-v-center">
                            
                        <?php 

                            $header_platform = get_field('header_platform', 'options');

                            if ( $header_platform ): ?>

                            <img class="u-img--quarter u-reset--margin"
                                 src="<?php echo $header_platform['url']; ?>"
                                 alt="<?php echo $header_platform['alt']; ?>"
                                 width="<?php echo $header_platform['width']; ?>"
                                 height="<?php echo $header_platform['height']; ?>">

                        <?php endif; ?>

                        <?php 

                            $header_rating = get_field('header_rating', 'options');

                            if ( $header_rating ): ?>

                            <div class="c-hero-subpage__rating">
                                 
                                <div class="u-text--accent-3">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>

                                <p class="u-reset--margin u-text--white u-reset-font--primary u-text--bold u-text--uppercase"><?php echo $header_rating; ?></p>

                            </div>

                        <?php endif; ?>

                    </div>

                    <?php

                        $info_location = get_field('info_location', 'options');

                        if ( $info_location ): ?>

                        <p class="c-lead-secondary u-text--accent-3">
                            
                            <?php echo $info_location; ?>

                        </p>

                    <?php endif; ?>
                        
                    <h1 class="c-hero__title u-h2 u-text--white"><?php page_title(); ?></h1>

                    <?php 

                        $blurb = get_field('blurb');

                        if ( $blurb ): ?>

                        <p class="u-text--white"><?php echo $blurb; ?></p>

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
                
            </div>  

        </div>

    </div>

    <div class="c-background c-background--base c-background--position-right c-background--cover b-lazy" data-original="<?php echo $image; ?>"></div>

</div>