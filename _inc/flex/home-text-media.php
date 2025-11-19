<?php
$image    = get_sub_field('home_tm_image');
$h_main   = get_sub_field('home_tm_heading_main');
$h_high   = get_sub_field('home_tm_heading_highlight');
$subtitle = get_sub_field('home_tm_subtitle');
$content  = get_sub_field('home_tm_content');
$btn      = get_sub_field('home_tm_button');
?>
<section class="text-media-section bg-dark">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-[623px_1fr] gap-[100px] text-white flex-1">
      <div class="relative">
        <?php if (!empty($image['url'])): ?>
          <img class="w-full h-full object-cover max-h-[750px]" src="<?php echo esc_url($image['url']); ?>" alt="">
        <?php endif; ?>
      </div>
      <div>
        <div class="vertical-border mb-5">
          <h2 class="text-white flex flex-col ">
            <?php if ($h_main): ?><span><?php echo esc_html($h_main); ?></span><?php endif; ?>
            <?php if ($h_high): ?><span class="text-light-gold"><?php echo esc_html($h_high); ?></span><?php endif; ?>
          </h2>
          <?php if ($subtitle): ?><h4 class="subtitle"><?php echo esc_html($subtitle); ?></h4><?php endif; ?>
        </div>
        <div class="text-about mb-11">
          <?php if ($content): echo wp_kses_post($content); endif; ?>
        </div>
        <?php if (!empty($btn['url'])): ?>
          <a href="<?php echo esc_url($btn['url']); ?>" class="button" target="<?php echo isset($btn['target']) ? esc_attr($btn['target']) : '_self'; ?>"><?php echo esc_html($btn['title'] ?: 'Learn more'); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
