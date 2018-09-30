<?php
/************************************************************************************
*** Theme set up funcitons
	Thumbnails, navigation menus, theme support, etc...
************************************************************************************/
// Setup function
add_action( 'after_setup_theme', 'substrate_setup' );
function substrate_setup() {
    // Theme language support
	load_theme_textdomain( 'substrate', get_template_directory() . '/languages' );
    // Add title tag support
	add_theme_support( 'title-tag' );
    // Feed support
	add_theme_support( 'automatic-feed-links' );
    // Post thumbnail support
	add_theme_support( 'post-thumbnails' );

    // Register Navigation Menu(s)
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
		// Menu
		register_nav_menus(
		    array(
                // Main Menu
                'main-menu' => __( 'Main Menu', 'substrate' ),
                // Secondary Menu (remove if not needed, or customize to your needs)
                'second-menu' => __( 'Secondary Menu', 'substrate'),

                // Add other menus as needed here...

            )
	    );
}

/***********************************************************
** Add editor styles to WP Editor
************************************************************/
add_editor_style( array( 'assets/css/editor.css' ) );

/***********************************************************
** Disable Guttenburg Editor
************************************************************/
add_filter('gutenberg_can_edit_post_type', '__return_false');

/***********************************************************
** Change WP default Title Tag
************************************************************/
add_filter( 'the_title', 'substrate_title' );
add_filter( 'wp_title', 'substrate_filter_wp_title' );
function substrate_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
function substrate_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

/***********************************************************
** Add 'Button' class to WP pagination links
************************************************************/
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="button"';
}
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');
function post_link_attributes($output) {
    $code = 'class="button"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}

/***********************************************************
** Remove extra P from shortcodes
************************************************************/
add_filter( 'the_content', 'shortcode_empty_paragraph_fix' );
function shortcode_empty_paragraph_fix( $content ) {

    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );
}

/***********************************************************
** Include custom post types in taxonomy
************************************************************/
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
		// replace cpt to your custom post type
	$post_type = array(/***** ADD POST TYPES HERE ******/);
    $query->set('post_type',$post_type);
	return $query;
    }
}

/***********************************************************
** Remove P tag from img
************************************************************/
add_filter('the_content', 'filter_ptags_on_images');
function filter_ptags_on_images($content) {
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}

/***********************************************************
** Remove P tag from meta rows
   This funciton is a helper function and called in template
   files itself not on a filter
************************************************************/
function filter_meta_wysiwyg($content) {
	// Get content from meta
	$wp_generated_content = wpautop($content);
	// filter p tags from images and shortcodes using existing funcitons
	$filtered_content = filter_ptags_on_images($wp_generated_content);
	$filtered_content = shortcode_empty_paragraph_fix($filtered_content);
	// return formatted string
	return do_shortcode($filtered_content);
}
?>
