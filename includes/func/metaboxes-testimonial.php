<?php
// TESTIMONIALS METABOXES
add_action( 'cmb2_init', 'testimonial_metabox' );
function testimonial_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$testimonial_details = new_cmb2_box( array(
		'id'            => $prefix . 'testimonial_detials',
		'title'         => __( 'Testimonial Details', 'cmb2' ),
		'object_types'  => array( 'testimonials', ), // Post type
	));
	// Name
	$testimonial_details->add_field( array(
		'name'       => __( 'Name', 'cmb2' ),
		'desc'       => __( 'Full name of source or reviewer', 'cmb2' ),
		'id'         => $prefix . 'testimonial_name',
		'type'       => 'text',
	));
	// Company
	$testimonial_details->add_field( array(
		'name'       => __( 'Company', 'cmb2' ),
		'desc'       => __( 'Company name of source or reviewer', 'cmb2' ),
		'id'         => $prefix . 'testimonial_company',
		'type'       => 'text',
	));
	// Job title
	$testimonial_details->add_field( array(
		'name'       => __( 'Position', 'cmb2' ),
		'desc'       => __( 'Positon / job title of source or reviewer', 'cmb2' ),
		'id'         => $prefix . 'testimonial_position',
		'type'       => 'text',
	));
}
