<?php
$title = get_the_title(  );
$hero_text = get_field('hero_text');
 if(!empty($hero_text) ){
    if(!empty($hero_text['sub_title']) ){
    $subtitle = '<span class="text-light-gold"> ' . $hero_text['sub_title'] . '</span> ' ;
    }else{
        $subtitle = '';
    }
    $title = $hero_text['title'] .  $subtitle ;
 }
?>
     <section class=" relative global-hero  lg:pt-20  max-sm:pt-10  ">
        <div class="absolute inset-0">
            <img src="/wp-content/uploads/2025/11/hero-logo-scaled.jpg" alt="" class="w-full h-full object-cover">
        </div>
        <div class="hero-overlay absolute inset-0 overflow-hidden"></div>
        <div class="person-content-overlay absolute pointer-events-none max-h-[230px] h-full w-full bottom-0"></div>
        <div class="container relative  py-0 z-10">
            <div class="hero hero-block grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[1fr_600px] gap-8">

                <div class="hero-text-wrapper content-center">
                    <div class="vertical-border !mb-[80px] align-middle content-center">

                        <h1 class="hero-title text-white text-left font-archivo justify-center    font-semibold  leading-[120%]">
 <?php echo $title; ?>
                          
                        </h1>
                        <div class="google-reviews flex items-center gap-2">
                            <img src="/wp-content/uploads/2025/11/Google_2015_logo.svg-2.svg" alt="Google Reviews" class="w-32">
                            <div class="right-side flex flex-col gap-2">
                                <div class="star-block flex gap-[3px]">
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                    ?>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M11.9456 9.54675C11.7729 9.71408 11.6936 9.95608 11.7329 10.1934L12.3256 13.4734C12.3756 13.7514 12.2583 14.0327 12.0256 14.1934C11.7976 14.3601 11.4943 14.3801 11.2456 14.2467L8.29292 12.7067C8.19026 12.6521 8.07626 12.6227 7.95959 12.6194H7.77892C7.71626 12.6287 7.65493 12.6487 7.59893 12.6794L4.64559 14.2267C4.49959 14.3001 4.33426 14.3261 4.17226 14.3001C3.77759 14.2254 3.51426 13.8494 3.57893 13.4527L4.17226 10.1727C4.21159 9.93341 4.13226 9.69008 3.95959 9.52008L1.55226 7.18675C1.35093 6.99141 1.28093 6.69808 1.37293 6.43341C1.46226 6.16941 1.69026 5.97675 1.96559 5.93341L5.27892 5.45275C5.53093 5.42675 5.75226 5.27341 5.86559 5.04675L7.32559 2.05341C7.36026 1.98675 7.40493 1.92541 7.45893 1.87341L7.51892 1.82675C7.55026 1.79208 7.58626 1.76341 7.62626 1.74008L7.69893 1.71341L7.81226 1.66675H8.09293C8.34359 1.69275 8.56426 1.84275 8.67959 2.06675L10.1589 5.04675C10.2656 5.26475 10.4729 5.41608 10.7123 5.45275L14.0256 5.93341C14.3056 5.97341 14.5396 6.16675 14.6323 6.43341C14.7196 6.70075 14.6443 6.99408 14.4389 7.18675L11.9456 9.54675Z" fill="#FBBC05" />
                                        </svg>
                                    <?php } ?>
                                </div>
                                <div class="reiew-text">
                                    <p class="text-white text-[13px] ">4.9 rating from 1000+ reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-image-person relative z-10 lg:justify-end flex justify-center ">
                    <img class="object-contain h-full max-h-[320px] self-end" src="/wp-content/uploads/2025/11/headshot-1.png" alt="">
                </div>



            </div>


        </div>
    </section>