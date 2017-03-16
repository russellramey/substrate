<?php
/************************************************************************************
*** Case Studies
	Post type for 'study'
************************************************************************************/
// Register Case Study Post Type
function case_study() {

	$labels = array(
		'name'                  => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Case Studies', 'text_domain' ),
		'name_admin_bar'        => __( 'Case Study', 'text_domain' ),
		'archives'              => __( 'Study Archives', 'text_domain' ),
		'attributes'            => __( 'Study Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Study:', 'text_domain' ),
		'all_items'             => __( 'All Studies', 'text_domain' ),
		'add_new_item'          => __( 'Add New Study', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Study', 'text_domain' ),
		'edit_item'             => __( 'Edit Study', 'text_domain' ),
		'update_item'           => __( 'Update Study', 'text_domain' ),
		'view_item'             => __( 'View Study', 'text_domain' ),
		'view_items'            => __( 'View Studies', 'text_domain' ),
		'search_items'          => __( 'Search Study', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into study', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this study', 'text_domain' ),
		'items_list'            => __( 'Studies list', 'text_domain' ),
		'items_list_navigation' => __( 'Studies list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter studies list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Case Study', 'text_domain' ),
		'description'           => __( 'Add support for Case Study content type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
		'rewrite' 			  	=> array( 'with_front' => false, "slug" => 'case-study'),
	);
	register_post_type( 'study', $args );

}
add_action( 'init', 'case_study', 0 );
?>
