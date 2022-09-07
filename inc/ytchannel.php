<?php
// Register Custom Post Type YTChannel
// Post Type Key: ytchannel

function create_ytchannel_cpt() {

	$labels = array(
		'name' => _x( 'YTChannels', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'YTChannel', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'YTChannels', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'YTChannel', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'YTChannel Archives', 'wpbrsmedia' ),
		'attributes' => __( 'YTChannel Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent YTChannel:', 'wpbrsmedia' ),
		'all_items' => __( 'All YTChannels', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New YTChannel', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New YTChannel', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit YTChannel', 'wpbrsmedia' ),
		'update_item' => __( 'Update YTChannel', 'wpbrsmedia' ),
		'view_item' => __( 'View YTChannel', 'wpbrsmedia' ),
		'view_items' => __( 'View YTChannels', 'wpbrsmedia' ),
		'search_items' => __( 'Search YTChannel', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into YTChannel', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this YTChannel', 'wpbrsmedia' ),
		'items_list' => __( 'YTChannels list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'YTChannels list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter YTChannels list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'YTChannel', 'wpbrsmedia' ),
		'description' => __( 'YouTube Channel Resource', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-video',
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
		'query_var' => 'youtubecatagory',
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'ytchannel', $args );

}
add_action( 'init', 'create_ytchannel_cpt', 0 );