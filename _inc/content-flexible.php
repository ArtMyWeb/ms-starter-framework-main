<?php
// Dispatcher for flexible content 'subpage' moved into separate partials under _inc/flex.
if ( have_rows('subpage') ):
    while ( have_rows('subpage') ) : the_row();
        $layout = get_row_layout();
        // Map layout to partial file.
        $partials = [
            'block_2_awards'    => 'block-2-awards',
            'block_3_content'   => 'block-3-content',
            'block_4_info'      => 'block-4-info',
            'block_5_cases'     => 'block-5-cases',
            'block_6_team'      => 'block-6-team',
            'block_7_video'     => 'block-7-video',
            'block_8_cta'       => 'block-8-cta',
            'block_9_services'  => 'block-9-services',
            'block_10_reviews'  => 'block-10-reviews',
        ];
        if ( isset( $partials[ $layout ] ) ) {
            $file = get_template_directory() . '/_inc/flex/' . $partials[ $layout ] . '.php';
            if ( file_exists( $file ) ) {
                include $file;
            }
        }
    endwhile;
endif;