
        <?php get_template_part('_inc/content', 'blog'); ?>

        <?php get_template_part('_inc/content', 'contact'); ?>


    </main>

    <?php get_template_part('_inc/content', 'info'); ?>

    <div class="c-footer__resources-nav u-block--accent-1 u-block-padding--lg">

        <div class="o-container">

            <div class="o-row">

                <div class="o-col--xxs-12 o-col--xs-6 o-col--lg-3">

                    <!-- Checks if a specific sidebar has widgets -->
                    <?php if ( is_active_sidebar('sidebar-footer-1') ) : ?>
                        <div class="c-widgets">
                            <?php dynamic_sidebar('sidebar-footer-1'); ?>
                        </div>
                    <?php endif; ?>

                </div>
                
                <div class="o-col--xxs-12 o-col--xs-6 o-col--lg-3">

                    <!-- Checks if a specific sidebar has widgets -->
                    <?php if ( is_active_sidebar('sidebar-footer-2') ) : ?>
                        <div class="c-widgets">
                            <?php dynamic_sidebar('sidebar-footer-2'); ?>
                        </div>
                    <?php endif; ?>

                </div>
                
                <div class="o-col--xxs-12 o-col--xs-6 o-col--lg-3">

                    <!-- Checks if a specific sidebar has widgets -->
                    <?php if ( is_active_sidebar('sidebar-footer-3') ) : ?>
                        <div class="c-widgets">
                            <?php dynamic_sidebar('sidebar-footer-3'); ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="o-col--xxs-12 o-col--xs-6 o-col--lg-3">

                    <!-- Checks if a specific sidebar has widgets -->
                    <?php if ( is_active_sidebar('sidebar-footer-4') ) : ?>
                        <div class="c-widgets">
                            <?php dynamic_sidebar('sidebar-footer-4'); ?>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

        </div>
            
    </div>

    <footer class="c-footer u-block--accent-1 u-block-padding--lg">

        <div class="o-container">

            <div class="o-row">

                <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2 u-text--center">

                    <?php

                        $footer_copyright = get_field('footer_copyright', 'options');

                        if ( $footer_copyright ): ?>

                        <p class="u-text--white u-reset--margin u-reset-font--primary">
                            
                            <?php echo $footer_copyright; ?>

                        </p>

                    <?php endif; ?>

                    <?php if ( get_field('links', 'options') ): ?>

                        <ul class="c-footer__links c-list--unstyled">

                            <?php while( has_sub_field('links', 'options') ): 

                                $link = get_sub_field('link');

                            ?>

                                <?php if ( $link ): 

                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>

                                    <li>
                                        <a target="<?php echo  $link_target; ?>" href="<?php echo $link['url']; ?>">
                                            <?php echo $link['title']; ?>
                                        </a>
                                    </li>

                                <?php endif; ?>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </footer>

	<?php wp_footer(); ?>

    </body>

</html>
