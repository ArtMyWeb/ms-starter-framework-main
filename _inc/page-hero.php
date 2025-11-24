<?php

    // check if the flexible subpage field has rows of data
    if( have_rows('subpage') ):

        // loop through the rows of data
        while ( have_rows('subpage') ) : the_row();

            if( get_row_layout() == 'block_1_hero' ): 

                $block_1_title = get_sub_field('block_1_hero_title');
                $block_1_subtitle = get_sub_field('block_1_hero_subtitle');
                $block_1_text = get_sub_field('block_1_hero_text');
                $block_1_link = get_sub_field('block_1_hero_link');
                $block_1_bg = get_sub_field('block_1_hero_background');

            ?>

            <!-- Section -->

            <div class="c-hero--default u-block--accent-1 c-background--relative">

                <div class="container">

                    <div class="o-row align-items-center-md">

                        <div class="o-col--xxs-12 o-col--md-5">

                            <?php if ( $block_1_subtitle ): ?>

                                <p class="c-lead-secondary u-text--accent-3">
                                    <?php echo $block_1_subtitle; ?>
                                </p>

                            <?php endif; ?>

                            <?php if ( $block_1_title ): ?>

                                <h1 class="c-hero__title u-h2 u-text--white">
                                    <?php echo $block_1_title; ?>
                                </h1>

                            <?php endif; ?>

                            <?php if ( $block_1_text ): ?>

                                <div class="c-hero__text u-text--white">
                                    <?php echo $block_1_text; ?>
                                </div>

                            <?php endif; ?>

                            <?php if ( $block_1_link ): ?>
                            
                                <a href="<?php echo $block_1_link['url']; ?>" class="c-btn c-btn--primary">
                                    <?php echo $block_1_link['title']; ?>
                                </a>

                            <?php endif; ?>

                        </div>

                        <div class="o-col--xxs-12 o-col--md-6 o-col--offset-md-1">

                            <div class="c-contact__block">

                                <?php

                                    $contact_form = get_field('contact_form', 'options');

                                    if ( $contact_form ): ?>

                                        <div class="c-contact__form">

                                            <?php echo $contact_form; ?>

                                        </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

                <?php if ( $block_1_bg ): ?>

                    <div class="c-hero__bg c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $block_1_bg; ?>"></div>

                <?php endif; ?>

            </div>

        <?php  endif;

        endwhile;

    endif; ?>