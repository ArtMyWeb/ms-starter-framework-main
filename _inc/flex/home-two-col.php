<?php
$subtitle   = get_sub_field('home_tc_subtitle');
$title_main = get_sub_field('home_tc_title_main');
$title_high = get_sub_field('home_tc_title_highlight');
$l_title    = get_sub_field('home_tc_left_title');
$l_content  = get_sub_field('home_tc_left_content');
$r_title    = get_sub_field('home_tc_right_title');
$r_content  = get_sub_field('home_tc_right_content');
?>
<section class="two-col-section">
  <div class="container">
    <?php if ($subtitle): ?><h4 class="subtitle text-center mb-5"><?php echo esc_html($subtitle); ?></h4><?php endif; ?>
    <h2 class="mb-10 text-center">
      <?php echo esc_html($title_main ?: ''); ?>
      <?php if ($title_high): ?><span class="text-light-brown"> <?php echo esc_html($title_high); ?></span><?php endif; ?>
    </h2>
    <div class="grid-block grid grid-cols-1 lg:grid-cols-2 gap-[60px]">
      <div class="grid-item">
        <?php if ($l_title): ?><h3><?php echo esc_html($l_title); ?></h3><?php endif; ?>
        <?php if ($l_content): echo wp_kses_post($l_content); endif; ?>
      </div>
      <div class="grid-item">
        <?php if ($r_title): ?><h3><?php echo esc_html($r_title); ?></h3><?php endif; ?>
        <?php if ($r_content): echo wp_kses_post($r_content); endif; ?>
      </div>
    </div>
  </div>
</section>
