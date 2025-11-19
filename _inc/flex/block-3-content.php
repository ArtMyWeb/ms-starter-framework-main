<?php
// block_3_content
if ( get_row_layout() !== 'block_3_content' ) { return; }
$block_3_title = get_sub_field('block_3_content_title');
$block_3_content = get_sub_field('block_3_content');
?>
<div class="c-content-primary u-block-padding--lg">
    <div class="o-container">
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
