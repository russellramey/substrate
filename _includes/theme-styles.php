<?php
/************************************************************************************
*** Styles
	Add scripts/styles to theme
************************************************************************************/
// Theme styles
add_action( 'wp_enqueue_scripts', 'substrate_theme_load_styles' );
function substrate_theme_load_styles() {

	// Bootstrap
	// Check if child theme has bootstrap
	if(file_exists(get_stylesheet_directory_uri() . '/_assets/bootstrap.css')){
		// Load bootstrap from child theme
		wp_enqueue_style( 'bootstrap-styles', get_stylesheet_directory_uri() . '/_assets/bootstrap.css', '', '', '' );
	} else {
		// Load default bootstrap
		wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/_assets/bootstrap.css', '', '', '' );
	}

	// Theme styles
	wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/_assets/theme.css', '', '', '' );
}

// Admin styles
add_action( 'admin_enqueue_scripts', 'substrate_theme_load_admin_styles', 1);
function substrate_theme_load_admin_styles() {

        // Current screen
        $currentScreen = get_current_screen();
        // If current screen is post edit screen, load block styles/script
        if($currentScreen->is_block_editor){
            // Enqueue editor styles
			wp_enqueue_style( 'editor-styles', get_template_directory_uri() . '/_assets/editor.css', '', '', '' );
        }

	}
?>
