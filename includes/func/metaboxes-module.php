<?php
/************************************************************************************
*** Module Metaboxes
	- Global options for the 'Module' post type
	- Uses CMB2 Metabox library
************************************************************************************/
// Module setup
add_action( 'cmb2_init', 'module_metabox_setup' );
function module_metabox_setup() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	$module_setup = new_cmb2_box( array(
		'id'            => $prefix . 'module_setup',
		'title'         => __( 'Module Setup', 'cmb2' ),
		'object_types'  => array( 'module'), // Post type
	));

	// Module Width Selector
	$module_setup->add_field( array(
	    'name'             => 'Module Outer Width',
	    'desc'             => 'Select the width of the entire module<br />- Fixed (Module will flow inline with max width of parent content)<br />- Full (Module will fill width of screen, background and all)',
	    'id'               => $prefix . 'module-width',
	    'type'             => 'select',
	    'show_option_none' => false,
	    'default'          => 'fixed',
	    'options'          => array(
	        'fixed' => __( 'Fixed', 'cmb2' ),
	        'full-width'   => __( 'Full Width', 'cmb2' ),
	    ),
	));
	// Module Width Selector
	$module_setup->add_field( array(
	    'name'             => 'Module Inner Width',
	    'desc'             => 'Option to constrain or expand the width of the inner content beyond the default container (default is 100% of container)',
	    'id'               => $prefix . 'module-content-width',
	    'type'             => 'select',
	    'show_option_none' => false,
	    'default'          => 'fixed',
	    'options'          => array(
			'fixed' => __( 'Fixed', 'cmb2' ),
	        'full-width'   => __( 'Full Width', 'cmb2' ),
	    ),
	));
	// Module Width Selector
	$module_setup->add_field( array(
	    'name'             => 'Module Height',
	    'desc'             => 'Select the width of the entire module<br />- Fixed (Module will flow inline with max width of parent content)<br />- Full (Module will fill width of screen)',
	    'id'               => $prefix . 'module-height',
	    'type'             => 'select',
	    'show_option_none' => false,
	    'default'          => 'auto',
	    'options'          => array(
	        'auto' => __( 'Auto', 'cmb2' ),
	        'small'   => __( 'Small', 'cmb2' ),
			'medium'   => __( 'Medium', 'cmb2' ),
			'large'   => __( 'Large', 'cmb2' ),
	    ),
	));
}

// Module background
add_action( 'cmb2_init', 'module_metabox_background' );
function module_metabox_background() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	$module_background = new_cmb2_box( array(
		'id'            => $prefix . 'module_background',
		'title'         => __( 'Module Background', 'cmb2' ),
		'object_types'  => array( 'module'), // Post type

	));

	// Module background color 1
	$module_background->add_field( array(
		'name' => 'Background Color 1',
		'description' => ' First color option (leave blank for default)',
		'id'   => $prefix . 'module-background-one',
		'type' => 'colorpicker',
	));
	// Module background color 2
	$module_background->add_field( array(
		'name' => 'Background Color 2',
		'description' => ' Second color to make gradient (if none - first color will fill background)',
		'id'   => $prefix . 'module-background-two',
		'type' => 'colorpicker',
	));
	// Module background image
	$module_background->add_field( array(
		'name' => 'Background Image',
		'description' => 'Use and image as the background<br />If image is added, it will be used as background and not the colors above',
		'id'   => $prefix . 'module_background_image',
		'type'  => 'file',
	));
	// Module background image
	$module_background->add_field( array(
		'name' => 'Background Video',
		'description' => 'Use a video as the background. If video is added, it will be used as background and ignore any other background added above<br />Use the embed iframe link from Youtube or Vimeo.',
		'id'   => $prefix . 'module_background_video',
		'type'  => 'textarea',
	));

}

// Add the Shortcode Metabox
add_action( 'add_meta_boxes', 'add_module_output' );
function add_module_output() {
	add_meta_box('module_output_code', 'How to use', 'module_output_code', 'module', 'side', 'default');
}
// The Event Location Metabox
function module_output_code() {
	global $post;
	echo '<p style="font-size:16px;">[module title="' . $post->post_name  . '"]</p>';
	echo '<p><i>Copy this shortcode and paste it into any content type editor (ex. post or page)</i></p>';
}
