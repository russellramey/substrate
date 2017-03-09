<?php
/************************************************************************************
*** Team
	Post type for 'projects'
************************************************************************************/
// Register Resources Post Type
function resources() {

	$labels = array(
		'name'                  => _x( 'Links', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Link', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Links', 'text_domain' ),
		'name_admin_bar'        => __( 'Links', 'text_domain' ),
		'archives'              => __( 'Link Archives', 'text_domain' ),
		'attributes'            => __( 'Link Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Link:', 'text_domain' ),
		'all_items'             => __( 'All Links', 'text_domain' ),
		'add_new_item'          => __( 'Add New Link', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Link', 'text_domain' ),
		'edit_item'             => __( 'Edit Link', 'text_domain' ),
		'update_item'           => __( 'Update Link', 'text_domain' ),
		'view_item'             => __( 'View Link', 'text_domain' ),
		'view_items'            => __( 'View Links', 'text_domain' ),
		'search_items'          => __( 'Search Link', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into link', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this link', 'text_domain' ),
		'items_list'            => __( 'Links list', 'text_domain' ),
		'items_list_navigation' => __( 'Links list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter links list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Link', 'text_domain' ),
		'description'           => __( 'Used for list of styled links in table or similar form. PDF download, videos, etc...', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-links',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'resources', $args );

}
add_action( 'init', 'resources', 0 );
?>
