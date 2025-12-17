<?php
$title_main = get_sub_field('block_pa_title_main');
$title_highlight = get_sub_field('block_pa_title_highlight');
$description = get_sub_field('block_pa_description');
$button = get_sub_field('block_pa_button');
$selected_pages = get_sub_field('block_pa_pages');
?>
<section class="practice-areas-section py-16">
  <div class="container">
    <div class="practice-areas-header pb-[70px]">
      <div class="flex gap-5 justify-between max-sm:flex-col max-sm:gap-3">
        <div class="text-side lg:max-w-[50%] flex flex-col gap-5 vertical-border">
          <h2>
            <?php if ($title_main): echo esc_html($title_main); endif; ?>
            <?php if ($title_highlight): ?><span class="text-light-brown"> <?php echo esc_html($title_highlight); ?></span><?php endif; ?>
          </h2>
          <?php if ($description): ?><p><?php echo esc_html($description); ?></p><?php endif; ?>
        </div>
        <div class="button-side self-end max-sm:w-full">
          <?php if (!empty($button['url'])): ?>
            <a href="<?php echo esc_url($button['url']); ?>" class="button" target="<?php echo isset($button['target']) ? esc_attr($button['target']) : '_self'; ?>"><?php echo esc_html($button['title'] ?: 'View All'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="practice-areas-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <?php 
      if ($selected_pages):
        foreach ($selected_pages as $page_id):
          $page_title = get_the_title($page_id);
          $page_permalink = get_permalink($page_id);
          $page_thumbnail = get_the_post_thumbnail_url($page_id, 'large');
          $page_excerpt = has_excerpt($page_id) ? get_the_excerpt($page_id) : wp_trim_words(get_post_field('post_content', $page_id), 20);
      ?>
      <article class="practice-item group h-full overflow-hidden">
        <div class="relative">
          <div class="practice-img h-full max-h-[475px]">
            <?php if ($page_thumbnail): ?>
              <img class="w-full h-auto object-cover aspect-[3/4]" src="<?php echo esc_url($page_thumbnail); ?>" alt="<?php echo esc_attr($page_title); ?>">
            <?php else: ?>
              <img class="w-full h-auto object-cover aspect-[3/4]" src="/wp-content/uploads/2025/11/Bg.png" alt="<?php echo esc_attr($page_title); ?>">
            <?php endif; ?>
          </div>
          <div class="practice-content flex flex-col text-white z-10 vertical-border bg-light-dark/90 p-5 !absolute bottom-0 left-0 w-full">
            <h3 class="text-[1.375rem]/[1.2] font-archivo font-semibold pb-2">
              <a href="<?php echo esc_url($page_permalink); ?>" class="hover:text-light-gold transition-colors">
                <?php echo esc_html($page_title); ?>
              </a>
            </h3>
            <div class="practice-excerpt">
              <div class="">
                <div class="">
                  <p><?php echo esc_html($page_excerpt); ?></p>
                </div>
              </div>
            </div>
            <a href="<?php echo esc_url($page_permalink); ?>" class="text-light-gold text-[1rem]/[1.2] font-archivo font-medium underline underline-offset-5 hover:text-white transition-colors">
              Learn More
            </a>
          </div>
        </div>
      </article>
      <?php 
        endforeach;
      else:
      ?>
      <div class="col-span-full text-center py-10">
        <p class="text-gray-600">No practice areas selected.</p>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
