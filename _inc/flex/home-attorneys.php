<?php
$t_main = get_sub_field('home_att_title_main');
$t_high = get_sub_field('home_att_title_highlight');
?>
<section class="meet-your-attorneys bg-[#0D0D0D]">
  <div class="container-sm">
    <h2 class="text-center text-white mb-[54px]">
      <?php echo esc_html($t_main ?: ''); ?>
      <?php if ($t_high): ?><span class="text-light-gold"> <?php echo esc_html($t_high); ?></span><?php endif; ?>
    </h2>
    <div class="attorneys-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-20">
      <?php if (have_rows('home_att_items')): while (have_rows('home_att_items')): the_row();
        $photo = get_sub_field('home_att_item_image');
        $name  = get_sub_field('home_att_item_name');
        $role1 = get_sub_field('home_att_item_role1');
        $role2 = get_sub_field('home_att_item_role2');
      ?>
      <article class="attorneys-item overflow-hidden flex flex-col justify-end aspect-[25/34] bg-[url(/wp-content/uploads/2025/11/Frame-1171276039.svg)] !pl-0 vertical-border bg-[#2A2A2B]">
        <div class="overlay-block absolute z-[5] inset-0 bg-[linear-gradient(180deg,rgba(0,0,0,0.21)_50%,rgba(0,0,0,0.82)_100%)]"></div>
        <div class="image-overlay-block relative z-[4] max-h-[520px]">
          <?php if (!empty($photo['url'])): ?><img class="object-contain h-auto w-full" src="<?php echo esc_url($photo['url']); ?>" alt=""><?php endif; ?>
        </div>
        <div class="content-block flex flex-col gap-2 justify-center items-center absolute z-10 w-full bottom-10 max-w-[320px] mx-auto left-1/2 -translate-x-1/2">
          <?php if ($name): ?><h3 class="text-[#F1BE48]"><?php echo esc_html($name); ?></h3><?php endif; ?>
          <div class="position text-white flex gap-2">
            <?php if ($role1): ?><span><?php echo esc_html($role1); ?></span><?php endif; ?>
            <?php if ($role2): ?><span class="left-divider"><?php echo esc_html($role2); ?></span><?php endif; ?>
          </div>
        </div>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
