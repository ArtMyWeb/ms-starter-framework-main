<div class="c-footer__map u-block--accent-1 u-block-padding--lg">
        
    <div class="o-container">
        
        <div class="o-row">
            
            <div class="o-col--xxs-12 o-col--sm-12 o-col--md-6">
                
                <div class="c-footer__map-info">
                    
                    <?php

                        $footer_logo = get_field('footer_logo', 'options');

                        if ( $footer_logo ): ?>

                        <a class="c-footer__logo" href="<?php echo esc_url( home_url() ); ?>">
                            <img class="u-reset--margin" 
                                 src="<?php echo $footer_logo['url']; ?>" alt="<?php echo esc_url( bloginfo('name') ); ?>"  width="<?php echo $footer_logo['width']; ?>" height="<?php echo $footer_logo['height']; ?>">
                        </a>

                    <?php endif; ?>

                    <?php

                        $info_content = get_field('info_content', 'options');

                        if ( $info_content ): ?>

                        <div class="c-footer__info u-reset-font--primary">
                            
                            <?php echo $info_content; ?>

                        </div>

                    <?php endif; ?>

                    <?php get_template_part('_inc/content', 'social'); ?>

                    <?php

                        $link_secondary = get_field('link_secondary', 'options');

                        if ( $link_secondary ): ?>

                            <a class="c-btn c-btn--primary" href="<?php echo $link_secondary['url']; ?>"><?php echo $link_secondary['title']; ?></a>

                    <?php endif; ?>

                </div>

            </div>

            <div class="o-col--xxs-12 o-col--xs-6 o-col--md-3">

                <div class="c-footer__map-info-items">

                    <h3 class="u-h6 u-reset-font--tertiary u-text--medium u-text--uppercase u-text--white">
                        <i class="fa-sharp fa-regular fa-location-dot u-text--accent-2" aria-hidden="true"></i>  
                        Office Address
                    </h3>

                    <?php

                        $footer_address = get_field('info_address', 'options');

                        if ( $footer_address ): ?>

                        <div class="c-footer__map-info-item">

                            <?php

                                $link_primary = get_field('link_primary', 'options');

                                if ( $link_primary ): ?>

                                <a class="u-text--white u-reset--link u-reset-font--tertiary u-text--uppercase u-text--medium" href="<?php echo $link_primary['url']; ?>" title="<?php echo $link_primary['title']; ?>" target="_blank">   
                                    <?php echo $footer_address; ?>
                                </a>

                            <?php endif; ?>
                        </div>

                    <?php endif; ?>
                    
                    <?php if ( get_field('header_phones', 'options') ): ?>

                        <?php while( has_sub_field('header_phones', 'options') ): 

                            $header_phone = get_sub_field('header_phone');

                        ?>

                            <?php if ( $header_phone ): ?>
                                
                                <div class="c-footer__map-info-item">

                                    <a class="c-footer__phone u-reset-font--tertiary u-text--white u-text--medium u-reset--link" href="tel:<?php echo preg_replace('~[^\d]+~', '', $header_phone); ?>"> <?php echo $header_phone; ?>
                                    </a>
                            
                                </div>

                            <?php endif; ?>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>

            <div class="o-col--xxs-12 o-col--xs-6 o-col--md-3">

                <div class="c-footer__map-info-items">

                    <h3 class="u-h6 u-reset-font--tertiary u-text--medium u-text--uppercase u-text--white">
                        <i class="fa-sharp fa-regular fa-calendar u-text--accent-2" aria-hidden="true"></i>  
                        Office Hours
                    </h3>

                    <?php

                        $footer_hours = get_field('info_hours', 'options');

                        if ( $footer_hours ): ?>

                        <div class="c-footer__map-info-item u-reset-font--tertiary u-text--uppercase u-text--white u-text--medium">
                            
                            <?php echo $footer_hours; ?>
                            
                        </div>

                    <?php endif; ?>

                    <?php

                        $footer_email = get_field('info_email', 'options');

                        if ( $footer_email ): ?>

                        <div class="c-footer__map-info-item">
                            <a class="u-reset-font--tertiary u-text--white u-text--medium u-reset--link" href="mailto:<?php echo $footer_email; ?>"> 
                                <?php echo $footer_email; ?>
                            </a>
                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</div>