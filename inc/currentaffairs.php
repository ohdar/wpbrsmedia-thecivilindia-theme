<?php
// Register Custom Post Type CurrentAffair
// Post Type Key: currentaffair

function create_currentaffair_cpt() {

	$labels = array(
		'name' => _x( 'CurrentAffairs', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'CurrentAffair', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'CurrentAffairs', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'CurrentAffair', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'CurrentAffair Archives', 'textdomain' ),
		'attributes' => __( 'CurrentAffair Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent CurrentAffair:', 'textdomain' ),
		'all_items' => __( 'All CurrentAffairs', 'textdomain' ),
		'add_new_item' => __( 'Add New CurrentAffair', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New CurrentAffair', 'textdomain' ),
		'edit_item' => __( 'Edit CurrentAffair', 'textdomain' ),
		'update_item' => __( 'Update CurrentAffair', 'textdomain' ),
		'view_item' => __( 'View CurrentAffair', 'textdomain' ),
		'view_items' => __( 'View CurrentAffairs', 'textdomain' ),
		'search_items' => __( 'Search CurrentAffair', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into CurrentAffair', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this CurrentAffair', 'textdomain' ),
		'items_list' => __( 'CurrentAffairs list', 'textdomain' ),
		'items_list_navigation' => __( 'CurrentAffairs list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter CurrentAffairs list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'CurrentAffair', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
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