<?php
/************************************************************************************
*** Scripts
	Add scripts to theme
************************************************************************************/
// Setup function
add_action( 'wp_enqueue_scripts', 'substrate_load_scripts' );
function substrate_load_scripts() {
	// Jquery
	wp_enqueue_script( 'jquery' );

	// Site functions
	wp_enqueue_script( 'base-functions', get_stylesheet_directory_uri() . '/_assets/js/base.functions.js', '', true );
	wp_enqueue_script( 'theme-functions', get_stylesheet_directory_uri() . '/_assets/js/theme.functions.js', '', true );

	// Site Stylesheet
	wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/_assets/css/style.css' );
}

// Add scripts to wp-admin
add_action('admin_enqueue_scripts', 'sabre_load_admin_scripts');
function sabre_load_admin_scripts($hook) {
    // Only add to the edit.php admin page.
    // See WP docs.
    if ('edit.php' === $hook) {
        return;
    }
    // wp_enqueue_script('admin-functions', get_template_directory_uri() . '/js/admin.functions.js', '', '', true);
}

?>
