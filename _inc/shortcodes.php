<?php

/* ==========================================
   Remove <p>, <br> from Shortcodes
========================================== */

/**
 * Remove empty paragraphs created by wpautop()
 */
function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}

/**
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 */
function remove_extra_empty_p( $content ) {

    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );

}

add_filter('the_content', 'remove_extra_empty_p' );
add_filter('the_content', 'remove_empty_p');


//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop() {

    add_filter('acf_the_content', 'remove_extra_empty_p' );
    add_filter('acf_the_content', 'remove_empty_p');

}

add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

/* ==========================================
   Define Shortcodes Button
========================================== */

function register_button( $buttons ) {
   array_push( $buttons, "|", "shortcodes" );
   return $buttons;
}

function add_plugin( $plugin_array ) {
   $plugin_array['shortcodes'] = get_template_directory_uri() . '/shortcode.js';
   return $plugin_array;
}

function shortcodes_button() {

   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
      return;
   }

   if ( get_user_option('rich_editing') == 'true' ) {
      add_filter( 'mce_external_plugins', 'add_plugin' );
      add_filter( 'mce_buttons', 'register_button' );
   }

}

add_action('init', 'shortcodes_button');

/* ==========================================
   Add Shortcodes
========================================== */

// Spacer
function spacer_shortcode($atts) {

	$atts = shortcode_atts(
        array(
            'color' => 'black'
        ), $atts
    );

	return '<hr class="u-block-hr--' . $atts[ 'color' ] . '">';
}

add_shortcode('spacer', 'spacer_shortcode');

// Button
function button_shortcode($atts) {

	extract(
        shortcode_atts(array(
            'color' => 'black',
            'href'  => 'http://example.com',
            'text'  => 'Button Text',
            'target' => '',
            'title' => 'Button Title'
        ), $atts )
    );

	if ( $target == "true" ) {
        return '<a class="c-btn c-btn--' . $atts[ 'color' ] . '" target="blank" href="' . $atts[ 'href' ] . '" title="' . $atts[ 'title' ] . '"> ' . $atts[ 'text' ] . ' </a>';
    } else {
        return '<a class="c-btn c-btn--' . $atts[ 'color' ] . '" href="' . $atts[ 'href' ] . '" title="' . $atts[ 'title' ] . '"> ' . $atts[ 'text' ] . ' </a>';
    }
}

add_shortcode('button', 'button_shortcode');

// Lead
function lead_shortcode($atts, $content = null ) {

  $atts = shortcode_atts(
        array(
            'align' => 'left',
            'color' => 'black'
        ), $atts
    );

  return '<p class="c-lead u-text--' . $atts[ 'color' ] . ' u-text--' . $atts[ 'align' ] . '"> ' . $content . ' </p>';
}

add_shortcode('lead', 'lead_shortcode');

// Row
function row_shortcode($atts, $content = null ) {

	return '<div class="o-row"> ' . do_shortcode($content) . ' </div>';
}

add_shortcode('row', 'row_shortcode');

// Columns
function columns_shortcode($atts, $content = null) {

	$atts = shortcode_atts(
        array(
            'column' => '6',
            'breakpoint' => 'sm'
        ), $atts
    );

	return '<div class="o-col--' . $atts[ 'breakpoint' ] . '-' . $atts[ 'column' ] . '"> ' . do_shortcode($content) . ' </div>';
}

add_shortcode('columns', 'columns_shortcode');


function my_sidebar_contact_us_shortcode()
{
    $title       = get_field('contact_title', 'option');
    $sub_heading = get_field('contact_subtitle', 'option');
 
    $form        = get_field('contact_form', 'option');

    if (!$title || empty($title) || empty($form) || empty($sub_heading)) {
        return '';
    }
    ob_start();
?>
                    <div class="contact-us-widget bg-dark text-white px-8 py-10">
                        <div class="contact-form-wrapper">
                            <p class="text-2xl font-archivo text-center text-light-gold">Schedule a Consultation</p>
                            <h3 class="text-white text-[54px] leading-[120%] my-4 text-center font-semibold">Contact Us</h3>
                            <div class="form-shortcode"><?php echo do_shortcode($form); ?></div>

                        </div>
                    </div>
<?php
    return ob_get_clean();
}

add_shortcode('sidebar_contact_us', 'my_sidebar_contact_us_shortcode');



function sidebar_directions_list_shortcode()
{
    $title = get_field('sidebar_practice_areas_title', 'option');
    $practice_areas = get_field('sidebar_practice_areas', 'option');

    if (empty($title) && empty($practice_areas)) {
        return '';
    }

    ob_start();
    ?>
    <div class="practice-areas">
        <?php if ($title): ?>
            <h3 class="text-[27px] font-archivo font-bold text-center my-[36px]"><?php echo esc_html($title); ?></h3>
        <?php else: ?>
            <h3 class="text-[27px] font-archivo font-bold text-center my-[36px]">Practice Areas</h3>
        <?php endif; ?>

        <?php if ($practice_areas): ?>
            <ul>
                <?php foreach ($practice_areas as $area): ?>
                    <?php if (!empty($area['practice_area'])): ?>
                        <li class="mb-3">
                            <a class="item-area" href="<?php echo esc_url($area['practice_area']['url']); ?>" target="<?php echo esc_attr($area['practice_area']['target'] ?: '_self'); ?>">
                                <?php echo esc_html($area['practice_area']['title']); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <!-- Fallback content -->
            <ul>
                <li class="mb-3"><a class="item-area" href="#">Family Law</a></li>
                <li class="mb-3"><a class="item-area" href="#">Personal Injury</a></li>
                <li class="mb-3"><a class="item-area" href="#">Small Claims</a></li>
            </ul>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('sidebar_directions', 'sidebar_directions_list_shortcode');


function sidebar_reviews_slider_shortcode()
{
    $reviews_source = get_field('reviews_source', 'option');
    $title = get_field('reviews_title', 'option');

    if ($reviews_source === 'trustindex') {
        // Trustindex widget
        $trustindex_code = get_field('reviews_trustindex', 'option');

        if (empty($trustindex_code)) {
            return '';
        }

        ob_start();
        ?>
        <div class="sidebar-reviews-trustindex">
            <?php if ($title): ?>
                <h3 class="text-[27px] font-archivo font-bold text-center my-[36px]"><?php echo esc_html($title); ?></h3>
            <?php endif; ?>
            <?php echo do_shortcode( $trustindex_code ); ?>
        </div>
        <?php
        return ob_get_clean();

    } else {
        // Custom reviews
        $reviews = get_field('reviews', 'option');
        $link = get_field('reviews_link', 'option');

        if (empty($reviews) && empty($title)) {
            return '';
        }

        ob_start();
        ?>
                    <div class="reviews">
                        <h3 class="text-[27px] font-archivo font-bold text-center my-[36px]"><?php echo esc_html($title); ?></h3>
                        <div class="review-content bg-[#F5F5F5] p-5">
                            <div class="sidebar-reviews max-w-[345px] mx-auto">
                                <img class="mx-auto mb-6" src="/wp-content/uploads/2025/11/Google_2015_logo.svg-2.svg" alt="">
                                <div class="sidebar-reviews-swiper  swiper w-full ">
                                    <!-- Swiper content will go here -->
                                    <div class="swiper-wrapper w-full">
                                        <?php
                                        foreach ($reviews as $review): ?>
                                            <div class="swiper-slide !w-full flex flex-col items-center gap-4 justify-center">

                                                <div class="review-star flex gap-1">

                                                    <?php for ($j = 1; $j <= $review['rating']; $j++): ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                            <path d="M20.9055 16.7067C20.6033 16.9996 20.4645 17.4231 20.5333 17.8384L21.5705 23.5784C21.658 24.0649 21.4527 24.5572 21.0455 24.8384C20.6465 25.1301 20.1157 25.1651 19.6805 24.9317L14.5134 22.2367C14.3337 22.1411 14.1342 22.0897 13.93 22.0839H13.6139C13.5042 22.1002 13.3969 22.1352 13.2989 22.1889L8.13052 24.8967C7.87502 25.0251 7.58568 25.0706 7.30218 25.0251C6.61152 24.8944 6.15068 24.2364 6.26385 23.5422L7.30218 17.8022C7.37102 17.3834 7.23218 16.9576 6.93002 16.6601L2.71718 12.5767C2.36485 12.2349 2.24235 11.7216 2.40335 11.2584C2.55968 10.7964 2.95868 10.4592 3.44052 10.3834L9.23885 9.54225C9.67985 9.49675 10.0672 9.22841 10.2655 8.83175L12.8205 3.59341C12.8812 3.47675 12.9594 3.36941 13.0539 3.27841L13.1589 3.19675C13.2137 3.13608 13.2767 3.08591 13.3467 3.04508L13.4739 2.99841L13.6722 2.91675H14.1634C14.602 2.96225 14.9882 3.22475 15.19 3.61675L17.7789 8.83175C17.9655 9.21325 18.3284 9.47808 18.7472 9.54225L24.5455 10.3834C25.0355 10.4534 25.445 10.7917 25.6072 11.2584C25.76 11.7262 25.6282 12.2396 25.2689 12.5767L20.9055 16.7067Z" fill="#F1BE48" />
                                                        </svg>
                                                    <?php endfor; ?>
                                                </div>
                                                <p class="text-[24px] text-center font-semibold text-[#2A2A2B]">“<?php echo esc_html($review['reviews_quote']); ?>”</p>
                                                <div class="author flex justify-center items-center flex-col gap-5 w-full">
                                                    <p class="text-[18px] font-medium text-light-brown m-0 font-archivo">~ <?php echo esc_html($review['author']); ?></p>
                                                    <div class="line bg-gradient-to-b from-light-gold to-light-brown h-[2px]  w-full"></div>
                                                    <p class="text-[16px] text-light-brown uppercase font-medium font-archivo">Personal Injury</p>

                                                </div>

                                            </div>
                                        <?php  endforeach; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
        <?php
        return ob_get_clean();
    }
}

add_shortcode('sidebar_reviews', 'sidebar_reviews_slider_shortcode');