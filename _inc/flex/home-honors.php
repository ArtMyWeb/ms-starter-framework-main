<?php
$title = get_sub_field('home_honors_title');
?>
<section class="honors-section bg-dark py-0">
  <div class="container">
    <div class="mb-6 flex gap-10 items-center">
      <?php if ($title): ?><h4 class="text-white font-archivo shrink-0 font-semibold"><?php echo esc_html($title); ?></h4><?php endif; ?>
      <div class="w-full h-[6px] bg-gradient-gold mb-6 grow-0"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php if (have_rows('home_honors_items')): while (have_rows('home_honors_items')): the_row();
        $it_title = get_sub_field('home_honors_item_title');
        $it_desc  = get_sub_field('home_honors_item_desc');
      ?>
        <div class="vertical-border bg-light-dark p-5 text-white">
          <?php if ($it_title): ?><h3 class="text-[1.25rem] font-semibold mb-4 leading-tight"><?php echo esc_html($it_title); ?></h3><?php endif; ?>
          <?php if ($it_desc): ?><p class="text-[0.9rem] leading-relaxed opacity-90"><?php echo esc_html($it_desc); ?></p><?php endif; ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
