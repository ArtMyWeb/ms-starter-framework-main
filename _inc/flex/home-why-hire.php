<?php
// Try both get_sub_field (for layout level) and direct field names
$img_bg_raw = get_sub_field('home_wh_image_bg');
$img_photo_raw = get_sub_field('home_wh_image_photo');

// If fields are empty, they might be named differently - try common variations
if (empty($img_bg_raw)) {
    $img_bg_raw = get_sub_field('image_bg') ?: get_sub_field('background_image') ?: get_sub_field('bg_image');
}
if (empty($img_photo_raw)) {
    $img_photo_raw = get_sub_field('image_photo') ?: get_sub_field('photo') ?: get_sub_field('image');
}

// Debug: log what we're getting
if (WP_DEBUG) {
    error_log('=== WHY HIRE DEBUG ===');
    error_log('Layout: ' . get_row_layout());
    error_log('img_bg type: ' . gettype($img_bg_raw) . ' | value: ' . print_r($img_bg_raw, true));
    error_log('img_photo type: ' . gettype($img_photo_raw) . ' | value: ' . print_r($img_photo_raw, true));
}

// Slides
$slides = have_rows('home_wh_slides');
 
// Process background image
$img_bg_url = '';
if (is_array($img_bg_raw) && !empty($img_bg_raw['url'])) {
    $img_bg_url = $img_bg_raw['url'];
} elseif (is_int($img_bg_raw)) {
    $img_bg_url = wp_get_attachment_image_url($img_bg_raw, 'full');
} elseif (is_string($img_bg_raw) && !empty($img_bg_raw)) {
    $img_bg_url = $img_bg_raw;
}

// Process photo image
$img_photo_url = '';
if (is_array($img_photo_raw) && !empty($img_photo_raw['url'])) {
    $img_photo_url = $img_photo_raw['url'];
} elseif (is_int($img_photo_raw)) {
    $img_photo_url = wp_get_attachment_image_url($img_photo_raw, 'full');
} elseif (is_string($img_photo_raw) && !empty($img_photo_raw)) {
    $img_photo_url = $img_photo_raw;
}
?>
<section class="msster why-hire-section relative shadow-[0_4px_4px_0_rgba(0,0,0,0.25)]">
  <div class="image-overlay absolute inset-0">
    <?php if (!empty($img_bg_url)): ?>
      <img class="w-full h-full object-bottom-left" src="<?php echo esc_url($img_bg_url); ?>" alt="">
    <?php endif; ?>
    <div class="absolute inset-0 bg-dark opacity-70"></div>
  </div>
  <div class="container relative z-10">
    <div class="py-0 grid grid-cols-1 lg:grid-cols-2 lg:gap-20  vertical-border overflow-hidden">
      <div class="swiper lg:max-w-[390px] max-w-full why-hire-swiper pb-20">
        <div class="swiper-wrapper">
          <?php if ($slides): while (have_rows('home_wh_slides')): the_row();
            $st = get_sub_field('home_wh_slide_title');
            $ic = get_sub_field('home_wh_slide_icon');
            $sb = get_sub_field('home_wh_slide_subtitle');
            $ds = get_sub_field('home_wh_slide_desc');
          ?>
            <div class="swiper-slide flex items-center">
              <div class="slide-content text-white flex flex-col items-center gap-5 text-center justify-center">
                <?php if ($st): ?><h2 class="lg:text-[4.25rem] text-5xl font-semibold"><?php echo esc_html($st); ?></h2><?php endif; ?>
                <div class="slide-icon w-[66px] h-[66px] mx-auto">
                  <?php if (!empty($ic['url'])): ?><img src="<?php echo esc_url($ic['url']); ?>" alt=""><?php endif; ?>
                </div>
                <div class="slide-about">
                  <?php if ($sb): ?><p class="lg:text-[1.876rem] text-[1.2rem] text-light-gold"><?php echo esc_html($sb); ?></p><?php endif; ?>
                  <?php if ($ds): ?><p class="lg:text-[1.75rem]/[1.3] text-[1rem]"><?php echo esc_html($ds); ?></p><?php endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="image-block relative flex flex-col gap-5">
        <div class="img-bg flex items-center gap-5 justify-between ">
          <div class="img-wrap w-full">
            <?php if (!empty($img_bg_url)): ?><img src="<?php echo esc_url($img_bg_url); ?>" alt=""><?php endif; ?>
          </div>
          
          <div class="three-lines vertical-lines flex lg:stretch h-full justify-center gap-4 max-sm:hidden">
            <div class="line bg-rotate-gold vertical w-[10px] h-full"></div>
            <div class="line bg-rotate-gold w-[10px] h-full"></div>
            <div class="line bg-rotate-gold w-[10px] h-full"></div>
          </div>
        </div>
        <div class="photo-img absolute bottom-0 right-0 lg:max-w-[430px] max-w-[250px]">
          <?php if (!empty($img_photo_url)): ?><img src="<?php echo esc_url($img_photo_url); ?>" alt=""><?php endif; ?>
        </div>
        <div class="three-lines horizontal-lines flex flex-col justify-center gap-4">
          <div class="line bg-gradient-gold h-[10px] w-full"></div>
          <div class="line bg-gradient-gold h-[10px] w-full"></div>
          <div class="line bg-gradient-gold h-[10px] w-full"></div>
        </div>
      </div>
    </div>
  </div>
</section>
