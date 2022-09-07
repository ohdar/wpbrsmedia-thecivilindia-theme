<?php
// Register Custom Post Type GovtProgram
// Post Type Key: govtprogram



function create_govtprogram_cpt() {

	$labels = array(
		'name' => _x( 'GovtPrograms', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'GovtProgram', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'GovtPrograms', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'GovtProgram', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'GovtProgram Archives', 'wpbrsmedia' ),
		'attributes' => __( 'GovtProgram Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent GovtProgram:', 'wpbrsmedia' ),
		'all_items' => __( 'All GovtPrograms', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New GovtProgram', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New GovtProgram', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit GovtProgram', 'wpbrsmedia' ),
		'update_item' => __( 'Update GovtProgram', 'wpbrsmedia' ),
		'view_item' => __( 'View GovtProgram', 'wpbrsmedia' ),
		'view_items' => __( 'View GovtPrograms', 'wpbrsmedia' ),
		'search_items' => __( 'Search GovtProgram', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into GovtProgram', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this GovtProgram', 'wpbrsmedia' ),
		'items_list' => __( 'GovtPrograms list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'GovtPrograms list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter GovtPrograms list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'GovtProgram', 'wpbrsmedia' ),
		'description' => __( 'Major Government Programs', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-flag',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'govtprogram', $args );

}
add_action( 'init', 'create_govtprogram_cpt', 0 );