<?php
$t_main = get_sub_field('home_pb_title_main');
$t_high = get_sub_field('home_pb_title_highlight');
$desc   = get_sub_field('home_pb_desc');
$btn    = get_sub_field('home_pb_button');
?>
<section class="blog-section bg-[url()] bg-no-repeat">
  <div class="container">
    <div class="practice-areas pb-[70px]">
      <div class="vertical-border flex gap-5 justify-between">
        <div class="text-side max-w-[50%] flex flex-col gap-5">
          <h2>
            <?php if ($t_main): echo esc_html($t_main); endif; ?>
            <?php if ($t_high): ?><span class="text-light-brown"> <?php echo esc_html($t_high); ?></span><?php endif; ?>
          </h2>
          <?php if ($desc): ?><p><?php echo esc_html($desc); ?></p><?php endif; ?>
        </div>
        <div class="button-side self-end">
          <?php if (!empty($btn['url'])): ?>
            <a href="<?php echo esc_url($btn['url']); ?>" class="button" target="<?php echo isset($btn['target']) ? esc_attr($btn['target']) : '_self'; ?>"><?php echo esc_html($btn['title'] ?: 'Read more'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="blog-grid grid grid-cols-1 col-3 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <?php if (have_rows('home_pb_items')): while (have_rows('home_pb_items')): the_row();
        $img = get_sub_field('home_pb_item_image');
        $ttl = get_sub_field('home_pb_item_title');
        $exc = get_sub_field('home_pb_item_excerpt');
        $lnk = get_sub_field('home_pb_item_link');
      ?>
      <article class="blog-item group h-full overflow-hidden">
        <div class="relative">
          <div class="blog-img h-full max-h-[500px]">
            <?php if (!empty($img['url'])): ?><img class="w-full h-auto object-cover" src="<?php echo esc_url($img['url']); ?>" alt=""><?php endif; ?>
          </div>
          <div class="blog-content flex flex-col text-white z-10 vertical-border bg-light-dark/90 p-5 !absolute bottom-0 left-0 w-full">
            <?php if ($ttl): ?><h3 class="text-[1.375rem]/[1.2] font-archivo font-semibold pb-2"><?php echo esc_html($ttl); ?></h3><?php endif; ?>
            <div class="blog-excerpt">
              <div class="colapseble">
                <div class="overflow-hidden">
                  <?php if ($exc): ?><p><?php echo esc_html($exc); ?></p><?php endif; ?>
                </div>
              </div>
            </div>
            <?php if (!empty($lnk['url'])): ?><a href="<?php echo esc_url($lnk['url']); ?>" class="text-light-gold text-[1rem]/[1.2] font-archivo font-medium underline underline-offset-5" target="<?php echo isset($lnk['target']) ? esc_attr($lnk['target']) : '_self'; ?>"><?php echo esc_html($lnk['title'] ?: 'Read More'); ?></a><?php endif; ?>
          </div>
        </div>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
