<?php
// Register Custom Post Type Leader
// Post Type Key: leader

function create_leader_cpt() {

	$labels = array(
		'name' => _x( 'Leaders', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Leader', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Leaders', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Leader', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Leader Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Leader Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Leader:', 'wpbrsmedia' ),
		'all_items' => __( 'All Leaders', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Leader', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Leader', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Leader', 'wpbrsmedia' ),
		'update_item' => __( 'Update Leader', 'wpbrsmedia' ),
		'view_item' => __( 'View Leader', 'wpbrsmedia' ),
		'view_items' => __( 'View Leaders', 'wpbrsmedia' ),
		'search_items' => __( 'Search Leader', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Leader', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Leader', 'wpbrsmedia' ),
		'items_list' => __( 'Leaders list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Leaders list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Leaders list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Leader', 'wpbrsmedia' ),
		'description' => __( 'Leaders Post', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
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
	register_post_type( 'leader', $args );

}
add_action( 'init', 'create_leader_cpt', 0 );