<?php
// Register Custom Post Type Infrastructure
// Post Type Key: infrastructure

function create_infrastructure_cpt() {

	$labels = array(
		'name' => _x( 'Infrastructures', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Infrastructure', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Infrastructures', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Infrastructure', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Infrastructure Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Infrastructure Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Infrastructure:', 'wpbrsmedia' ),
		'all_items' => __( 'All Infrastructures', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Infrastructure', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Infrastructure', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Infrastructure', 'wpbrsmedia' ),
		'update_item' => __( 'Update Infrastructure', 'wpbrsmedia' ),
		'view_item' => __( 'View Infrastructure', 'wpbrsmedia' ),
		'view_items' => __( 'View Infrastructures', 'wpbrsmedia' ),
		'search_items' => __( 'Search Infrastructure', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Infrastructure', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Infrastructure', 'wpbrsmedia' ),
		'items_list' => __( 'Infrastructures list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Infrastructures list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Infrastructures list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Infrastructure', 'wpbrsmedia' ),
		'description' => __( 'Infrastructure Posts', 'wpbrsmedia' ),
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
	register_post_type( 'infrastructure', $args );

}
add_action( 'init', 'create_infrastructure_cpt', 0 );