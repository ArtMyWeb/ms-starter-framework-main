<?php
$subtitle = get_sub_field('home_sa_subtitle');
$title    = get_sub_field('home_sa_title');
$content  = get_sub_field('home_sa_content');
$btn      = get_sub_field('home_sa_button');
$img_bg   = get_sub_field('home_sa_left_image');
$img_photo= get_sub_field('home_sa_photo_image');
?>
<section class="why-hire-section relative bg-cover bg-no-repeat">
  <div class="container relative z-10">
    <div class="py-0 grid grid-cols-1 lg:grid-cols-2 gap-20">
      <div class="text-block max-w-[530px]">
        <div class="vertical-border mb-10">
          <?php if ($subtitle): ?><h4 class="subtitle text-balance"><?php echo esc_html($subtitle); ?></h4><?php endif; ?>
          <?php if ($title): ?><h2 class="text-balance text-dark"><?php echo esc_html($title); ?></h2><?php endif; ?>
        </div>
        <div class="content-part pl-[32px] max-sm:pl-0">
          <?php if ($content): ?><p><?php echo esc_html($content); ?></p><?php endif; ?>
          <?php if (!empty($btn['url'])): ?><a href="<?php echo esc_url($btn['url']); ?>" class="button" target="<?php echo isset($btn['target']) ? esc_attr($btn['target']) : '_self'; ?>"><?php echo esc_html($btn['title'] ?: 'Learn more'); ?></a><?php endif; ?>
        </div>
      </div>
      <div class="image-block -order-1 relative flex flex-col gap-5">
        <div class="img-bg flex items-center gap-5 ">
            <div class="img-wrap w-full">
          <?php if (!empty($img_bg['url'])): ?><img src="<?php echo esc_url($img_bg['url']); ?>" alt="" class="w-full"><?php endif; ?>
            </div>
          <div class="three-lines vertical-lines flex lg:stretch h-full justify-center gap-4 max-sm:hidden">
            <div class="line bg-rotate-gold vertical w-[10px] h-full"></div>
            <div class="line bg-rotate-gold w-[10px] h-full"></div>
            <div class="line bg-rotate-gold w-[10px] h-full"></div>
          </div>
        </div>
        <div class="photo-img absolute bottom-0 right-0 lg:max-w-[430px] max-w-[250px]">
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
