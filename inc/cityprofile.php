<?php
// Register Custom Post Type Education
// Post Type Key: cityprofile

function create_cityprofile_cpt() {

	$labels = array(
		'name' => _x( 'CityProfiles', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Cityprofile', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Cityprofiles', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Cityprofile', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Cityprofile Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Cityprofile Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Cityprofile:', 'wpbrsmedia' ),
		'all_items' => __( 'All Cityprofiles', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Cityprofile', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Cityprofile', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Cityprofile', 'wpbrsmedia' ),
		'update_item' => __( 'Update Cityprofile', 'wpbrsmedia' ),
		'view_item' => __( 'View Cityprofile', 'wpbrsmedia' ),
		'view_items' => __( 'View Cityprofiles', 'wpbrsmedia' ),
		'search_items' => __( 'Search Cityprofile', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Cityprofile', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Cityprofile', 'wpbrsmedia' ),
		'items_list' => __( 'Cityprofiles list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Cityprofiles list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Cityprofiles list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'CityProfile', 'wpbrsmedia' ),
		'description' => __( 'Profile in Indian Cities', 'wpbrsmedia' ),
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
	register_post_type( 'cityprofile', $args );

}
add_action( 'init', 'create_cityprofile_cpt', 0 );
