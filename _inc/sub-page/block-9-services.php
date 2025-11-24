            <?php elseif( get_row_layout() == 'block_9_services' ):

                $block_9_title    = get_sub_field('block_9_services_title');
                $block_9_subtitle = get_sub_field('block_9_services_subtitle');
                $block_9_content  = get_sub_field('block_9_services_content');
                $block_9_bg  = get_sub_field('block_9_services_background');

            ?>

                <!-- Section -->

                <div class="c-services u-block--white u-block-padding--xl c-background--relative">

                    <div class="o-container">

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

                <?php endif; ?>