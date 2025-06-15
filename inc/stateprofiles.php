<?php
// Register Custom Post Type State Profiles
// FileName: stateprofile.php
// Post Type Key: stateprofile


function create_stateprofile_cpt() {

	$labels = array(
		'name' => _x( 'StateProfiles', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'StateProfile', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'StateProfiles', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'StateProfile', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'StateProfile Archives', 'wpbrsmedia' ),
		'attributes' => __( 'StateProfile Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent StateProfile:', 'wpbrsmedia' ),
		'all_items' => __( 'All StateProfiles', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New StateProfile', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New StateProfile', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit StateProfile', 'wpbrsmedia' ),
		'update_item' => __( 'Update StateProfile', 'wpbrsmedia' ),
		'view_item' => __( 'View StateProfile', 'wpbrsmedia' ),
		'view_items' => __( 'View StateProfiles', 'wpbrsmedia' ),
		'search_items' => __( 'Search StateProfile', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into StateProfile', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this StateProfile', 'wpbrsmedia' ),
		'items_list' => __( 'StateProfiles list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'StateProfiles list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter StateProfiles list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'StateProfile', 'wpbrsmedia' ),
		'description' => __( 'State Profiles of India', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-building',
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
	register_post_type( 'stateprofile', $args );

}
add_action( 'init', 'create_stateprofile_cpt', 0 );
