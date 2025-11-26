
<?php 
$footer_logo = get_field('footer_logo', 'option');
$footer_copyright = get_field('footer_copyright', 'option');
if ( !$footer_copyright ) {
    $footer_copyright = get_bloginfo( 'name' );
}else{
    $footer_copyright = str_replace( '{year}', date('Y'), $footer_copyright );
}
$info_footer_contact_form_title = get_field('info_footer_contact_form_title', 'option');
$info_footer_contact_form_subtitle = get_field('info_footer_contact_form_subtitle', 'option');
$info_footer_contact_form = get_field('info_footer_contact_form', 'option');
// map
$info_map_title = get_field('info_map_title', 'option');
$info_map_address = get_field('info_map', 'option');
// time 
$info_hours = get_field('info_hours', 'option');
?>

<footer id="site-footer" class="relative overflow-hidden bg-[url('/wp-content/uploads/2025/11/footer-bg.png')] no-repeat bg-cover">
    <!-- START COMPONENT : footer-banner -->
    <div class="footer-banner ">

        <div class="container pb-0">



            <div class=" grid lg:gap-20 gap-10 grid-cols-1 md:grid-cols-[2fr_3fr] relative z-10 !mb-10">
                <div class=" ">

                    <div class="contact-us-widget bg-dark text-white px-8 py-10 h-full">
                        <div class="contact-form-wrapper sidebar">
                            <p class="text-2xl font-archivo text-center text-light-gold"><?php echo esc_html($info_footer_contact_form_title); ?></p>
                            <h3 class="text-white text-[54px] leading-[120%] my-4 text-center font-semibold"><?php echo esc_html($info_footer_contact_form_subtitle); ?></h3>
                            <div class="form-shortcode"><?php echo do_shortcode($info_footer_contact_form); ?></div>

                        </div>
                    </div>

                </div>
                <div class="place-info flex flex-col gap-5">
                    <div class="footer-map md:py-6 md:px-8 max-md:mb-10 [&>iframe]:h-full bg-dark p-[20px] ">
                        <p class="text-white text-[1.5rem] font-archivo"> <?php echo esc_html($info_map_title); ?></p>
                        <p>
                            <?php echo $info_map_address  ?>
                        </p>
                    </div>
                    <div class="contacts grid grid-cols-[repeat(auto-fit,minmax(200px,1fr))] lg:grid-cols-[3fr_3fr_5fr] gap-1 px-5 py-[30px] bg-dark">
                        <div class="footer-widget-column">
                            <h4 class="font-worksans font-semibold">Portsmouth Office</h4>
                            <p class="font-pontano">1 New Hampshire Avenue1st FloorPortsmouth NH 03801</p>
                            <a href="tel:6032596726">603-259-6726</a>
                        </div>
                        <div class="footer-widget-column">
                            <h4 class="font-worksans font-semibold">Concord office</h4>
                            <p class="font-pontano">5 Warren StreetSuite 2AConcord, NH 03301</p>
                            <a href="tel:6032596726">603-259-6726</a>
                        </div>
                        <div class="footer-widget-column call-us flex flex-col gap-4">
                            <h3><?php echo esc_html($info_hours); ?></h3>
                            <div class="divider h-[1px] bg-[#FAF1A7] w-full"></div>
                            <a href="tel:6032596726">603-802-8100</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- END COMPONENT : footer-banner -->
    <div class="background-footer bg-dark  py-3">
        <div class="container relative py-3 flex  gap-4 justify-between max-sm:flex-col max-sm:gap-6">
            <div class="footer-col lg:max-w-[300px] sm:max-w-[50%] max-w-full text-white flex flex-col gap-7 ">
                <a href="/" class="logo"> <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>"></a>
                <p>While this website provides general information, it does not constitute legal advice. The best way to get guidance on your specific legal issue is to contact a lawyer. To schedule a meeting with Becker Legal, please call&nbsp;603-259-6726&nbsp;or complete the intake form below. Fields marked with an * are required</p>
                <div class="social">
                    <ul class="flex gap-4">
                        <?php if (have_rows('social', 'option')): ?>
                            <?php while (have_rows('social', 'option')): the_row();
                                $social_icon = get_sub_field('social_icon');
                                $social_title = get_sub_field('social_title');
                                $social_link = get_sub_field('social_link');
                                if ($social_icon && $social_link): ?>
                                    <li>
                                        <a href="<?php echo esc_url($social_link); ?>" target="_blank" rel="noopener noreferrer" title="<?php echo esc_attr($social_title); ?>">
                                            <i class="<?php echo esc_attr($social_icon); ?>"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="footer-grid-links grid lg:grid-cols-3 md:grid-cols-2 grid-cols-2 w-full gap-0 text-white lg:pt-20">
                <div>
               <?php 
               // render widget area 'footer-1'
               if ( is_active_sidebar( 'sidebar-footer-1' ) ) {
                   dynamic_sidebar( 'sidebar-footer-1' );
               }
               ?>
                </div>
                <div>
                 <?php 
               // render widget area 'footer-1'
               if ( is_active_sidebar( 'sidebar-footer-2' ) ) {
                   dynamic_sidebar( 'sidebar-footer-2' );
               }
               ?>
                </div>
                <div>
                    <?php 
               // render widget area 'footer-1'
               if ( is_active_sidebar( 'sidebar-footer-3' ) ) {
                   dynamic_sidebar( 'sidebar-footer-3' );
               }
               ?>
                </div>

            </div>
        </div>
        <div class="container py-0 text-center text-white">
    <?php echo $footer_copyright ?> 
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>