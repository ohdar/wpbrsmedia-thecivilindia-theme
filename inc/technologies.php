<?php
// Register Custom Post Type Technology
// Post Type Key: technology


function create_technology_cpt() {

	$labels = array(
		'name' => _x( 'Technologies', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Technology', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Technologies', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Technology', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Technology Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Technology Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Technology:', 'wpbrsmedia' ),
		'all_items' => __( 'All Technologies', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Technology', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Technology', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Technology', 'wpbrsmedia' ),
		'update_item' => __( 'Update Technology', 'wpbrsmedia' ),
		'view_item' => __( 'View Technology', 'wpbrsmedia' ),
		'view_items' => __( 'View Technologies', 'wpbrsmedia' ),
		'search_items' => __( 'Search Technology', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Technology', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Technology', 'wpbrsmedia' ),
		'items_list' => __( 'Technologies list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Technologies list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Technologies list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Technology', 'wpbrsmedia' ),
		'description' => __( 'Technology', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-shield',
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
	register_post_type( 'technology', $args );

}
add_action( 'init', 'create_technology_cpt', 0 );