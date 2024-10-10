<?php
// Register Custom Post Type Administration
// Post Type Key: administration

function create_administration_cpt() {

	$labels = array(
		'name' => _x( 'Administrations', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Administration', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Administrations', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Administration', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Administration Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Administration Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Administration:', 'wpbrsmedia' ),
		'all_items' => __( 'All Administrations', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Administration', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Administration', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Administration', 'wpbrsmedia' ),
		'update_item' => __( 'Update Administration', 'wpbrsmedia' ),
		'view_item' => __( 'View Administration', 'wpbrsmedia' ),
		'view_items' => __( 'View Administrations', 'wpbrsmedia' ),
		'search_items' => __( 'Search Administration', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Administration', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Administration', 'wpbrsmedia' ),
		'items_list' => __( 'Administrations list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Administrations list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Administrations list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Administration', 'wpbrsmedia' ),
		'description' => __( 'Administration Post', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-multisite',
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
	register_post_type( 'administration', $args );

}
add_action( 'init', 'create_administration_cpt', 0 );