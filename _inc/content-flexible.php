<?php

    // check if the flexible subpage field has rows of data
    if ( have_rows('subpage') ):

        // loop through the rows of data
        while ( have_rows('subpage') ) : the_row();

        if ( get_row_layout() == 'block_2_awards' ): 

            $block_2_title = get_sub_field('block_2_awards_title');

        ?>

            <!-- Section -->

            <div class="c-awards u-block--white u-block-padding--md">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12">

                            <?php if ( $block_2_title ): ?>
                            
                                <h2 class="u-text--center">
                                    <?php echo $block_2_title; ?>
                                </h2>

                                <hr class="u-block-hr--narrow">

                            <?php endif; ?>

                            <?php if( get_sub_field('block_2_awards_blocks') ): ?>

                                <div class="c-awards__content c-block--flex c-block--flex-v-center c-block--flex-around">

                                    <?php while( has_sub_field('block_2_awards_blocks') ): 

                                        $block_2_img = get_sub_field('block_2_awards_image');
                                        $block_2_link = get_sub_field('block_2_awards_link');

                                    ?>

                                    <div class="c-awards__img">
                                        
                                        <?php if ( $block_2_img ): ?>

                                            <?php if ( $block_2_link ): ?>

                                                <a href="<?php echo $block_2_link['url']; ?>">

                                            <?php endif; ?>

                                            <img class="u-reset--margin b-lazy"
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                 data-original="<?php echo $block_2_img['url']; ?>"
                                                 alt="<?php echo $block_2_img['alt']; ?>"
                                                 width="<?php echo $block_2_img['width']; ?>"
                                                 height="<?php echo $block_2_img['height']; ?>">

                                            <?php if ( $block_2_link ): ?>

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

        <?php elseif( get_row_layout() == 'block_3_content' ): 

            $block_3_title = get_sub_field('block_3_content_title');
            $block_3_content = get_sub_field('block_3_content');

        ?>

            <!-- Section -->

            <div class="c-content-primary u-block-padding--lg">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-12">

                            <?php if ( $block_3_title ): ?>
                                        
                                <h2><?php echo $block_3_title; ?></h2>

                            <?php endif; ?>

                            <?php if ( $block_3_content ): ?>
                                        
                                <?php echo $block_3_content; ?>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        <?php elseif( get_row_layout() == 'block_4_info' ): 

            $block_4_title = get_sub_field('block_4_info_title');
            $block_4_content = get_sub_field('block_4_info_content');


        ?>

            <!-- Section -->

            <div class="c-info u-block-padding--md">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-12">

                            <div class="c-info-cta">

                                <?php if ( $block_4_title ): ?>
                                            
                                    <div class="c-info-cta__title">
                                        
                                        <h2><?php echo $block_4_title; ?></h2>

                                    </div>

                                <?php endif; ?>

                                <?php if ( $block_4_content ): ?>

                                    <div class="c-info-cta__content">
                                        
                                        <?php echo $block_4_content; ?>

                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        <?php elseif( get_row_layout() == 'block_5_cases' ): 

            $block_5_title = get_sub_field('block_5_cases_title');
            $block_5_subtitle = get_sub_field('block_5_cases_subtitle');
            $block_5_content = get_sub_field('block_5_cases_content');
            $block_5_link = get_sub_field('block_5_cases_link');

        ?>

            <!-- Section -->

            <div class="c-cases-block u-block-padding--xl">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                            <div class="u-text--center">
                                
                                <?php if ( $block_5_subtitle ): ?>

                                    <p class="u-text--line u-text--sm u-text--accent-3"><?php echo $block_5_subtitle; ?></p>

                                <?php endif; ?>

                                <?php if ( $block_5_title ): ?>

                                    <h2 class="u-text--accent-3 u-text--uppercase"><?php echo $block_5_title; ?></h2>

                                <?php endif; ?>

                                <?php if ( $block_5_content ): ?>

                                    <?php echo $block_5_content; ?>

                                <?php endif; ?> 

                            </div>

                        </div>

                    </div>
                    
                    <div class="o-row">
                        
                        <div class="o-col--xxs-12">

                            <?php if( get_sub_field('block_5_cases_blocks') ): ?>

                                <div class="c-cases-block__items">

                                    <?php while( has_sub_field('block_5_cases_blocks') ): 

                                        $block_5_revenue = get_sub_field('block_5_cases_revenue');
                                        $block_5_description = get_sub_field('block_5_cases_description');
                                        $block_5_type = get_sub_field('block_5_cases_type');

                                    ?>

                                        <div class="c-cases-block__item">
                                                
                                            <div class="c-cases-block__revenue">
                                                
                                                <?php if ( $block_5_revenue ): ?>

                                                    <h3 class="c-cases-block__title"><?php echo $block_5_revenue; ?></h3>

                                                <?php endif; ?>

                                                <?php if ( $block_5_type ): ?>

                                                    <p class="c-cases-block__type"><?php echo $block_5_type; ?></p>

                                                <?php endif; ?>

                                            </div>

                                            <?php if ( $block_5_description ): ?>

                                                <div class="c-cases-block__description">
                                                    
                                                    <?php echo $block_5_description; ?>

                                                </div>

                                            <?php endif; ?>

                                        </div>

                                    <?php endwhile; ?>

                                </div>

                            <?php endif; ?>

                            <?php if ( $block_5_link ): ?>
                                            
                                <a href="<?php echo $block_5_link['url']; ?>" class="c-btn--text">
                                    <?php echo $block_5_link['title']; ?>
                                </a>

                            <?php endif; ?>

                        </div>


                    </div>

                </div>

            </div>

            <?php elseif( get_row_layout() == 'block_6_team' ): 

                $block_6_title = get_sub_field('block_6_team_title');
                $block_6_content = get_sub_field('block_6_team_content');

            ?>

            <!-- Section -->

            <div class="c-team u-block-padding--lg">

                 <div class="container">
                    
                    <div class="o-row">
                        
                        <div class="o-col--xxs-12">

                            <?php if ( $block_6_title ): ?>
                                        
                                <h2><?php echo $block_6_title; ?></h2>

                            <?php endif; ?>

                            <?php if ( $block_6_content ): ?>

                                <?php echo $block_6_content; ?>

                            <?php endif; ?>

                            <?php if( get_sub_field('block_6_team_blocks') ): ?>

                                <div class="c-team__blocks">

                                    <?php while( has_sub_field('block_6_team_blocks') ): 

                                        $block_6_img  = get_sub_field('block_6_team_image');
                                        $block_6_title = get_sub_field('block_6_team_title');
                                        $block_6_subtitle = get_sub_field('block_6_team_subtitle');
                                        $block_6_link = get_sub_field('block_6_team_link');

                                    ?>

                                    <div class="c-team__block u-text--center">
                                        
                                        <div class="c-team__item">
                                            
                                            <?php if ( $block_6_img ): ?>
                                        
                                                <img class="c-team__img u-reset--margin b-lazy"
                                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                     data-original="<?php echo $block_6_img['url']; ?>"
                                                     alt="<?php echo $block_6_img['alt']; ?>"
                                                     width="<?php echo $block_6_img['width']; ?>"
                                                     height="<?php echo $block_6_img['height']; ?>">

                                            <?php endif; ?>

                                            <?php if ( $block_6_link ): ?>

                                                <a class="c-btn c-btn--primary" href="<?php echo $block_6_link['url']; ?>"><?php echo $block_6_link['title']; ?></a>

                                            <?php endif; ?>

                                        </div>

                                        <div class="c-team__info">
                                                        
                                            <?php if ( $block_6_title ): ?>

                                                <h3 class="c-team__title u-reset-font--primary u-text--uppercase u-text--letter-spacing">
                                                    <?php echo $block_6_title; ?>
                                                </h3>

                                            <?php endif; ?>

                                            <?php if ( $block_6_subtitle ): ?>

                                                <p class="c-team__subtitle u-reset-font--secondary u-text--accent-10">
                                                    <?php echo $block_6_subtitle; ?>
                                                </p>

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

            <?php elseif( get_row_layout() == 'block_7_video' ): 

                $block_7_title = get_sub_field('block_7_video_title');
                $block_7_content = get_sub_field('block_7_video_content');
                $block_7_image = get_sub_field('block_7_video_image');
                $block_7_link = get_sub_field('block_7_video_link');

            ?>

            <!-- Section -->

            <div class="c-video u-block-padding--md">

                <div class="container">
                    
                    <div class="o-row">
                        
                        <div class="o-col--xxs-12">

                            <?php if ( $block_7_title ): ?>
                                        
                                <h2><?php echo $block_7_title; ?></h2>

                            <?php endif; ?>

                            <?php if ( $block_7_content ): ?>

                                <?php echo $block_7_content; ?>

                            <?php endif; ?>

                            <?php if ( $block_7_image ): ?>

                                <div class="c-video__block">

                                    <div class="c-video--line"></div>

                                    <?php if ( $block_7_link ): ?>
                                                    
                                        <a href="<?php echo $block_7_link['url']; ?>" data-fancybox title="<?php echo $block_7_link['title']; ?>" class="c-video__link">

                                    <?php endif; ?>
                                    
                                        <img class="c-video__image u-reset--margin b-lazy"
                                             src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                             data-original="<?php echo $block_7_image['url']; ?>"
                                             alt="<?php echo $block_7_image['alt']; ?>"
                                             width="<?php echo $block_7_image['width']; ?>"
                                             height="<?php echo $block_7_image['height']; ?>">

                                        <span class="c-video__icon"><i class="fa fa-play" aria-hidden="true"></i></span>

                                    <?php if ( $block_7_link ): ?>

                                        </a>

                                    <?php endif; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>
                      
            </div>

            <?php elseif( get_row_layout() == 'block_8_cta' ): 

                $block_8_title = get_sub_field('block_8_cta_title');
                $block_8_content = get_sub_field('block_8_cta_content');

            ?>

            <!-- Section -->

            <div class="c-cta u-block-padding--lg">

                <div class="container">
                    
                    <div class="o-row">
                        
                        <div class="o-col--xxs-12">

                            <div class="c-cta-info">    

                                <?php if ( $block_8_title ): ?>
                                            
                                    <h2><?php echo $block_8_title; ?></h2>

                                <?php endif; ?>

                                <?php if ( $block_8_content ): ?>

                                    <?php echo $block_8_content; ?>

                                <?php endif; ?>

                            </div> 

                        </div>

                    </div>

                </div>

            </div>

        <?php elseif( get_row_layout() == 'block_9_services' ): 

            $block_9_title    = get_sub_field('block_9_services_title');
            $block_9_subtitle = get_sub_field('block_9_services_subtitle');
            $block_9_content  = get_sub_field('block_9_services_content');
            $block_9_bg  = get_sub_field('block_9_services_background');

        ?>

            <!-- Section -->

            <div class="c-services u-block--white u-block-padding--xl c-background--relative">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-8">

                            <div class="c-services__content">

                                <?php if ( $block_9_subtitle ): ?>

                                    <p class="c-lead-secondary"><?php echo $block_9_subtitle; ?></p>

                                <?php endif; ?>

                                <?php if ( $block_9_title ): ?>

                                    <h2><?php echo $block_9_title; ?></h2>

                                <?php endif; ?>

                                <?php if ( $block_9_content ): ?>

                                    <div class="c-services__text">

                                        <?php echo $block_9_content; ?>

                                    </div>

                                <?php endif; ?> 

                            </div>

                        </div>

                    </div>

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-12">

                            <?php if ( have_rows('block_9_services_blocks') ): ?>

                                <div class="c-services__list">
                                    
                                    <?php while ( have_rows('block_9_services_blocks') ): the_row(); 

                                        $block_9_main_title = get_sub_field('block_9_services_main_title');
                                        $block_9_image = get_sub_field('block_9_services_image');
                                        $block_9_description = get_sub_field('block_9_services_description');
                                        $block_9_link = get_sub_field('block_9_services_link');

                                    ?>

                                        <div class="c-services__block">

                                            <?php if ( $block_9_image ): ?>

                                                <img class="c-services__icon b-lazy"
                                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                     data-original="<?php echo $block_9_image['url']; ?>"
                                                     alt="<?php echo $block_9_image['alt']; ?>"
                                                     width="<?php echo $block_9_image['width']; ?>"
                                                     height="<?php echo $block_9_image['height']; ?>">

                                            <?php endif; ?>

                                            <?php if ( $block_9_main_title ): ?>

                                                <h3 class="u-h5 u-text--bold u-text--block">
                                                    <?php echo $block_9_main_title; ?>
                                                </h3>

                                            <?php endif; ?>

                                            <div class="c-services__description">

                                                <?php if ( $block_9_main_title ): ?>

                                                    <span class="u-h5 u-text--white u-text--bold u-text--block">
                                                        <?php echo $block_9_main_title; ?>
                                                    </span>

                                                <?php endif; ?>

                                                <?php if ( $block_9_description ): ?>

                                                    <div class="u-text--truncate">

                                                        <?php echo $block_9_description; ?>

                                                    </div>

                                                <?php endif; ?> 

                                                <?php if ( $block_9_link ): ?>
                                
                                                    <a href="<?php echo $block_9_link['url']; ?>" class="c-btn--arrow u-text--white">
                                                            <?php echo $block_9_link['title']; ?>
                                                        </a>

                                                <?php endif; ?>

                                            </div> 

                                        </div>

                                    <?php endwhile; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <?php if ( $block_9_bg ): ?>

                    <div class="c-background c-background--base c-background--position-top c-background--cover b-lazy" data-original="<?php echo $block_9_bg; ?>"></div>

                <?php endif; ?>

            </div>

            <?php elseif( get_row_layout() == 'block_10_reviews' ): 

                $block_10_title = get_sub_field('block_10_reviews_title');
                $block_10_subtitle = get_sub_field('block_10_reviews_subtitle');
                $block_10_content = get_sub_field('block_10_reviews_content');

            ?>

            <!-- Section -->

            <div class="c-reviews u-block-padding--lg">

                <div class="container">

                    <div class="o-row">

                        <div class="o-col--xxs-12 o-col--md-4">

                            <?php if ( $block_10_title ): ?>

                                <h2><?php echo $block_10_title; ?></h2>

                            <?php endif; ?>

                        </div>

                        <div class="o-col--xxs-12 o-col--md-8">

                            <?php if ( $block_10_subtitle ): ?>

                                <p class="c-lead u-text--accent-1"><?php echo $block_10_subtitle; ?></p>

                            <?php endif; ?>

                            <?php if ( $block_10_content ): ?>

                                <?php echo $block_10_content; ?>

                            <?php endif; ?> 

                        </div>

                    </div>

                    <div class="o-row">

                        <div class="o-col--xxs-12">

                            <?php if( have_rows('block_10_reviews_blocks') ): ?>
                            
                                <div class="c-reviews__list">

                                    <?php while( have_rows('block_10_reviews_blocks') ): the_row(); 

                                        $block_10_author = get_sub_field('block_10_reviews_author');
                                        $block_10_quote = get_sub_field('block_10_reviews_quote');

                                    ?>

                                        <div class="c-reviews__item u-text--center">

                                            <blockquote class="c-reviews__quote u-reset--blockquote">

                                                <?php if ( $block_10_quote ): ?>

                                                    <?php echo $block_10_quote; ?>

                                                <?php endif; ?>

                                                <?php if ( $block_10_author ): ?>

                                                    <cite class="c-reviews__author">
                                                        <?php echo $block_10_author; ?>
                                                    </cite>

                                                <?php endif; ?>

                                            </blockquote>

                                        </div>

                                    <?php endwhile; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

           <?php endif;

        endwhile; ?>

<?php endif; ?>