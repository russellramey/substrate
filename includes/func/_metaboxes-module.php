<?php
/************************************************************************************
*** Module Metaboxes
	Global options for the 'Module' post type
************************************************************************************/
// Module setup
add_action( 'cmb2_init', 'module_metabox_type' );
function module_metabox_type() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	$module_setup = new_cmb2_box( array(
		'id'            => $prefix . 'module_setup',
		'title'         => __( 'Module Setup', 'cmb2' ),
		'object_types'  => array( 'module', ), // Post type
	));

	// Module Width Selector
	$module_setup->add_field( array(
	    'name'             => 'Module width',
	    'desc'             => 'Select the width of the entire module<br />- Fixed (Module will flow inline with max width of parent content)<br />- Full (Module will fill width of screen)',
	    'id'               => $prefix . 'module_width',
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
	    'name'             => 'Module spacing',
	    'desc'             => 'Select the width of the entire module<br />- Fixed (Module will flow inline with max width of parent content)<br />- Full (Module will fill width of screen)',
	    'id'               => $prefix . 'module_padding',
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
	// Set max content width
	$module_setup->add_field( array(
		'name' => 'Content width',
		'description' => '<br />Pixel value to contain the content inside the module, ex. 1170 (leave blank for 100% width)',
		'id'   => $prefix . 'module-content-width',
		'type'  => 'text_small',
	));
	// Module background color 1
	$module_setup->add_field( array(
		'name' => 'Background Color 1',
		'description' => ' First color option (leave blank for default)',
		'id'   => $prefix . 'module-background-one',
		'type' => 'colorpicker',
	));
	// Module background color 2
	$module_setup->add_field( array(
		'name' => 'Background Color 2',
		'description' => ' Second color to make gradient (if none - first color will fill background)',
		'id'   => $prefix . 'module-background-two',
		'type' => 'colorpicker',
	));
	// Module background image
	$module_setup->add_field( array(
		'name' => 'Background Image',
		'description' => 'Use and image as the background<br />If image is added, it will be used as background and not the colors above',
		'id'   => $prefix . 'module_background_image',
		'type'  => 'file',
	));
	// Module background image
	$module_setup->add_field( array(
		'name' => 'Background Video',
		'description' => 'Use a video as the background. If video is added, it will be used as background and ignore any other background added above<br />Use the embed iframe link from Youtube or Vimeo.',
		'id'   => $prefix . 'module_background_video',
		'type'  => 'textarea',
	));
}






// MODULE TYPE METABOXES
/*
// If Module Type is 'Slider'
add_action( 'cmb2_init', 'module_metabox_slider' );
function module_metabox_slider() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$module_slider = new_cmb2_box( array(
		'id'            => $prefix . 'module_slider_options',
		'title'         => __( 'Slider / Carousel Module', 'cmb2' ),
		'object_types'  => array( 'module', ), // Post type
	));

	// Add Slides
	// Repeatable group
	$module_slider_slide = $module_slider->add_field( array(
		'id'          => $prefix . 'module_slider_slides',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => __( 'Slide {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Slide', 'cmb2' ),
			'remove_button' => __( 'Delete Slide', 'cmb2' ),
			'sortable'      => true, // beta
		),
	));
	// Add Slide background color 1
	$module_slider->add_group_field( $module_slider_slide, array(
		'name' => 'Background Color 1',
		'description' => ' First color option (leave blank for default)',
		'id'   => 'background-one',
		'type' => 'colorpicker',
	));
	// Add Slide background color 2
	$module_slider->add_group_field( $module_slider_slide, array(
		'name' => 'Background Color 2',
		'description' => ' Second color to make gradient (if none - first color will fill background)',
		'id'   => 'background-two',
		'type' => 'colorpicker',
	));
	// Add Slide background image
	$module_slider->add_group_field( $module_slider_slide, array(
		'name' => 'Background Image',
		'description' => 'Use and image as the background<br />If image is added, it will be used as background and not the colors above',
		'id'   => 'image',
		'type'  => 'file',
	));
	// Add Slide headline
	$module_slider->add_group_field( $module_slider_slide, array(
		'name' => 'Headline',
		'description' => 'Headline or main text line for this item',
		'id'   => 'headline',
		'type'  => 'text',
	));
	// Add Slide background subhead
	$module_slider->add_group_field( $module_slider_slide, array(
		'name' => 'Secondary headline',
		'description' => 'Secondary headline (smaller) below headline',
		'id'   => 'subhead',
		'type'  => 'text',
	));
	// Add Slide call to action
	$module_slider->add_group_field( $module_slider_slide, array(
		'name' => 'link',
		'description' => 'Add URL for call to action, this will appear as a button under the headline and subhead',
		'id'   => 'link',
		'type'  => 'text',
	));
	// Add Slide text color
	$module_slider->add_group_field( $module_slider_slide, array(
		'name' => 'Text Color',
		'description' => ' Text color for content',
		'id'   => 'text-color',
		'type'  => 'radio',
		    'options'          => array(
		        'text-dark' => __( 'Dark', 'cmb2' ),
		        'text-light'   => __( 'Light', 'cmb2' ),
		    ),
	));
} */

// If Module is Grid
add_action( 'cmb2_init', 'module_metabox_grid' );
function module_metabox_grid() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	$module_grid = new_cmb2_box( array(
		'id'            => $prefix . 'module_grid',
		'title'         => __( 'Module Content', 'cmb2' ),
		'object_types'  => array( 'module', ), // Post type
	));

	// Module Grid Size Selector
	$module_grid->add_field( array(
	    'name'             => 'Grid Size',
	    'desc'             => 'Select the size of grid items for each content seciton<br />(Grid size refers to number of items on each row)',
	    'id'               => $prefix . 'module_grid_size',
	    'type'             => 'select',
	    'show_option_none' => true,
	    'options'          => array(
	        'two_columns' => __( '2 Columns', 'cmb2' ),
	        'three_columns'   => __( '3 Columns', 'cmb2' ),
			'four_columns'   => __( '4 Columns', 'cmb2' ),
			'six_columns'   => __( '6 Columns', 'cmb2' ),
	    ),
	));

	// Add Grid Item
	// Repeatable group
	$module_grid_item = $module_grid->add_field( array(
		'id'          => $prefix . 'module_grid_item',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => __( 'Grid Content {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Item', 'cmb2' ),
			'remove_button' => __( 'Delete Item', 'cmb2' ),
			'sortable'      => true, // beta
		),
	));
	// Grid item background color
	$module_grid->add_group_field( $module_grid_item, array(
		'name' => 'Background Color',
		'description' => 'Background color for grid item',
		'id'   => $prefix . 'module-grid-item-background',
		'type' => 'colorpicker',
	));
	// Grid item content
	$module_grid->add_group_field( $module_grid_item, array(
		'name' => 'Content',
		'description' => 'Main content for grid item',
		'id'   => 'module-grid-item-content',
		'type'  => 'wysiwyg',
	));
}
