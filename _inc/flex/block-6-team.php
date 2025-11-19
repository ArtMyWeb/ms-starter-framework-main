<?php
// block_6_team
if ( get_row_layout() !== 'block_6_team' ) { return; }
$block_6_title = get_sub_field('block_6_team_title');
$block_6_content = get_sub_field('block_6_team_content');
?>
<div class="c-team u-block-padding--lg">
  <div class="o-container">
    <div class="o-row">
      <div class="o-col--xxs-12">
        <?php if ( $block_6_title ): ?><h2><?php echo $block_6_title; ?></h2><?php endif; ?>
        <?php if ( $block_6_content ): ?><?php echo $block_6_content; ?><?php endif; ?>
        <?php if( get_sub_field('block_6_team_blocks') ): ?>
          <div class="c-team__blocks">
            <?php while( has_sub_field('block_6_team_blocks') ): 
              $block_6_img  = get_sub_field('block_6_team_image');
              $block_6_b_title = get_sub_field('block_6_team_title');
              $block_6_subtitle = get_sub_field('block_6_team_subtitle');
              $block_6_link = get_sub_field('block_6_team_link');
            ?>
            <div class="c-team__block u-text--center">
              <div class="c-team__item">
                <?php if ( $block_6_img ): ?>
                  <img class="c-team__img u-reset--margin b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="<?php echo $block_6_img['url']; ?>" alt="<?php echo $block_6_img['alt']; ?>" width="<?php echo $block_6_img['width']; ?>" height="<?php echo $block_6_img['height']; ?>">
                <?php endif; ?>
                <?php if ( $block_6_link ): ?><a class="c-btn c-btn--primary" href="<?php echo $block_6_link['url']; ?>"><?php echo $block_6_link['title']; ?></a><?php endif; ?>
              </div>
              <div class="c-team__info">
                <?php if ( $block_6_b_title ): ?><h3 class="c-team__title u-reset-font--primary u-text--uppercase u-text--letter-spacing"><?php echo $block_6_b_title; ?></h3><?php endif; ?>
                <?php if ( $block_6_subtitle ): ?><p class="c-team__subtitle u-reset-font--secondary u-text--accent-10"><?php echo $block_6_subtitle; ?></p><?php endif; ?>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
