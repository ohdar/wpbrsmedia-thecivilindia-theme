<?php
// Register Custom Post Type Banking
// Post Type Key: bankings

function create_banking_cpt() {

	$labels = array(
		'name' => _x( 'Bankings', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Banking', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Bankings', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Banking', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Banking Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Banking Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Banking:', 'wpbrsmedia' ),
		'all_items' => __( 'All Bankings', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Banking', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Banking', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Banking', 'wpbrsmedia' ),
		'update_item' => __( 'Update Banking', 'wpbrsmedia' ),
		'view_item' => __( 'View Banking', 'wpbrsmedia' ),
		'view_items' => __( 'View Bankings', 'wpbrsmedia' ),
		'search_items' => __( 'Search Banking', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Banking', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Banking', 'wpbrsmedia' ),
		'items_list' => __( 'Bankings list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Bankings list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Bankings list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Banking', 'wpbrsmedia' ),
		'description' => __( 'Banking Posts', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-building',
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
	register_post_type( 'banking', $args );

}
add_action( 'init', 'create_banking_cpt', 0 );