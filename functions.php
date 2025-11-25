<?php

/* ==========================================
   Set Favicon
========================================== */

function favicon(){
	echo '<link rel="shortcut icon" href="', get_template_directory_uri(), '/_dist/img/favicon.ico" />',"\n";
}

add_action('wp_head','favicon');


/* ==========================================
   Custom Login Page
========================================== */

// CSS for login Page
function custom_login_logo() { ?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php bloginfo('template_url'); ?>/_src/img/img-logo.png);
			width: 296px;
    		height: 93px;
    		background-size: 296px 93px;
			background-repeat: no-repeat;
			padding-bottom: 10px;
			mix-blend-mode: multiply;
		}
	</style>
<?php }

add_action('login_head', 'custom_login_logo');

// Change login Logo link
function loginpage_custom_link() {
	return home_url();
}

add_filter('login_headerurl', 'loginpage_custom_link');

// Change logo title attribute
function change_title_on_logo() {
	return get_bloginfo( 'name' );
}

add_filter('login_headertext', 'change_title_on_logo');

/* ==========================================
   Theme Files
========================================== */

// Load the Theme CSS
function theme_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), rand(111,9999), false );
	wp_enqueue_style( 'global', get_template_directory_uri() . '/_dist/css/global.css', array(), rand(111,9999), false );
	wp_enqueue_style( 'lightbox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), false );
}

// Load the Theme JS
function themejs() {
	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/43f01e18f7.js', array(), false );
	wp_enqueue_script( 'lightbox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array('jquery'), '', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/_dist/js/scripts.min.js', array(), '', true );
	wp_enqueue_script( 'vcf-generator', get_template_directory_uri() . '/assets/js/vcf-generator.js', array(), '1.0.0', true );
}


// Call CSS & JS
add_action( 'wp_enqueue_scripts', 'themejs' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Add styles to the WYSIWYG editor
add_editor_style('_dist/css/editor.css');

/* ==========================================
   Set Includes
========================================== */

/**
 *
 * The $ms_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 */
$ms_includes = array(
	'_inc/wp_navwalker.php',        		         // Set Custom Menus
	'_inc/shortcodes.php',      					   // Set Shortcodes
);

foreach ( $ms_includes as $file ) {

	if ( !$filepath = locate_template( $file ) ) {
		trigger_error ( sprintf( __( 'Error locating %s for inclusion', 'ms' ), $file ), E_USER_ERROR );
	}

	require_once $filepath;
}

unset( $file, $filepath );

/* ==========================================
   Add Thumbnail Support
========================================== */

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'menus' );
add_theme_support( 'align-wide' );

/* ==========================================
   Set Default Menus
========================================== */

register_nav_menus( array(
    'header-menu' => 'Header Menu',
	'sidebar_nav' => 'Sidebar Navigation',
	'footer_nav' => 'Footer Navigation',
	'resources_nav' => 'Resources Navigation',
	'practice_nav' => 'Practice Navigation'
));

/* ==========================================
   Set Sidebar & Blog Sidebar Widgets
========================================== */

function sidebar_widgets( $name, $id, $class, $desciption ) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'class'			 => $class,
		'description'   => $desciption,
		'before_widget' => '<div id="%1$s" class="c-widget widget__%2$s">',
		'after_widget'  => '</div><!-- /.c-widget -->',
		'before_title'  => '<p class="c-widget__title u-h5">',
		'after_title'	 => '</p><!-- /.c-widget__title -->'
		);

	register_sidebar( $args );
}

sidebar_widgets('Sidebar', 'sidebar', 'Widgets displayed in the main sidebar', '');
sidebar_widgets('Blog Sidebar', 'sidebar-blog', 'Widgets displayed in the blog sidebar', '');
sidebar_widgets('Footer Sidebar 1', 'sidebar-footer-1', 'Widgets displayed in the footer sidebar', '');
sidebar_widgets('Footer Sidebar 2', 'sidebar-footer-2', 'Widgets displayed in the footer sidebar', '');
sidebar_widgets('Footer Sidebar 3', 'sidebar-footer-3', 'Widgets displayed in the footer sidebar', '');
sidebar_widgets('Footer Sidebar 4', 'sidebar-footer-4', 'Widgets displayed in the footer sidebar', '');

/* ==========================================
   Add Body Class To Subpages Only
========================================== */

add_filter( 'body_class','my_body_classes' );

function my_body_classes( $classes ) {

 	if ( !is_front_page() ){
    	$classes[] = 'subpage';
	}

   return $classes;
}

