<?php
/************************************************************************************
*** Theme set up funcitons
	Thumbnails, navigation menus, theme support, etc...
************************************************************************************/
// Setup function
function devmod_setup() {
    // Theme language support
	load_theme_textdomain( 'devmod', get_template_directory() . '/languages' );
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
                'main-menu' => __( 'Main Menu', 'devmod' ),
                // Secondary Menu (remove if not needed, or customize to your needs)
                'second-menu' => __( 'Secondary Menu', 'devmod'),
                // Add other menus as needed
            )
	    );
}
// Add setup to theme
add_action( 'after_setup_theme', 'devmod_setup' );

// WP Title
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title ) {
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

// Remove admin links
function devmod_remove_menus () {
	// Comments
	remove_menu_page('edit-comments.php');

	global $submenu;
	// Appearance Menu
	unset($submenu['themes.php'][6]); // Customize
}
add_action('admin_menu', 'devmod_remove_menus');

// Remove admin bar links
function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    $wp_admin_bar->remove_menu('customize');      // Remove the content link
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );
?>
