<?php
// Register Custom Post Type Education
// Post Type Key: hindistory

function create_hindistory_cpt() {

	$labels = array(
		'name' => _x( 'Hindi Stories', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Hindi Story', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Hindi Stories', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Hindi Story', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Hindi Story Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Hindi Story Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Hindi Story:', 'wpbrsmedia' ),
		'all_items' => __( 'All Hindi Stories', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Hindi Story', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Hindi Story', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Hindi Story', 'wpbrsmedia' ),
		'update_item' => __( 'Update Hindi Story', 'wpbrsmedia' ),
		'view_item' => __( 'View Hindi Story', 'wpbrsmedia' ),
		'view_items' => __( 'View Hindi Stories', 'wpbrsmedia' ),
		'search_items' => __( 'Search Hindi Story', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Hindi Story', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Hindi Story', 'wpbrsmedia' ),
		'items_list' => __( 'Hindi Stories list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Hindi Stories list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Hindi Stories list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Hindi Story', 'wpbrsmedia' ),
		'description' => __( 'Hindi Stories', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-networking',
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
	register_post_type( 'hindistory', $args );

}
add_action( 'init', 'create_hindistory_cpt', 0 );