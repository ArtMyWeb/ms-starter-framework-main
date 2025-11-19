<?php
// block_2_awards
if ( get_row_layout() !== 'block_2_awards' ) { return; }
$block_2_title = get_sub_field('block_2_awards_title');
?>
<div class="c-awards u-block--white u-block-padding--md">
    <div class="o-container">
        <div class="o-row">
            <div class="o-col--xxs-12">
                <?php if ( $block_2_title ): ?>
                    <h2 class="u-text--center"><?php echo $block_2_title; ?></h2>
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
                                <?php if ( $block_2_link ): ?><a href="<?php echo $block_2_link['url']; ?>"><?php endif; ?>
                                <img class="u-reset--margin b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="<?php echo $block_2_img['url']; ?>" alt="<?php echo $block_2_img['alt']; ?>" width="<?php echo $block_2_img['width']; ?>" height="<?php echo $block_2_img['height']; ?>">
                                <?php if ( $block_2_link ): ?></a><?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
