<?php
// Register Custom Post Type QuizzesList
// Post Type Key: quizzeslist

function create_quizzeslist_cpt() {

	$labels = array(
		'name' => _x( 'QuizzesLists', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'QuizzesList', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'QuizzesLists', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'QuizzesList', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'QuizzesList Archives', 'wpbrsmedia' ),
		'attributes' => __( 'QuizzesList Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent QuizzesList:', 'wpbrsmedia' ),
		'all_items' => __( 'All QuizzesLists', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New QuizzesList', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New QuizzesList', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit QuizzesList', 'wpbrsmedia' ),
		'update_item' => __( 'Update QuizzesList', 'wpbrsmedia' ),
		'view_item' => __( 'View QuizzesList', 'wpbrsmedia' ),
		'view_items' => __( 'View QuizzesLists', 'wpbrsmedia' ),
		'search_items' => __( 'Search QuizzesList', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into QuizzesList', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this QuizzesList', 'wpbrsmedia' ),
		'items_list' => __( 'QuizzesLists list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'QuizzesLists list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter QuizzesLists list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'QuizzesList', 'wpbrsmedia' ),
		'description' => __( 'Quizzes to test your skills', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-network',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 4,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'quizzeslist', $args );

}
add_action( 'init', 'create_quizzeslist_cpt', 0 );