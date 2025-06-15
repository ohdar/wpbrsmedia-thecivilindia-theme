<?php
// Register Custom Post Type NaturalFood
// Post Type Key: naturalfood


function create_naturalfood_cpt() {

	$labels = array(
		'name' => _x( 'Natural Foods', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Natural Foods', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Natural Foods', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Natural Foods', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Natural Foods Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Natural Foods Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Natural Foods:', 'wpbrsmedia' ),
		'all_items' => __( 'All Natural Foods', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Natural Foods', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Natural Foods', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Natural Foods', 'wpbrsmedia' ),
		'update_item' => __( 'Update Natural Foods', 'wpbrsmedia' ),
		'view_item' => __( 'View Natural Foods', 'wpbrsmedia' ),
		'view_items' => __( 'View Natural Foods', 'wpbrsmedia' ),
		'search_items' => __( 'Search Natural Foods', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Natural Foods', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Natural Foods', 'wpbrsmedia' ),
		'items_list' => __( 'Natural Foods list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Natural Foods list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Natural Foods list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Natural Foods', 'wpbrsmedia' ),
		'description' => __( 'Natural Food souces of India', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-palmtree',
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
	register_post_type( 'naturalfood', $args );

}
add_action( 'init', 'create_naturalfood_cpt', 0 );