<?php
// block_4_info
if ( get_row_layout() !== 'block_4_info' ) { return; }
$block_4_title = get_sub_field('block_4_info_title');
$block_4_content = get_sub_field('block_4_info_content');
?>
<div class="c-info u-block-padding--md">
    <div class="o-container">
        <div class="o-row">
            <div class="o-col--xxs-12 o-col--md-12">
                <div class="c-info-cta">
                    <?php if ( $block_4_title ): ?>
                        <div class="c-info-cta__title"><h2><?php echo $block_4_title; ?></h2></div>
                    <?php endif; ?>
                    <?php if ( $block_4_content ): ?>
                        <div class="c-info-cta__content"><?php echo $block_4_content; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
