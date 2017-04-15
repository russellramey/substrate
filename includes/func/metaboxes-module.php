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
	        'bt-module--fixed' => __( 'Fixed', 'cmb2' ),
	        'bt-module--full'   => __( 'Full Width', 'cmb2' ),
	    ),
	));
	// Module Width Selector
	$module_setup->add_field( array(
	    'name'             => 'Module Inner Width',
	    'desc'             => 'Option to constrain or expand the width of the inner content beyond the default container (default content width is 1170px)',
	    'id'               => $prefix . 'module-content-width',
	    'type'             => 'select',
	    'show_option_none' => false,
	    'default'          => 'fixed',
	    'options'          => array(
			'container' => __( 'Fixed', 'cmb2' ),
	        'full-width'   => __( 'Full Width', 'cmb2' ),
	    ),
	));
	// Module Width Selector
	$module_setup->add_field( array(
	    'name'             => 'Module Height',
	    'desc'             => 'Select the width of the entire module<br />- Auto (Module height will be height of its content)<br />- Small (40px padding on top and bottom of module)<br />- Medium (80px padding on top and bottom of module)<br />- Large (120px padding on top and bottom of module)',
	    'id'               => $prefix . 'module-height',
	    'type'             => 'select',
	    'show_option_none' => false,
	    'default'          => 'auto',
	    'options'          => array(
	        'auto' => __( 'Auto', 'cmb2' ),
	        'small'   => __( 'Small', 'cmb2' ),
			'medium'   => __( 'Medium', 'cmb2' ),
			'large'   => __( 'Large', 'cmb2' ),
			'xlarge'   => __( 'X Large', 'cmb2' ),
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
		'name' => 'Background Color',
		'description' => ' First color option (leave blank for default)',
		'id'   => $prefix . 'module-background-color',
		'type' => 'colorpicker',
	));
	// Module background image
	$module_background->add_field( array(
		'name' => 'Background Image',
		'description' => 'Use and image as the background<br />If image is added, it will be used as background and not the colors above',
		'id'   => $prefix . 'module-background-image',
		'type'  => 'file',
	));
	// Module Width Selector
	$module_background->add_field( array(
	    'name'             => 'Background Video Source',
	    'desc'             => 'Select the source of the video ID. This is required to source the correct video API for the ID above.',
	    'id'               => $prefix . 'module-background-video-source',
	    'type'             => 'select',
	    'show_option_none' => true,
	    'options'          => array(
	        'youtube' => __( 'YouTube', 'cmb2' ),
	        'vimeo'   => __( 'Vimeo', 'cmb2' ),
	    ),
	));
	// Module background image
	$module_background->add_field( array(
		'name' => 'Background Video ID',
		'description' => 'Use the youtube or viemo video ID here.',
		'id'   => $prefix . 'module-background-video',
		'type'  => 'text',
	));
}

// Module setup
add_action( 'cmb2_init', 'module_metabox_overlay' );
function module_metabox_overlay() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	$module_overlay = new_cmb2_box( array(
		'id'            => $prefix . 'module-overlay',
		'title'         => __( 'Module Overlay', 'cmb2' ),
		'object_types'  => array( 'module'), // Post type
	));

	// Module Overlay color 1
	$module_overlay->add_field( array(
		'name' => 'Overlay Color 1',
		'description' => ' First color option (leave blank for default)',
		'id'   => $prefix . 'module-overlay-color-one',
		'type' => 'colorpicker',
	));
	// Module Overlay color 2
	$module_overlay->add_field( array(
		'name' => 'Overlay Color 2',
		'description' => ' Second color to make gradient (if none - first color will be used as overlay)',
		'id'   => $prefix . 'module-overlay-color-two',
		'type' => 'colorpicker',
	));

	// Module Overlay Opacity
	$module_overlay->add_field( array(
	    'name'             => 'Overlay Opacity',
	    'desc'             => 'Select the opacity of the overlay color/gradient (default is 50%)',
	    'id'               => $prefix . 'module-overlay-opacity',
	    'type'             => 'select',
	    'show_option_none' => false,
		'default'          => '5',
	    'options'          => array(
	        '99' => __( '100%', 'cmb2' ),
	        '9'   => __( '90%', 'cmb2' ),
			'8'   => __( '80%', 'cmb2' ),
			'7'   => __( '70%', 'cmb2' ),
			'6'   => __( '60%', 'cmb2' ),
			'5'   => __( '50%', 'cmb2' ),
			'4'   => __( '40%', 'cmb2' ),
			'3'   => __( '30%', 'cmb2' ),
			'2'   => __( '20%', 'cmb2' ),
			'1'   => __( '10%', 'cmb2' ),
	    ),
	));

	// Module Overlay direction
	$module_overlay->add_field( array(
	    'name'             => 'Overlay Direction',
	    'desc'             => 'Select the overlay gradient direction. Gradient flows from color 1 to color 2',
	    'id'               => $prefix . 'module-overlay-direction',
	    'type'             => 'select',
	    'show_option_none' => false,
	    'default'          => 'right',
	    'options'          => array(
	        'right' => __( 'Right', 'cmb2' ),
	        'left'   => __( 'Left', 'cmb2' ),
			'top'   => __( 'Top', 'cmb2' ),
			'bottom'   => __( 'Bottom', 'cmb2' ),
	    ),
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