/* ==========================================
   Set Permalink
========================================== */

add_action('init', 'set_permalink');

function set_permalink(){
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/blog/%postname%/');
}

/* ==========================================
   Set ACF Site Options Tab
========================================== */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/* ==========================================
   Search Page & Procedure Posts Only
========================================== */

function SearchFilter($query) {

	if ( ! is_admin() ) {
		if ($query->is_search) {
			$query->set( 'post_type', array('page', 'post') );
		}
		return $query;
	}
}

add_filter('pre_get_posts','SearchFilter');


/* ==========================================
   Search For Empty String
========================================== */

function SearchEmpty($query) {
	// If 's' request variable is set but empty
	if (isset($_GET['s']) && empty($_GET['s']) && $query->is_main_query()){
		$query->is_search = true;
		$query->is_home = false;
	}

	return $query;
}

add_filter('pre_get_posts','SearchEmpty');


/* ==========================================
   Search For Title Keywords Only
========================================== */

function wp_search_by_title_only( $search, $wp_query ) {
	global $wpdb;
	if ( empty( $search ) )
	return $search; // skip processing - no search term in query
	$q = $wp_query->query_vars;
	$n = ! empty( $q['exact'] ) ? '' : '%';
	$search =
	$searchand = '';
foreach ( (array) $q['search_terms'] as $term ) {
	$term = esc_sql( $wpdb->esc_like( $term ) );
	$search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
	$searchand = ' AND ';
}
if ( ! empty( $search ) ) {
	$search = " AND ({$search}) ";
	if ( ! is_user_logged_in() )
		$search .= " AND ($wpdb->posts.post_password = '') ";
}
return $search;
}

add_filter( 'posts_search', 'wp_search_by_title_only', 500, 2 );

/* ==========================================
   Browser Detection Class
========================================== */

function mv_browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'firefox';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) {
		$classes[] = 'ie';
		if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
			$classes[] = 'ie'.$browser_version[1];
	} else $classes[] = 'unknown';
	if($is_iphone) $classes[] = 'iphone';
	if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
		$classes[] = 'osx';
	} elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
		$classes[] = 'linux';
	} elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
		$classes[] = 'windows';
	}
	return $classes;
}

add_filter('body_class','mv_browser_body_class');

/* ==========================================
   Add Class To Next Single Post Links
========================================== */

add_filter('next_post_link', 'post_link_attributes');

add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
    $code = 'class="c-btn c-btn--primary"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}


/* ==========================================
   Add Class To Next Page Post Links
========================================== */

add_filter('next_posts_link_attributes', 'posts_link_attributes');

add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="c-btn c-btn--primary"';
}


function single_pager_nav() { ?>

	<ul class="c-pager c-list--unstyled u-reset--margin u-block--clearfix">
		<li class="u-block--fl-left">
			<?php previous_post_link('%link', 'Previous'); ?>
		</li>
		<li class="u-block--fl-right">
			<?php next_post_link('%link', 'Next'); ?>
		</li>
	</ul>

<?php }

/* ==========================================
   Display First Image in Blog Post (home.php)
========================================== */

// make the first image of WordPress post as featured image
function first_image_as_featured() {
	global $post, $posts;
	$first_img_featured = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img_featured = isset($matches[1][0]) ? $matches[1][0] : false;
	return $first_img_featured;
}

/* ==========================================
   Do Shortcodes In Widgets
========================================== */

add_filter( 'widget_text', 'do_shortcode' );

/* ==========================================
   Gravity Forms Confirmation Anchor
========================================== */
add_filter( 'gform_confirmation_anchor', '__return_true' );

/* ==========================================
   Gravity Forms Filter Forms Button Type
========================================== */

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );

function form_submit_button( $button, $form ) {
	return "<button class='c-btn c-btn--primary' id='gform_submit_button_{$form['id']}'>{$form['button']['text']}</button>";
}

/* ==========================================
   Page titles
========================================== */

function page_title() {
	if ( is_404() ) {
		echo 'Page Not Found';
	} elseif ( is_search() ) {
		echo 'Search';
	} elseif ( is_home()) {
		echo 'Blog';
	} elseif ( is_singular('post') ){
		echo get_the_title();
	} elseif ( is_category() ) {
		echo single_cat_title();
	} else {
		echo get_the_title();
	}
}
 

add_filter('use_block_editor_for_post_type', '__return_false');
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');

// excerpt length
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// remove excerpt ellipsis
function custom_excerpt_more( $more ) {
	return ' ...';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );