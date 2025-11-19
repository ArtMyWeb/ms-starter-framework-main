<?php get_header(); ?>

<?php if ( function_exists('have_rows') && have_rows('home') ) { include get_template_directory() . '/_inc/content-home-flexible.php'; } ?>

<?php get_footer(); ?>