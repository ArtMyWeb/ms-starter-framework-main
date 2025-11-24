            <?php elseif( get_row_layout() == 'block_10_reviews' ):

                $block_10_title = get_sub_field('block_10_reviews_title');
                $block_10_subtitle = get_sub_field('block_10_reviews_subtitle');
                $block_10_content = get_sub_field('block_10_reviews_content');

            ?>

            <!-- Section -->

            <div class="c-reviews u-block-padding--lg">

                <div class="o-container">

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

           <?php endif; ?>