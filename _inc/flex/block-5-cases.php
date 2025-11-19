<?php
// block_5_cases
if ( get_row_layout() !== 'block_5_cases' ) { return; }
$block_5_title = get_sub_field('block_5_cases_title');
$block_5_subtitle = get_sub_field('block_5_cases_subtitle');
$block_5_content = get_sub_field('block_5_cases_content');
$block_5_link = get_sub_field('block_5_cases_link');
?>
<div class="c-cases-block u-block-padding--xl">
  <div class="o-container">
    <div class="o-row">
      <div class="o-col--xxs-12 o-col--md-8 o-col--offset-md-2">
        <div class="u-text--center">
          <?php if ( $block_5_subtitle ): ?><p class="u-text--line u-text--sm u-text--accent-3"><?php echo $block_5_subtitle; ?></p><?php endif; ?>
          <?php if ( $block_5_title ): ?><h2 class="u-text--accent-3 u-text--uppercase"><?php echo $block_5_title; ?></h2><?php endif; ?>
          <?php if ( $block_5_content ): ?><?php echo $block_5_content; ?><?php endif; ?>
        </div>
      </div>
    </div>
    <div class="o-row">
      <div class="o-col--xxs-12">
        <?php if( get_sub_field('block_5_cases_blocks') ): ?>
          <div class="c-cases-block__items">
            <?php while( has_sub_field('block_5_cases_blocks') ): 
              $block_5_revenue = get_sub_field('block_5_cases_revenue');
              $block_5_description = get_sub_field('block_5_cases_description');
              $block_5_type = get_sub_field('block_5_cases_type');
            ?>
            <div class="c-cases-block__item">
              <div class="c-cases-block__revenue">
                <?php if ( $block_5_revenue ): ?><h3 class="c-cases-block__title"><?php echo $block_5_revenue; ?></h3><?php endif; ?>
                <?php if ( $block_5_type ): ?><p class="c-cases-block__type"><?php echo $block_5_type; ?></p><?php endif; ?>
              </div>
              <?php if ( $block_5_description ): ?><div class="c-cases-block__description"><?php echo $block_5_description; ?></div><?php endif; ?>
            </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <?php if ( $block_5_link ): ?>
          <a href="<?php echo $block_5_link['url']; ?>" class="c-btn--text"><?php echo $block_5_link['title']; ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
