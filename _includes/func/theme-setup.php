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

    // Register Navigation Menu
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
		// Menu
		register_nav_menus(
		    array(
                // Main Menu
                'main-menu' => __( 'Main Menu', 'substrate' ),
                // Secondary Menu (remove if not needed, or customize to your needs)
                'second-menu' => __( 'Secondary Menu', 'substrate'),
                // Add other menus as needed
            )
	    );
}

// WP Title
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

// Remove extra P from shortcodes
add_filter( 'the_content', 'shortcode_empty_paragraph_fix' );
function shortcode_empty_paragraph_fix( $content ) {

    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );
}

// Add Editor styles to dashboard
add_editor_style( array( 'assets/css/editor.css' ) );

?>
