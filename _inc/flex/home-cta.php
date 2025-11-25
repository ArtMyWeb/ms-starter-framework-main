<?php
$bg    = get_sub_field('home_cta_bg');
$logo  = get_sub_field('home_cta_logo');
$phone = get_sub_field('home_cta_phone');
$t1    = get_sub_field('home_cta_title_main');
$t2    = get_sub_field('home_cta_title_highlight');
$desc  = get_sub_field('home_cta_desc');
$btn   = get_sub_field('home_cta_button');
?>
<section class="cta-section relative text-white">
  <div class="image-overlay absolute inset-0 -z-1 <?php echo !empty($bg['url']) ? 'bg-cover' : ''; ?>" style="<?php echo !empty($bg['url']) ? 'background-image:url(' . esc_url($bg['url']) . ');' : ''; ?>">
    <div class="bg-overlay opacity-0 absolute inset-0 z-10 bg-dark/70"></div>
  </div>
  <div class="container-sm relative z-10">
    <div class="content-cta">
      <div class="flex flex-col items-center gap-8 text-center">
        <?php if (!empty($logo['url'])): ?><img style="max-width: 127px;" src="<?php echo esc_url($logo['url']); ?>" alt=""><?php endif; ?>
        <?php if ($phone): ?><span class="!text-[1.7rem]/[1.2] font-archivo">Schedule a Free Consultation | Call 24/7 <a class="!text-[1.7rem]/[1.2] font-archivo !no-underline" href="tel:<?php echo preg_replace('/\D+/', '', $phone); ?>"><?php echo esc_html($phone); ?></a></span><?php endif; ?>
        <h2 class="flex items-center flex-col lg:text-[72px]/[1] text-[48px]/[1] font-bold uppercase">
          <?php if ($t1): ?><span><?php echo esc_html($t1); ?></span><?php endif; ?>
          <?php if ($t2): ?><span class="text-transparent bg-clip-text bg-gradient-gold"><?php echo esc_html($t2); ?></span><?php endif; ?>
        </h2>
        <?php if ($desc): ?><p><?php echo esc_html($desc); ?></p><?php endif; ?>
        <?php if (!empty($btn['url'])): ?><a href="<?php echo esc_url($btn['url']); ?>" class="button" target="<?php echo isset($btn['target']) ? esc_attr($btn['target']) : '_self'; ?>"><?php echo esc_html($btn['title'] ?: 'Get Started'); ?></a><?php endif; ?>
      </div>
    </div>
  </div>
  <div class="three-lines flex flex-col justify-center gap-5 relative z-10">
    <div class="line bg-gradient-gold h-[10px] w-full"></div>
    <div class="line bg-gradient-gold h-[10px] w-full"></div>
    <div class="line bg-gradient-gold h-[10px] w-full"></div>
  </div>
</section>
