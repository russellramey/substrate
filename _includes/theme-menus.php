<?php
/************************************************************************************
*** Theme menus
	Available navigation menus
************************************************************************************/
// Menus
register_nav_menus(
	array(
		// Main Menu
		'main-menu' => __( 'Main Menu', 'substrate_theme' ),
		// Secondary Menu (remove if not needed, or customize to your needs)
		'secondary-menu' => __( 'Secondary Menu', 'substrate_theme' ),
	)
);

// Extend Walker Class for custom markup
include 'theme-menus-walker.php';
?>
