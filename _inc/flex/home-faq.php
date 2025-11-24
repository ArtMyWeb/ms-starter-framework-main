<?php
$title = get_sub_field('home_faq_title');
?>
<section class="accordion-section bg-no-repeat bg-cover" style="background-image:url('<?php echo get_template_directory_uri(); ?>/_dist/img/faq.png');">
  <div class="container">
    <?php if ($title): ?><h2 class="text-center text-[30px]/[1.2] text-white capitalize mb-[60px]"><?php echo esc_html($title); ?></h2><?php endif; ?>
    <div class="accordion">
      <?php if (have_rows('home_faq_items')): while (have_rows('home_faq_items')): the_row();
        $q = get_sub_field('home_faq_q');
        $a = get_sub_field('home_faq_a');
      ?>
      <div class="accordion-item vertical-border p-6 mb-6 bg-light-dark">
        <div class="accordion-header">
          <?php if ($q): ?><p class="!text-[1.25rem]/[1.2] text-light-gold max-sm:!text-[1.15rem]"><?php echo esc_html($q); ?></p><?php endif; ?>
            
        </div>
        <div class="accordion-content-container">
          <div class="accordion-content text-white ">
            <?php if ($a): echo wp_kses_post($a); endif; ?>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
