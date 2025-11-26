            <?php  if( get_row_layout() == 'block_7_video' ):
                $block_7_title = get_sub_field('block_7_video_title');
            ?>
  <div class="container">
                <h3 class="vertical-border text-[30px] font-archivo font-medium"><?php echo esc_html($block_7_title ?: 'Our Attorneys'); ?></h3>
            <!-- Team content goes here -->
     <div class="grid-video grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-7" >
      <?php
      $query = new WP_Query(array(
          'post_type' => 'media-post',
          'posts_per_page' => -1,
      ));
      if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
        $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
        $ttl = get_the_title();
        $exc = get_field('short_text');
        $lnk = get_permalink();
      ?>
      <article class="video-item">
        <a href="<?php echo esc_url($lnk); ?>" class="flex flex-col">
          <div class="video-img">
            <?php if ($img_url): ?><img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($ttl); ?>"><?php endif; ?>
          </div>
          <div class="blog-content flex flex-col text-white z-10 vertical-border bg-light-dark/90 p-5 bottom-0 left-0 w-full">
            <?php if ($ttl): ?><h3 class="text-[1.375rem]/[1.2] font-archivo font-semibold pb-2"><?php echo esc_html($ttl); ?></h3><?php endif; ?>
            <div class="blog-excerpt"><div class=""><div class="overflow-hidden"><?php if ($exc): ?><p><?php echo esc_html($exc); ?></p><?php endif; ?></div></div></div>
          </div>
        </a>
      </article>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    </div>

            <?php endif; ?>