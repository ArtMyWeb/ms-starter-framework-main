<?php

    // check if the flexible subpage field has rows of data
    if ( have_rows('subpage') ):

        // loop through the rows of data
        while ( have_rows('subpage') ) : the_row();

            // Get the current layout name and include the corresponding file
            $layout = get_row_layout();
            $file_path = get_template_directory() . '/_inc/sub-page/' . $layout . '.php';

            if ( file_exists( $file_path ) ) {
                include( $file_path );
            }

        endwhile; ?>

<?php endif; ?>