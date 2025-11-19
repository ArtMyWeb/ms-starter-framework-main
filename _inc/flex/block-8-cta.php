<?php
// block_8_cta
if ( get_row_layout() !== 'block_8_cta' ) { return; }
$block_8_title = get_sub_field('block_8_cta_title');
$block_8_content = get_sub_field('block_8_cta_content');
?>
<div class="c-cta u-block-padding--lg">
  <div class="o-container">
    <div class="o-row">
      <div class="o-col--xxs-12">
        <div class="c-cta-info">
          <?php if ( $block_8_title ): ?><h2><?php echo $block_8_title; ?></h2><?php endif; ?>
          <?php if ( $block_8_content ): ?><?php echo $block_8_content; ?><?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
