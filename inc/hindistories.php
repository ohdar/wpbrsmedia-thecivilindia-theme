<?php
// Register Custom Post Type Education
// Post Type Key: hindistory

function create_hindistory_cpt() {

	$labels = array(
		'name' => _x( 'HindiStories', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'HindiStory', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'HindiStories', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'HindiStory', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'HindiStory Archives', 'wpbrsmedia' ),
		'attributes' => __( 'HindiStory Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent HindiStory:', 'wpbrsmedia' ),
		'all_items' => __( 'All HindiStories', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New HindiStory', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New HindiStory', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit HindiStory', 'wpbrsmedia' ),
		'update_item' => __( 'Update HindiStory', 'wpbrsmedia' ),
		'view_item' => __( 'View HindiStory', 'wpbrsmedia' ),
		'view_items' => __( 'View HindiStories', 'wpbrsmedia' ),
		'search_items' => __( 'Search HindiStory', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into HindiStory', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this HindiStory', 'wpbrsmedia' ),
		'items_list' => __( 'HindiStories list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'HindiStories list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter HindiStories list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'HindiStory', 'wpbrsmedia' ),
		'description' => __( 'HindiStories', 'wpbrsmedia' ),
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