<?php
// Register Custom Post Type IndiaTourism
// Post Type Key: indiatourism

function create_indiatourism_cpt() {

	$labels = array(
		'name' => _x( 'IndiaTourisms', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'IndiaTourism', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'IndiaTourisms', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'IndiaTourism', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'IndiaTourism Archives', 'wpbrsmedia' ),
		'attributes' => __( 'IndiaTourism Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent IndiaTourism:', 'wpbrsmedia' ),
		'all_items' => __( 'All IndiaTourisms', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New IndiaTourism', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New IndiaTourism', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit IndiaTourism', 'wpbrsmedia' ),
		'update_item' => __( 'Update IndiaTourism', 'wpbrsmedia' ),
		'view_item' => __( 'View IndiaTourism', 'wpbrsmedia' ),
		'view_items' => __( 'View IndiaTourisms', 'wpbrsmedia' ),
		'search_items' => __( 'Search IndiaTourism', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into IndiaTourism', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this IndiaTourism', 'wpbrsmedia' ),
		'items_list' => __( 'IndiaTourisms list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'IndiaTourisms list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter IndiaTourisms list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'IndiaTourism', 'wpbrsmedia' ),
		'description' => __( 'IndiaTourism Posts', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-groups',
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
	register_post_type( 'indiatourism', $args );

}
add_action( 'init', 'create_indiatourism_cpt', 0 );