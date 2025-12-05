<?php
$bg     = get_sub_field('home_hero_background_image');
$person = get_sub_field('home_hero_person_image');
$t1     = get_sub_field('home_hero_title_line1');
$t2     = get_sub_field('home_hero_title_line2');
$desc   = get_sub_field('home_hero_description');
$btn    = get_sub_field('home_hero_button'); // link array
?>
<section class="lg:pt-20 relative">
    <div class="absolute inset-0">
        <?php if (!empty($bg['url'])): ?>
            <img src="<?php echo esc_url($bg['url']); ?>" alt="" class="w-full h-full object-cover">
        <?php endif; ?>
    </div>
    <div class="hero-overlay absolute inset-0"></div>
    <div class="person-content-overlay absolute pointer-events-none max-h-[300px] h-full w-full bottom-0"></div>
    <div class="container relative py-0">
        <div class="home-hero hero-block">
            <h1 class="home-hero-title text-white text-center justify-center flex flex-col font-archivo  md:text-[80px]/[1.2] lg:text-[120px]/[109px] font-extrabold  uppercase">
                <?php if ($t1): ?><span><?php echo esc_html($t1); ?></span><?php endif; ?>
                <?php if ($t2): ?><span class="text-transparent bg-clip-text bg-gradient-gold"><?php echo esc_html($t2); ?></span><?php endif; ?>
            </h1>
            <div class="three-lines flex flex-col justify-center gap-4">
                <div class="line bg-gradient-gold h-[10px] w-full"></div>
                <div class="line bg-gradient-gold h-[10px] w-full"></div>
                <div class="line bg-gradient-gold h-[10px] w-full"></div>
            </div>
            <div class="person-content flex flex-col items-center text-center gap-10 relative pt-[400px] max-w-[770px] z-2 mx-auto p-10 -mt-[120px] max-sm:px-0">
                <?php if (!empty($person['url'])): ?>
                    <img class="person-img max-w-[100%] lg:max-w-[500px] absolute bottom-0 left-1/2 -translate-x-1/2 object-contain" src="<?php echo esc_url($person['url']); ?>" alt="">
                <?php endif; ?>
                <div class="person-info z-10 relative">
                    <?php if ($desc): ?><p class="text-white"><?php echo esc_html($desc); ?></p><?php endif; ?>
                    <?php if (!empty($btn['url'])): ?>
                        <a class="button" href="<?php echo esc_url($btn['url']); ?>" target="<?php echo isset($btn['target']) ? esc_attr($btn['target']) : '_self'; ?>"><?php echo esc_html($btn['title'] ?: 'Learn More'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
