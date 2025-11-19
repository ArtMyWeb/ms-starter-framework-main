<?php
// Slides
$slides = have_rows('home_wh_slides');
$img_bg = get_sub_field('home_wh_image_bg');
$img_photo = get_sub_field('home_wh_image_photo');
?>
<section class="why-hire-section relative shadow-[0_4px_4px_0_rgba(0,0,0,0.25)]">
  <div class="image-overlay absolute inset-0">
    <?php if (!empty($img_bg['url'])): ?>
      <img class="w-full h-full object-bottom-left" src="<?php echo esc_url($img_bg['url']); ?>" alt="">
    <?php endif; ?>
    <div class="absolute inset-0 bg-dark opacity-70"></div>
  </div>
  <div class="container relative z-10">
    <div class="py-0 grid grid-cols-1 lg:grid-cols-2 gap-20 vertical-border">
      <div class="swiper max-w-[390px] why-hire-swiper">
        <div class="swiper-wrapper">
          <?php if ($slides): while (have_rows('home_wh_slides')): the_row();
            $st = get_sub_field('home_wh_slide_title');
            $ic = get_sub_field('home_wh_slide_icon');
            $sb = get_sub_field('home_wh_slide_subtitle');
            $ds = get_sub_field('home_wh_slide_desc');
          ?>
            <div class="swiper-slide flex items-center">
              <div class="slide-content text-white flex flex-col items-center gap-5 text-center justify-center">
                <?php if ($st): ?><h2 class="text-[4.25rem] font-semibold"><?php echo esc_html($st); ?></h2><?php endif; ?>
                <div class="slide-icon w-[66px] h-[66px] mx-auto">
                  <?php if (!empty($ic['url'])): ?><img src="<?php echo esc_url($ic['url']); ?>" alt=""><?php endif; ?>
                </div>
                <div class="slide-about">
                  <?php if ($sb): ?><p class="text-[1.876rem] text-light-gold"><?php echo esc_html($sb); ?></p><?php endif; ?>
                  <?php if ($ds): ?><p class="text-[1.75rem]/[1.3]"><?php echo esc_html($ds); ?></p><?php endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="image-block relative flex flex-col gap-5">
        <div class="img-bg flex items-center gap-5 max-h-[450px]">
          <?php if (!empty($img_bg['url'])): ?><img src="<?php echo esc_url($img_bg['url']); ?>" alt=""><?php endif; ?>
          <div class="three-lines vertical-lines flex stretch h-full justify-center gap-4">
            <div class="line bg-rotate-gold vertical w-[10px] h-full"></div>
            <div class="line bg-rotate-gold w-[10px] h-full"></div>
            <div class="line bg-rotate-gold w-[10px] h-full"></div>
          </div>
        </div>
        <div class="photo-img absolute bottom-0 right-0 max-w-[430px]">
          <?php if (!empty($img_photo['url'])): ?><img src="<?php echo esc_url($img_photo['url']); ?>" alt=""><?php endif; ?>
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
