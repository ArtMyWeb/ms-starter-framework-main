<?php
$main_img = get_sub_field('home_video_main_image');
$main_iframe = get_sub_field('home_video_main_iframe');
$subtitle = get_sub_field('home_video_subtitle');
$title    = get_sub_field('home_video_title');
$content  = get_sub_field('home_video_content');
?>
<section class="video-section bg-dark text-white">
  <div class="container">
    <div class="main-video grid grid-cols-1 md:grid-cols-2 gap-10 mb-[4rem]">
      <div class="video-block">
        <?php
          $allowed_iframe = array(
            'iframe' => array(
              'src' => true,
              'width' => true,
              'height' => true,
              'frameborder' => true,
              'allow' => true,
              'allowfullscreen' => true,
              'title' => true,
              'loading' => true,
              'referrerpolicy' => true,
              'style' => true,
              'class' => true
            )
          );

          if (!empty($main_iframe)) {
            echo wp_kses($main_iframe, $allowed_iframe);
          } elseif (!empty($main_img['url'])) { ?>
            <img src="<?php echo esc_url($main_img['url']); ?>" alt="">
          <?php } ?>
      </div>
      <div class="video-content">
        <div class="vertical-border mb-10">
          <?php if ($subtitle): ?><h4 class="subtitle pb-2"><?php echo esc_html($subtitle); ?></h4><?php endif; ?>
          <?php if ($title): ?><h2><?php echo esc_html($title); ?></h2><?php endif; ?>
        </div>
        <div class="content pl-[32px] max-sm:pl-0">
          <?php if ($content): ?><p><?php echo esc_html($content); ?></p><?php endif; ?>
        </div>
      </div>
    </div>
    <div class="grid-video grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <?php if (have_rows('home_video_items')): while (have_rows('home_video_items')): the_row();
        $img = get_sub_field('home_video_item_image');
        $ifr = get_sub_field('home_video_item_iframe');
        $ttl = get_sub_field('home_video_item_title');
        $exc = get_sub_field('home_video_item_excerpt');
        $lnk = get_sub_field('home_video_item_link');
      ?>
      <article class="video-item">
        <?php if (!empty($ifr)) { ?>
          <div class="flex flex-col">
            <div class="video-img">
              <?php echo wp_kses($ifr, $allowed_iframe); ?>
            </div>
            <div class="blog-content flex flex-col text-white z-10 vertical-border bg-light-dark/90 p-5 bottom-0 left-0 w-full">
              <?php if ($ttl): ?><h3 class="text-[1.375rem]/[1.2] font-archivo font-semibold pb-2"><?php echo esc_html($ttl); ?></h3><?php endif; ?>
              <div class="blog-excerpt"><div class=""><div class="overflow-hidden"><?php if ($exc): ?><p><?php echo esc_html($exc); ?></p><?php endif; ?></div></div></div>
            </div>
          </div>
        <?php } else { ?>
          <a href="<?php echo !empty($lnk['url']) ? esc_url($lnk['url']) : '#'; ?>" class="flex flex-col" target="<?php echo isset($lnk['target']) ? esc_attr($lnk['target']) : '_self'; ?>">
            <div class="video-img">
              <?php if (!empty($img['url'])): ?><img src="<?php echo esc_url($img['url']); ?>" alt=""><?php endif; ?>
            </div>
            <div class="blog-content flex flex-col text-white z-10 vertical-border bg-light-dark/90 p-5 bottom-0 left-0 w-full">
              <?php if ($ttl): ?><h3 class="text-[1.375rem]/[1.2] font-archivo font-semibold pb-2"><?php echo esc_html($ttl); ?></h3><?php endif; ?>
              <div class="blog-excerpt"><div class=""><div class="overflow-hidden"><?php if ($exc): ?><p><?php echo esc_html($exc); ?></p><?php endif; ?></div></div></div>
            </div>
          </a>
        <?php } ?>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
