<?php
$title = get_sub_field('home_ti_title');
?>
<section class="accordion-section bg-no-repeat bg-cover  bg-dark" >
  <div class="container">
    <?php if ($title): ?><h2 class="text-center text-[30px]/[1.2] font-normal text-white capitalize mb-[60px]"><?php echo esc_html($title); ?></h2><?php endif; ?>
    <div class="trustindex-widget">
      <?php if(get_sub_field('home_ti_widget_code')): ?>
        <?php echo do_shortcode(get_sub_field('home_ti_widget_code')); ?>
      <?php endif; ?>
      </div>
  </div>
</section>