<?php
/************************************************************************************
*** Sidebars / Widgets
	Thumbnails, navigation menus, theme support, etc...
************************************************************************************/
add_action( 'widgets_init', 'substrate_widgets_init' );
function substrate_widgets_init() {
	// Register Sidebar
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'substrate' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
?>
