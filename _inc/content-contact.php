<div class="c-contact u-block--accent-1 u-block-padding--lg c-background--relative">

    <div class="container">

        <div class="o-row">
            
            <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">
                
                <div class="c-contact__content u-text--center u-block-padding--sm u-reset--padding-top">

                    <?php

                        $contact_subtitle = get_field('contact_subtitle', 'options');

                        if ( $contact_subtitle ): ?>

                            <p class="u-text--white u-text--sm u-text--line u-text--line-white">
                                <?php echo $contact_subtitle; ?>
                            </p>

                    <?php endif; ?>

                    <?php

                        $contact_title = get_field('contact_title', 'options');

                        if ( $contact_title ): ?>

                            <h2 class="u-text--white">
                                <?php echo $contact_title; ?>
                            </h2>

                    <?php endif; ?>

                    <?php

                        $contact_additional_content = get_field('contact_additional_content', 'options');

                        if ( $contact_additional_content ): ?>

                            <div class="u-text--white">
                                
                                <?php echo $contact_additional_content; ?>

                            </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        <div class="o-row align-items-center-md">

            <?php

                $show_map = get_field('show_map', 'options');

                if ( $show_map === 'yes' ): ?>

                    <div class="o-col--xxs-12 o-col--md-5">

                <?php else: ?>

                    <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">

                <?php endif; ?>

                <?php

                    $contact_form = get_field('contact_form', 'options');

                    if ( $contact_form ): ?>

                        <div class="c-contact__form">

                            <?php echo $contact_form; ?>

                        </div>

                <?php endif; ?>

            </div>

            <?php

                $show_map = get_field('show_map', 'options');

                if ( $show_map === 'yes' ): ?>

                <div class="o-col--xxs-12 o-col--md-6 o-col--offset-md-1">

                    <?php

                    $footer_map = get_field('info_map', 'options');

                    if ( $footer_map ): ?>

                        <div class="c-contact__map">

                            <?php echo $footer_map; ?>

                        </div>

                    <?php endif; ?>

                </div>

             <?php endif; ?>

        </div>

    </div>

    <?php

        $contact_image = get_field('contact_image', 'options');

        if ( $contact_image ): ?>

            <div class="c-background c-background--base c-background--position-center c-background--cover b-lazy" data-original="<?php echo $contact_image; ?>"></div>

    <?php endif; ?>

</div>

