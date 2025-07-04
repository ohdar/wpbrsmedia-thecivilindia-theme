<?php
// Register Custom Post Type CurrentAffair
// Post Type Key: currentaffair

function create_currentaffair_cpt() {

	$labels = array(
		'name' => _x( 'CurrentAffairs', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'CurrentAffair', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'CurrentAffairs', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'CurrentAffair', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'CurrentAffair Archives', 'wpbrsmedia' ),
		'attributes' => __( 'CurrentAffair Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent CurrentAffair:', 'wpbrsmedia' ),
		'all_items' => __( 'All CurrentAffairs', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New CurrentAffair', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New CurrentAffair', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit CurrentAffair', 'wpbrsmedia' ),
		'update_item' => __( 'Update CurrentAffair', 'wpbrsmedia' ),
		'view_item' => __( 'View CurrentAffair', 'wpbrsmedia' ),
		'view_items' => __( 'View CurrentAffairs', 'wpbrsmedia' ),
		'search_items' => __( 'Search CurrentAffair', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into CurrentAffair', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this CurrentAffair', 'wpbrsmedia' ),
		'items_list' => __( 'CurrentAffairs list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'CurrentAffairs list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter CurrentAffairs list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'CurrentAffair', 'wpbrsmedia' ),
		'description' => __( '', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-welcome-view-site',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'custom-fields'),
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
	register_post_type( 'currentaffair', $args );

}
add_action( 'init', 'create_currentaffair_cpt', 0 );