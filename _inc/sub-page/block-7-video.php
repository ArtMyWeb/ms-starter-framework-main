            <?php elseif( get_row_layout() == 'block_7_video' ):

                $block_7_title = get_sub_field('block_7_video_title');
                $block_7_content = get_sub_field('block_7_video_content');
                $block_7_image = get_sub_field('block_7_video_image');
                $block_7_link = get_sub_field('block_7_video_link');

            ?>

            <!-- Section -->

            <div class="c-video u-block-padding--md">

                <div class="o-container">

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

            <?php endif; ?>