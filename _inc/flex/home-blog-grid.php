<?php
?>
<section class="blog-section">
  <div class="container">
    <h2 class="text-center mb-10">Blog</h2>
    <div class="blog-grid grid grid-cols-1 col-3 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <?php if (have_rows('home_bg_items')): while (have_rows('home_bg_items')): the_row();
        $img = get_sub_field('home_bg_item_image');
        $ttl = get_sub_field('home_bg_item_title');
        $exc = get_sub_field('home_bg_item_excerpt');
        $lnk = get_sub_field('home_bg_item_link');
      ?>
      <article class="blog-item group h-full overflow-hidden">
        <div class="relative">
          <div class="blog-img h-full max-h-[475px]">
            <?php if (!empty($img['url'])): ?><img class="w-full h-auto object-cover" src="<?php echo esc_url($img['url']); ?>" alt=""><?php endif; ?>
          </div>
          <div class="blog-content flex flex-col text-white z-10 vertical-border bg-light-dark/90 p-5 !absolute bottom-0 left-0 w-full">
            <?php if ($ttl): ?><h3 class="text-[1.375rem]/[1.2] font-archivo font-semibold pb-2"><?php echo esc_html($ttl); ?></h3><?php endif; ?>
            <div class="blog-excerpt"><div class=" "><div class=""><p><?php echo esc_html($exc ?: ''); ?></p></div></div></div>
            <?php if (!empty($lnk['url'])): ?><a href="<?php echo esc_url($lnk['url']); ?>" class="text-light-gold text-[1rem]/[1.2] font-archivo font-medium underline underline-offset-5" target="<?php echo isset($lnk['target']) ? esc_attr($lnk['target']) : '_self'; ?>"><?php echo esc_html($lnk['title'] ?: 'Read More'); ?></a><?php endif; ?>
          </div>
        </div>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
