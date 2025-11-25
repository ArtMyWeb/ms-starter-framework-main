<?php

    // check if the flexible home field has rows of data
    if( have_rows('home') ):

        // loop through the rows of data
        while ( have_rows('home') ) : the_row();

            if( get_row_layout() == 'block_1_hero' ): 

                $block_1_title    = get_sub_field('block_1_hero_title');
                $block_1_subtitle = get_sub_field('block_1_hero_subtitle');
                $block_1_text     = get_sub_field('block_1_hero_text');
                $block_1_bg       = get_sub_field('block_1_hero_background');
                $block_1_bg_mobile       = get_sub_field('block_1_hero_background_mobile');
                $block_1_img      = get_sub_field('block_1_hero_image');
                $block_1_link     = get_sub_field('block_1_hero_link');
                $block_1_link_secondary     = get_sub_field('block_1_hero_link_secondary');

            ?>

            <!-- Section -->

            <div class="c-hero u-block--black c-background--relative">

                <?php if ( $block_1_bg_mobile ): ?>

                    <div class="c-background c-background--base u-visibility-hidden-md--up c-background--position-top c-background--cover b-lazy" data-original="<?php echo $block_1_bg_mobile; ?>"></div>

                <?php endif; ?>

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-7">

                            <div class="c-hero__content">

                                <div class="c-block--flex c-block--flex-nowrap c-block--flex-v-center u-block-padding--xs">
                                            
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
                                
                                <?php if ( $block_1_subtitle ): ?>

                                    <h1 class="c-lead-secondary u-text--accent-3">
                                        <?php echo $block_1_subtitle; ?>
                                    </h1>

                                <?php endif; ?>

                                <?php if ( $block_1_title ): ?>

                                    <h2 class="c-hero__title u-h1 u-text--white">
                                        <?php echo $block_1_title; ?>
                                    </h2>

                                <?php endif; ?>

                                <?php if ( $block_1_text ): ?>

                                    <div class="u-text--white">
                                        <?php echo $block_1_text; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ( $block_1_link ): ?>
                                
                                    <a href="<?php echo $block_1_link['url']; ?>" class="c-btn c-btn--primary">
                                        <?php echo $block_1_link['title']; ?>
                                    </a>

                                <?php endif; ?>

                                <?php if ( $block_1_link_secondary ): ?>
                                
                                    <a href="<?php echo $block_1_link_secondary['url']; ?>" class="c-btn c-btn--primary">
                                        <?php echo $block_1_link_secondary['title']; ?>
                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

                <?php if ( $block_1_bg ): ?>

                    <div class="c-background c-background--base u-visibility-hidden-sm--down c-background--position-right c-background--cover b-lazy" data-original="<?php echo $block_1_bg; ?>"></div>

                <?php endif; ?>

            </div>

            <?php elseif( get_row_layout() == 'block_2_cta_primary' ): 

                $block_2_title    = get_sub_field('block_2_cta_primary_title');
                $block_2_subtitle = get_sub_field('block_2_cta_primary_subtitle');
                $block_2_content  = get_sub_field('block_2_cta_primary_content'); 
                $block_2_bg       = get_sub_field('block_2_cta_primary_background'); 
                $block_2_main_link     = get_sub_field('block_2_cta_primary_link');

            ?>

            <!-- Section -->

            <div class="c-cta-primary u-block--white u-block-padding--lg">

                <div class="container">
                        
                    <div class="o-row">
                        
                        <div class="o-col--xxs-12 o-col--md-12">

                            <div class="u-text--center u-block-padding--md u-reset--padding-top">
                                
                                <?php if ( $block_2_subtitle ): ?>

                                    <p class="c-lead-secondary u-text--accent-3">
                                        <?php echo $block_2_subtitle; ?>
                                    </p>

                                <?php endif; ?>

                                <?php if ( $block_2_title ): ?>

                                    <h2>
                                        <?php echo $block_2_title; ?>
                                    </h2>

                                <?php endif; ?>

                                <?php if( $block_2_content ): ?>

                                    <div class="c-cta-primary__content">

                                        <?php echo $block_2_content; ?>

                                    </div>
                                
                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                    <div class="o-row align-items-center-md">

                        <div class="o-col--xxs-12 o-col--md-6">

                            <?php if ( $block_2_bg ): ?>

                                <img class="b-lazy"
                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                     data-original="<?php echo $block_2_bg['url']; ?>"
                                     alt="<?php echo $block_2_bg['alt']; ?>"
                                     width="<?php echo $block_2_bg['width']; ?>"
                                     height="<?php echo $block_2_bg['height']; ?>">

                            <?php endif; ?>

                        </div>
                        
                        <div class="o-col--xxs-12 o-col--md-6">

                            <?php if( get_sub_field('block_2_cta_primary_blocks') ): ?>

                                <div class="c-cta-primary__list">

                                    <?php while( has_sub_field('block_2_cta_primary_blocks') ): 

                                        $block_2_title    = get_sub_field('block_2_cta_primary_title');
                                        $block_2_position    = get_sub_field('block_2_cta_primary_position');
                                        $block_2_content = get_sub_field('block_2_cta_primary_content');
                                        $block_2_image = get_sub_field('block_2_cta_primary_image');
                                        $block_2_link = get_sub_field('block_2_cta_primary_link');

                                    ?>

                                        <div class="c-cta-primary__item">

                                            <?php if ( $block_2_link ): ?>
                        
                                                <a href="<?php echo $block_2_link['url']; ?>" title="<?php echo $block_2_link['title']; ?>" class="c-cta-primary__link">
                                            <?php endif; ?>

                                            <?php if ( $block_2_image ): ?>

                                                <img class="c-cta-primary__img u-reset--margin b-lazy"
                                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                     data-original="<?php echo $block_2_image['url']; ?>"
                                                     alt="<?php echo $block_2_image['alt']; ?>"
                                                     width="<?php echo $block_2_image['width']; ?>"
                                                     height="<?php echo $block_2_image['height']; ?>">

                                            <?php endif; ?>

                                            <div class="c-cta-primary__description">
                                                
                                                <?php if ( $block_2_title ): ?>

                                                    <h3 class="u-h5">
                                                        <?php echo $block_2_title; ?>

                                                        <?php if ( $block_2_position ): ?>

                                                            <span class="u-text--sm u-text--block">
                                                                <?php echo $block_2_position; ?>
                                                            </span>

                                                        <?php endif; ?>

                                                    </h3>

                                                <?php endif; ?>

                                                <hr class="u-block-hr--accent-2">

                                                <?php if ( $block_2_link ): ?>

                                                    <p class="c-btn--text">
                                                        <?php echo $block_2_link['title']; ?>
                                                    </p>

                                                <?php endif; ?>

                                                <?php if ( $block_2_content ): ?>

                                                    <div class="u-text--truncate">
                                                        <?php echo $block_2_content; ?>
                                                    </div>

                                                <?php endif; ?>

                                            </div>

                                            <?php if ( $block_2_link ): ?>

                                                </a>

                                            <?php endif; ?>

                                        </div>

                                    <?php endwhile; ?>
                                
                                </div>
                                
                            <?php endif; ?>
                            
                        </div>

                    </div>

                    <div class="u-text--center u-block-padding--md u-reset--padding-bottom">
                        
                        <?php if ( $block_2_main_link ): ?>
                            
                            <a href="<?php echo $block_2_main_link['url']; ?>" class="c-btn c-btn--primary">
                                <?php echo $block_2_main_link['title']; ?>
                            </a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <?php elseif( get_row_layout() == 'block_3_awards' ): 

                $block_3_title = get_sub_field('block_3_awards_title');

            ?>

            <!-- Section -->

            <div class="c-awards u-block-padding--md u-block--white c-background--relative">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-12">

                            <?php if ( $block_3_title ): ?>

                                <h2 class="u-text--line u-text--accent-3 u-reset-font--secondary u-text--regular">
                                    <?php echo $block_3_title; ?>
                                </h2>

                            <?php endif; ?>

                            <?php if( get_sub_field('block_3_awards_blocks') ): ?>

                                <div class="c-carousel__awards">

                                    <?php while( has_sub_field('block_3_awards_blocks') ): 

                                        $block_3_img  = get_sub_field('block_3_awards_image');
                                        $block_3_link = get_sub_field('block_3_awards_link');

                                    ?>

                                    <div class="c-awards__img">
                                        
                                        <?php if ( $block_3_img ): ?>

                                            <?php if ( $block_3_link ): ?>

                                                <a href="<?php echo $block_3_link['url']; ?>">

                                            <?php endif; ?>

                                            <img class="u-reset--margin"
                                                 data-lazy="<?php echo $block_3_img['url']; ?>"
                                                 alt="<?php echo $block_3_img['alt']; ?>"
                                                 width="<?php echo $block_3_img['width']; ?>"
                                                 height="<?php echo $block_3_img['height']; ?>">

                                            <?php if ( $block_3_link ): ?>

                                                </a>

                                            <?php endif; ?>

                                        <?php endif; ?>

                                    </div>

                                    <?php endwhile; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

            <?php elseif( get_row_layout() == 'block_4_info' ): 

                $block_4_title    = get_sub_field('block_4_info_title');
                $block_4_subtitle = get_sub_field('block_4_info_subtitle');
                $block_4_content  = get_sub_field('block_4_info_content');
                $block_4_additional_content  = get_sub_field('block_4_info_additional_content');
                $block_4_img      = get_sub_field('block_4_info_image');
                $block_4_link     = get_sub_field('block_4_info_link');
                $block_4_button   = get_sub_field('block_4_info_button');
                $block_4_bg   = get_sub_field('block_4_info_background');

            ?>

            <!-- Section -->

            <div class="c-info u-block-padding--xl u-block--white c-background--relative">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12">

                            <div class="u-block-padding--md u-reset--padding-top u-text--center">
                                
                                <?php if ( $block_4_subtitle ): ?>
                        
                                    <p class="u-text--line u-text--sm">
                                        <?php echo $block_4_subtitle; ?>
                                    </p>

                                <?php endif; ?>

                                <?php if ( $block_4_title ): ?>
                            
                                    <h2>
                                        <?php echo $block_4_title; ?>
                                    </h2>

                                <?php endif; ?>

                            </div>

                        </div>

                        <div class="o-col--xxs-12 o-col--xs-6 o-col--md-6">

                            <div class="c-info__content">

                                <?php if ( $block_4_content ): ?>

                                    <?php echo $block_4_content; ?>

                                <?php endif; ?>

                            </div>

                        </div>

                        <div class="o-col--xxs-12 o-col--xs-6 o-col--md-6">

                            <?php if ( $block_4_img ): ?>
                        
                                <div class="c-info__block">

                                    <?php if ( $block_4_link ): ?>

                                        <a class="c-info__link" data-fancybox href="<?php echo $block_4_link['url']; ?>" title="<?php echo $block_4_link['title']; ?>">

                                    <?php endif; ?>

                                        <img class="u-img--full b-lazy"
                                             src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                             data-original="<?php echo $block_4_img['url']; ?>"
                                             alt="<?php echo $block_4_img['alt']; ?>"
                                             width="<?php echo $block_4_img['width']; ?>"
                                             height="<?php echo $block_4_img['height']; ?>">

                                    <?php if ( $block_4_link ): ?>
                                        
                                        <span class="c-info__icon"><i class="fa fa-play" aria-hidden="true"></i></span>

                                        </a>

                                    <?php endif; ?>

                                </div>
                            
                            <?php endif; ?>

                            <?php if ( $block_4_additional_content ): ?>

                                <?php echo $block_4_additional_content; ?>

                            <?php endif; ?>

                        </div>

                        <div class="o-col--xxs-12">
                            
                            <?php if ( $block_4_button ): ?>

                                <div class="u-text--center u-block-padding--md u-reset--padding-bottom">

                                    <a href="<?php echo $block_4_button['url']; ?>" class="c-btn c-btn--primary">
                                        <?php echo $block_4_button['title']; ?>
                                    </a>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <?php if ( $block_4_bg ): ?>

                    <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_4_bg; ?>"></div>

                <?php endif; ?>

            </div>

            <?php elseif( get_row_layout() == 'block_5_cta_secondary' ): 

                $block_5_title    = get_sub_field('block_5_cta_secondary_title');
                $block_5_subtitle = get_sub_field('block_5_cta_secondary_subtitle');
                $block_5_content  = get_sub_field('block_5_cta_secondary_content');
                $block_5_bg       = get_sub_field('block_5_cta_secondary_background');

            ?>

            <!-- Section -->

            <div class="c-cta-secondary u-block-padding--lg u-block--white">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                            <div class="u-text--center u-block-padding--md u-reset--padding-top">

                                <?php if ( $block_5_subtitle ): ?>

                                    <p class="c-lead-secondary u-text--accent-3">
                                        <?php echo $block_5_subtitle; ?>
                                    </p>

                                <?php endif; ?>

                                <?php if ( $block_5_title ): ?>
                                
                                    <h2>
                                        <?php echo $block_5_title; ?>
                                    </h2>

                                <?php endif; ?>

                                <?php if ( $block_5_content ): ?>

                                    <div class="c-cta-secondary__content">

                                        <?php echo $block_5_content; ?>

                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                    <div class="o-row align-items-center-md">

                        <div class="o-col--xxs-12 o-col--md-5">

                            <?php if ( $block_5_bg ): ?>

                                <img class="b-lazy"
                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                     data-original="<?php echo $block_5_bg['url']; ?>"
                                     alt="<?php echo $block_5_bg['alt']; ?>"
                                     width="<?php echo $block_5_bg['width']; ?>"
                                     height="<?php echo $block_5_bg['height']; ?>">

                            <?php endif; ?>

                        </div>

                        <div class="o-col--xxs-12 o-col--md-7">
                    
                            <?php if( get_sub_field('block_5_cta_secondary_blocks') ): ?>

                                <ul class="c-accordion c-list--unstyled" role="tablist" aria-multiselectable="true">

                                    <?php while( has_sub_field('block_5_cta_secondary_blocks') ): 

                                        $block_5_content = get_sub_field('block_5_cta_secondary_content');
                                        $block_5_title   = get_sub_field('block_5_cta_secondary_title');

                                    ?>

                                        <li class="c-accordion__panel">

                                            <?php if ( $block_5_content ): ?>

                                                <?php if ( $block_5_title ): ?>
                                            
                                                    <button class="c-accordion__title"><?php echo $block_5_title; ?></button>

                                                <?php endif; ?>

                                                <div class="c-accordion__content" role="tabpanel">

                                                    <div class="c-cta-secondary--border">
                                                        
                                                        <?php echo $block_5_content; ?>

                                                    </div>

                                                </div>

                                            <?php endif; ?>

                                        </li>

                                    <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        <?php elseif( get_row_layout() == 'block_6_reviews' ): 

            $block_6_title    = get_sub_field('block_6_reviews_title');
            $block_6_subtitle = get_sub_field('block_6_reviews_subtitle');
            $block_6_bg       = get_sub_field('block_6_reviews_background');
            $block_6_main_link     = get_sub_field('block_6_reviews_link');

        ?>

        <!-- Section -->

        <div class="c-reviews u-block--white u-block-padding--xl o-content--hidden c-background--relative">

            <div class="container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-12">

                        <div class="u-block-padding--md u-reset--padding-top u-text--center">
                            
                            <?php if ( $block_6_subtitle ): ?>
                            
                                <p class="u-text--line u-text--sm u-text--accent-3">
                                    <?php echo $block_6_subtitle; ?>
                                </p>

                            <?php endif; ?>

                            <?php if ( $block_6_title ): ?>
                        
                                <h2 class="u-text--accent-3 u-text--uppercase">
                                    <?php echo $block_6_title; ?>
                                </h2>

                            <?php endif; ?>

                        </div>

                        <?php if( get_sub_field('block_6_reviews_blocks') ): ?>

                            <div class="c-carousel">

                                <?php while( has_sub_field('block_6_reviews_blocks') ): 

                                    $block_6_image = get_sub_field('block_6_reviews_image');
                                    $block_6_description    = get_sub_field('block_6_reviews_description');
                                    $block_6_link   = get_sub_field('block_6_reviews_link');

                                ?>

                                <div class="c-carousel__item">

                                    <div class="c-reviews__block">

                                        <?php if ( $block_6_link  ): ?>

                                            <a class="c-reviews__link" href="<?php echo $block_6_link['url']; ?>" title="<?php echo $block_6_link['title']; ?>">

                                        <?php endif; ?>

                                            <?php if ( $block_6_image ): ?>

                                                <img class="u-reset--margin"
                                                     data-lazy="<?php echo $block_6_image['url']; ?>"
                                                     alt="<?php echo $block_6_image['alt']; ?>"
                                                     width="<?php echo $block_6_image['width']; ?>"
                                                     height="<?php echo $block_6_image['height']; ?>">

                                            <?php endif; ?>
                                            
                                            <div class="c-reviews__description u-text--white">

                                                <?php if ( $block_6_description ): ?>

                                                    <?php echo $block_6_description; ?>

                                                <?php endif; ?>


                                            </div>

                                        <?php if ( $block_6_link  ): ?>

                                            </a>

                                        <?php endif; ?>

                                    </div>

                                </div>

                                <?php endwhile; ?>

                            </div>

                        <?php endif; ?>

                        <?php if ( $block_6_main_link ): ?>
                            
                            <div class="u-text--center u-block-padding--md u-reset--padding-bottom">
                                
                                <a href="<?php echo $block_6_main_link['url']; ?>" class="c-btn c-btn--primary">
                                    <?php echo $block_6_main_link['title']; ?>
                                </a>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <?php if ( $block_6_bg ): ?>

                <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_6_bg; ?>"></div>

            <?php endif; ?>

        </div>

        <?php elseif( get_row_layout() == 'block_7_featured_review' ): 

            $block_7_image         = get_sub_field('block_7_featured_review_image');
            $block_7_title       = get_sub_field('block_7_featured_review_title');
            $block_7_subtitle    = get_sub_field('block_7_featured_review_subtitle');
            $block_7_content     = get_sub_field('block_7_featured_review_content');
            $block_7_link     = get_sub_field('block_7_featured_review_link');
            $block_7_show_info = get_sub_field('block_7_featured_review_show_info');
            $block_7_bg = get_sub_field('block_7_featured_review_background');

        ?>

        <!-- Section -->

        <div class="c-featured-content u-block--accent-1 u-block--black u-block-padding--xl c-background--relative">

            <div class="container">

                <div class="o-row align-items-center-md">

                    <div class="o-col--xxs-12 o-col--md-6">

                        <?php if ( $block_7_image ): ?>

                            <img class="c-featured-content__img b-lazy"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-original="<?php echo $block_7_image['url']; ?>"
                                 alt="<?php echo $block_7_image['alt']; ?>"
                                 width="<?php echo $block_7_image['width']; ?>"
                                 height="<?php echo $block_7_image['height']; ?>">

                        <?php endif; ?>

                    </div>

                    <div class="o-col--xxs-12 o-col--md-6">

                        <?php if ( $block_7_subtitle ): ?>

                            <p class="c-lead-secondary u-text--accent-3"><?php echo $block_7_subtitle; ?></p>

                        <?php endif; ?>

                        <div class="c-featured-content__block">

                            <?php if ( $block_7_title ): ?>

                                <h2 class="u-text--white"><?php echo $block_7_title; ?></h2>

                            <?php endif; ?>

                            <?php if ( $block_7_content ): ?>

                                <div class="c-featured-content__text u-text--white">

                                    <?php echo $block_7_content; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                        <?php if ( $block_7_link ): ?>
                                
                            <a href="<?php echo $block_7_link['url']; ?>" class="c-btn c-btn--primary">
                                <?php echo $block_7_link['title']; ?>
                            </a>

                        <?php endif; ?>

                        <?php if ( $block_7_show_info === 'yes' ): ?>

                            <?php 

                            $header_info_phone = get_field('header_phones', 'options');

                            if ( $header_info_phone ): 

                                $header_phone = $header_info_phone[0]['header_phone'];
                                $header_text = $header_info_phone[0]['header_text'];

                            ?>

                                <p>
                                    <a class="c-header__phone" href="tel:<?php echo preg_replace('~[^\d]+~', '', $header_phone); ?>">
                                    <i class="fa-solid fa-phone u-text--accent-3" aria-hidden="true"></i> <?php echo $header_text;  ?> <?php echo $header_phone; ?>
                                    </a>
                                </p>

                            <?php endif; ?>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <?php if ( $block_7_bg ): ?>

                <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_7_bg; ?>"></div>

            <?php endif; ?>

        </div>

        <?php elseif( get_row_layout() == 'block_8_cta_tertiary' ): 

            $block_8_title    = get_sub_field('block_8_cta_tertiary_title');
            $block_8_subtitle = get_sub_field('block_8_cta_tertiary_subtitle');
            $block_8_content  = get_sub_field('block_8_cta_tertiary_content');
            $block_8_bg       = get_sub_field('block_8_cta_tertiary_background');

        ?>

        <!-- Section -->

        <div class="c-cta-tertiary u-block-padding--xl u-block---white c-background--relative">

            <div class="container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                        <div class="u-block-padding--md u-reset--padding-top u-text--center">

                            <?php if ( $block_8_subtitle ): ?>
                            
                                <p class="u-text--sm u-text--line u-text--accent-3">
                                    <?php echo $block_8_subtitle; ?>
                                </p>

                            <?php endif; ?>

                            <?php if ( $block_8_title ): ?>

                                <h2 class="u-text--accent-3 u-text--uppercase">
                                    <?php echo $block_8_title; ?>
                                </h2>

                            <?php endif; ?>

                            <?php if ( $block_8_content ): ?>

                                <div>

                                    <?php echo $block_8_content; ?>

                                </div>  

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-12">

                        <?php if ( get_sub_field('block_8_cta_tertiary_blocks') ): ?>

                            <div class="c-carousel">

                                <?php while ( has_sub_field('block_8_cta_tertiary_blocks') ): 

                                    $block_8_content = get_sub_field('block_8_cta_tertiary_blocks_content');
                                    $block_8_image    = get_sub_field('block_8_cta_tertiary_blocks_image');
                                    $block_8_link   = get_sub_field('block_8_cta_tertiary_blocks_link');

                                ?>

                                    <div class="c-carousel__item">

                                        <?php if ( $block_8_link ): ?>

                                            <a class="c-cta-tertiary__link" title="<?php echo $block_8_link['title']; ?>" href="<?php echo $block_8_link['url']; ?>">

                                        <?php endif; ?>
                                        
                                            <?php if ( $block_8_image ): ?>

                                                <img class="u-reset--margin"
                                                     data-lazy="<?php echo $block_8_image['url']; ?>"
                                                     alt="<?php echo $block_8_image['alt']; ?>"
                                                     width="<?php echo $block_8_image['width']; ?>"
                                                     height="<?php echo $block_8_image['height']; ?>">

                                            <?php endif; ?>
                                            
                                            <?php if ( $block_8_content ): ?>
                                            
                                                <div class="c-cta-tertiary__description">
                                                    
                                                    <?php echo $block_8_content; ?>

                                                </div>

                                            <?php endif; ?>

                                        <?php if ( $block_8_link ): ?>

                                            </a>

                                        <?php endif; ?>

                                    </div>

                                <?php endwhile; ?>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <?php if ( $block_8_bg ): ?>

                <div class="c-background c-background--base c-background--position-right c-background--cover b-lazy" data-original="<?php echo $block_8_bg; ?>"></div>

            <?php endif; ?>

        </div>

        <?php elseif( get_row_layout() == 'block_9_cases' ): 

            $block_9_title     = get_sub_field('block_9_cases_title');
            $block_9_subtitle  = get_sub_field('block_9_cases_subtitle');
            $block_9_content   = get_sub_field('block_9_cases_content');

        ?>

        <!-- Section -->

        <div class="c-cases u-block--accent-1 o-content--hidden c-background--relative">

            <div class="container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-12">

                        <div class="u-text--center u-block-padding--sm">
                            
                            <?php if ( $block_9_title ): ?>

                                <h2 class="c-cases__title u-text--line u-text--accent-2 u-text--sm"><?php echo $block_9_title; ?></h2>

                            <?php endif; ?>

                            <?php if ( $block_9_subtitle ): ?>

                                <p class="c-lead-secondary u-text--accent-11"><?php echo $block_9_subtitle; ?></p>

                            <?php endif; ?>

                            <?php if ( $block_9_content ): ?>

                                <div class="c-cases__text u-text--white">
                                    
                                    <?php echo $block_9_content; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

            <div class="container--wide">

                <div class="o-row u-reset--gutter">

                    <div class="o-col--xxs-12 o-col--md-12">

                        <?php if( have_rows('block_9_cases_blocks') ): ?>
                        
                            <div class="c-carousel__cases">

                                <?php while( have_rows('block_9_cases_blocks') ): the_row(); 

                                    $block_9_revenue     = get_sub_field('block_9_cases_revenue');
                                    $block_9_description = get_sub_field('block_9_cases_description');
                                    $block_9_icon = get_sub_field('block_9_cases_icon');

                                ?>

                                    <div class="c-carousel__item">
                                        
                                        <div class="c-cases__item">

                                            <?php if ( $block_9_icon ): ?>

                                                <img class="c-cases__icon u-block--center"
                                                     data-lazy="<?php echo $block_9_icon['url']; ?>"
                                                     alt="<?php echo $block_9_icon['alt']; ?>"
                                                     width="<?php echo $block_9_icon['width']; ?>"
                                                     height="<?php echo $block_9_icon['height']; ?>">

                                            <?php endif; ?>

                                            <?php if ( $block_9_revenue ): ?>

                                                <span class="c-cases__revenue u-text--block">
                                                    <?php echo $block_9_revenue; ?>
                                                </span>

                                                <hr class="u-block-hr--narrow u-block-hr--accent-2">

                                            <?php endif; ?>

                                            <?php if ( $block_9_description ): ?>

                                                <span class="c-cases__description u-text--block">
                                                    <?php echo $block_9_description; ?>
                                                </span>

                                            <?php endif; ?>

                                        </div>
                                    
                                    </div>

                                <?php endwhile; ?>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

        <?php elseif( get_row_layout() == 'block_10_info_secondary' ): 

            $block_10_title    = get_sub_field('block_10_info_secondary_title');
            $block_10_subtitle = get_sub_field('block_10_info_secondary_subtitle');
            $block_10_content  = get_sub_field('block_10_info_secondary_content');
            $block_10_additional_content  = get_sub_field('block_10_info_secondary_additional_content');
            $block_10_image    = get_sub_field('block_10_info_secondary_image');
            $block_10_link    = get_sub_field('block_10_info_secondary_link');
            $block_10_bg       = get_sub_field('block_10_info_secondary_background');

        ?>

        <!-- Section -->

        <div class="c-info-secondary u-block-padding--xl u-block--accent-2 c-background--relative">

            <div class="container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                        <?php if ( $block_10_subtitle ): ?>

                            <p class="c-lead-secondary u-text--center">
                                <?php echo $block_10_subtitle; ?>
                            </p>

                        <?php endif; ?>

                        <div class="u-text--center">

                            <?php if ( $block_10_title ): ?>

                                <h2>
                                    <?php echo $block_10_title; ?>
                                </h2>

                            <?php endif; ?>

                            <?php if ( $block_10_content ): ?>

                                <div class="c-info-secondary__content">
                                    
                                    <?php echo $block_10_content; ?>

                                </div>

                            <?php endif; ?>

                            <?php if ( $block_10_image ): ?>

                                <div class="c-info-secondary__img">

                                    <img class="b-lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-original="<?php echo $block_10_image['url']; ?>"
                                    alt="<?php echo $block_10_image['alt']; ?>"
                                    width="<?php echo $block_10_image['width']; ?>"
                                    height="<?php echo $block_10_image['height']; ?>">

                                </div>

                            <?php endif; ?>

                            <?php if ( $block_10_additional_content ): ?>

                                <div class="c-info-secondary__content">
                                    
                                    <?php echo $block_10_additional_content; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                        <?php if ( $block_10_link ): ?>
                                
                            <div class="u-text--center">
                                
                                <a href="<?php echo $block_10_link['url']; ?>" class="c-btn c-btn--secondary">
                                    <?php echo $block_10_link['title']; ?>
                                </a>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <?php if ( $block_10_bg ): ?>

                <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_10_bg; ?>"></div>

            <?php endif; ?>

        </div>

        <?php elseif( get_row_layout() == 'block_11_services' ): 

            $block_11_title    = get_sub_field('block_11_services_title');
            $block_11_subtitle = get_sub_field('block_11_services_subtitle');
            $block_11_content  = get_sub_field('block_11_services_content');
            $block_11_link_main  = get_sub_field('block_11_services_link');
            $block_11_bg  = get_sub_field('block_11_services_background');

        ?>

        <!-- Section -->

        <div class="c-services u-block--accent-1 u-block-padding--xl c-background--relative">

            <div class="container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-12">

                        <div class="c-services__content">

                            <?php if ( $block_11_subtitle ): ?>

                                <p class="c-lead-secondary u-text--accent-2"><?php echo $block_11_subtitle; ?></p>

                            <?php endif; ?>

                            <?php if ( $block_11_title ): ?>

                                <h2 class="u-text--white"><?php echo $block_11_title; ?></h2>

                            <?php endif; ?>

                            <?php if ( $block_11_content ): ?>

                                <div class="c-services__text u-text--white">

                                    <?php echo $block_11_content; ?>

                                </div>

                            <?php endif; ?> 

                        </div>

                    </div>

                </div>

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-12">

                        <?php if ( have_rows('block_11_services_blocks') ): ?>

                            <div class="c-services__list">
                                
                                <?php while ( have_rows('block_11_services_blocks') ): the_row(); 

                                    $block_11_main_title = get_sub_field('block_11_services_main_title');
                                    $block_11_image = get_sub_field('block_11_services_image');
                                    $block_11_description = get_sub_field('block_11_services_description');
                                    $block_11_link = get_sub_field('block_11_services_link');

                                ?>

                                    <div class="c-services__block">

                                        <?php if ( $block_11_image ): ?>

                                            <img class="c-services__icon b-lazy"
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                 data-original="<?php echo $block_11_image['url']; ?>"
                                                 alt="<?php echo $block_11_image['alt']; ?>"
                                                 width="<?php echo $block_11_image['width']; ?>"
                                                 height="<?php echo $block_11_image['height']; ?>">

                                        <?php endif; ?>

                                        <?php if ( $block_11_main_title ): ?>

                                            <h3 class="u-h5 u-text--bold u-text--white u-reset--margin">
                                                <?php echo $block_11_main_title; ?>
                                            </h3>

                                        <?php endif; ?>

                                        <div class="c-services__description">

                                            <?php if ( $block_11_main_title ): ?>

                                                <span class="u-h5 u-text--white u-text--bold u-text--block">
                                                    <?php echo $block_11_main_title; ?>
                                                </span>

                                            <?php endif; ?>

                                            <?php if ( $block_11_description ): ?>

                                                <div class="u-text--truncate">

                                                    <p><?php echo $block_11_description; ?></p>

                                                </div>

                                            <?php endif; ?> 

                                            <?php if ( $block_11_link ): ?>
                                
                                                <a href="<?php echo $block_11_link['url']; ?>" class="c-btn--arrow u-text--white">
                                                        <?php echo $block_11_link['title']; ?>
                                                    </a>

                                            <?php endif; ?>

                                        </div> 

                                    </div>

                                <?php endwhile; ?>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

                <?php if ( $block_11_link_main ): ?>

                    <div class="u-text--center u-block-padding--sm u-reset--padding-bottom">    
                        
                        <a href="<?php echo $block_11_link_main['url']; ?>" class="c-btn c-btn--primary">
                            <?php echo $block_11_link_main['title']; ?>
                        </a>

                    </div>

                <?php endif; ?>

            </div>

            <?php if ( $block_11_bg ): ?>

                <div class="c-background c-background--base c-background--position-top c-background--cover b-lazy" data-original="<?php echo $block_11_bg; ?>"></div>

            <?php endif; ?>

        </div>

        <?php elseif( get_row_layout() == 'block_12_form' ): 

            $block_12_title   = get_sub_field('block_12_form_title');
            $block_12_content = get_sub_field('block_12_form_content');

        ?>

        <!-- Section -->

        <div class="c-form u-block-padding--lg u-block--accent-4">

            <div class="container">

                <div class="o-row">

                    <div class="o-col--xxs-12 o-col--md-12">

                        <?php if ( $block_12_title ): ?>

                            <h2 class="c-forms__title u-text--accent-1 u-text--center"><?php echo $block_12_title; ?></h2>

                        <?php endif; ?>

                        <?php if ( $block_12_content ): ?>

                            <div class="c-forms__content">

                                <div class="c-form__block">
                                    <?php echo $block_12_content; ?>
                                </div>

                            </div>

                        <?php endif; ?> 

                    </div>

                </div>

            </div>

        </div>

        <?php elseif( get_row_layout() == 'block_13_google_reviews' ): 

            $block_13_title = get_sub_field('block_13_title');
            $block_13_subtitle = get_sub_field('block_13_subtitle');
            $block_13_content = get_sub_field('block_13_content');
            $block_13_link = get_sub_field('block_13_link');
            $block_13_bg = get_sub_field('block_13_background');

        ?>

            <!-- Section -->

            <div class="c-google-reviews u-block-padding--xl u-block--white c-background--relative">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-12">

                            <div class="u-text--center">

                                <?php if ( $block_13_subtitle ): ?>

                                    <p class="c-lead-secondary u-text--accent-3">
                                        <?php echo $block_13_subtitle; ?>
                                    </p>


                                <?php endif; ?>

                                <?php if ( $block_13_title ): ?>
                                    
                                    <h2>
                                        <?php echo $block_13_title; ?>
                                    </h2>

                                <?php endif; ?>

                            </div>
                            
                        </div>

                    </div>

                    <div class="o-row">

                        <div class="o-col--xxs-12">

                            <?php if ( $block_13_content ): ?>

                                <div class="c-google-reviews__content">
                                    <?php echo $block_13_content; ?>
                                </div>

                            <?php endif; ?> 

                            <?php if ( $block_13_link ): ?>
                            
                                <div class="u-text--center u-block-padding--md u-reset--padding-bottom">
                                    
                                    <a href="<?php echo $block_13_link['url']; ?>" class="c-btn c-btn--primary">
                                        <?php echo $block_13_link['title']; ?>
                                    </a>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <?php if ( $block_13_bg ): ?>

                    <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_13_bg; ?>"></div>

                <?php endif; ?>

            </div>

        <?php elseif( get_row_layout() == 'home_why_hire' ): ?>

            <!-- Why Hire Section -->
            <?php get_template_part('_inc/flex/home-why-hire'); ?>

            <?php endif;

        endwhile;

    else : ?>

    <div class="u-block---white u-block-padding--xl">

        <div class="container">

            <div class="o-row">

                <div class="o-col--md-10 o-col--offset-md-1 o-col--lg-8 o-col--offset-lg-2 u-text--center text-[19px]">

                    <h4 class="text-[34px]">No content blocks</h4>

                    <?php
                        if( is_user_logged_in()) : ?>

                        <a class="c-btn c-btn--primary" href="<?php echo get_edit_post_link(); ?>">
                            Add content
                        </a>

                    <?php else: ?>

                        <a class="c-btn c-btn--primary" href="<?php bloginfo('url'); ?>/wp-admin">
                            Login to add content
                        </a>

                     <?php endif;?>

                </div>

            </div>

        </div>

    </div>
<p>rwt</p>
<?php endif; ?>
