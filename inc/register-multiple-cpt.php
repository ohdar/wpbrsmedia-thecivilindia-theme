<?php
// Register Custom Post Type IndiaTourism
// Post Type Key: foodrecipes, mythology, yoga, ayurveda, healthcare, animalkingdom, plantkingdom, indianrivers [Array first value]

function register_multiple_post_types() {
    $post_types = array(
        'foodrecipes' => array(
            'name' => 'Food Recipes',
            'singular_name' => 'Food Recipes',
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'description' => 'Food Recipes Posts',
        ),
        'mythology' => array(
            'name' => 'Mythology',
            'singular_name' => 'Mythology',
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'description' => 'Mythology Posts',
        ),
        'yoga' => array(
            'name' => 'Yoga Asanas',
            'singular_name' => 'Yoga Asanas',
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'description' => 'Yoga Asanas Posts',
        ),
        'ayurveda' => array(
            'name' => 'Ayurveda',
            'singular_name' => 'Ayurveda',
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'description' => 'Ayurveda Posts',
        ),
        'healthcare' => array(
            'name' => 'Healthcare',
            'singular_name' => 'Healthcare',
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'description' => 'Healthcare Posts',
        ),
         'animalkingdom' => array(
            'name' => 'Animal Kingdom',
            'singular_name' => 'Animal Kingdom',
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'description' => 'Animal Kingdom Posts',
        ),
         'plantkingdom' => array(
            'name' => 'Plant Kingdom',
            'singular_name' => 'Plant Kingdom',
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'description' => 'Plant Kingdom Posts',
        ),
        'indianrivers' => array(
            'name' => 'Indian Rivers',
            'singular_name' => 'Indian Rivers',
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'description' => 'Indian Rivers Posts',
        ),
        // You can add other post types here
        // 'another_post_type' => array(
        //     'name' => 'Another Post Type',
        //     'singular_name' => 'Another Post',
        //     'menu_icon' => 'dashicons-xyz',
        //     'supports' => array('title', 'editor'),
        //     'taxonomies' => array('category'),
        //     'description' => 'Another Custom Post Type',
        // ),
    );

    foreach ( $post_types as $slug => $args ) {
        $labels = array(
            'name' => _x( $args['name'], 'Post Type General Name', 'wpbrsmedia' ),
            'singular_name' => _x( $args['singular_name'], 'Post Type Singular Name', 'wpbrsmedia' ),
            'menu_name' => _x( $args['name'], 'Admin Menu text', 'wpbrsmedia' ),
            'name_admin_bar' => _x( $args['singular_name'], 'Add New on Toolbar', 'wpbrsmedia' ),
            'archives' => __( $args['singular_name'] . ' Archives', 'wpbrsmedia' ),
            'attributes' => __( $args['singular_name'] . ' Attributes', 'wpbrsmedia' ),
            'parent_item_colon' => __( 'Parent ' . $args['singular_name'] . ':', 'wpbrsmedia' ),
            'all_items' => __( 'All ' . $args['name'], 'wpbrsmedia' ),
            'add_new_item' => __( 'Add New ' . $args['singular_name'], 'wpbrsmedia' ),
            'add_new' => __( 'Add New', 'wpbrsmedia' ),
            'new_item' => __( 'New ' . $args['singular_name'], 'wpbrsmedia' ),
            'edit_item' => __( 'Edit ' . $args['singular_name'], 'wpbrsmedia' ),
            'update_item' => __( 'Update ' . $args['singular_name'], 'wpbrsmedia' ),
            'view_item' => __( 'View ' . $args['singular_name'], 'wpbrsmedia' ),
            'view_items' => __( 'View ' . $args['name'], 'wpbrsmedia' ),
            'search_items' => __( 'Search ' . $args['singular_name'], 'wpbrsmedia' ),
            'not_found' => __( 'Not found', 'wpbrsmedia' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
            'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
            'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
            'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
            'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
            'insert_into_item' => __( 'Insert into ' . $args['singular_name'], 'wpbrsmedia' ),
            'uploaded_to_this_item' => __( 'Uploaded to this ' . $args['singular_name'], 'wpbrsmedia' ),
            'items_list' => __( $args['name'] . ' list', 'wpbrsmedia' ),
            'items_list_navigation' => __( $args['name'] . ' list navigation', 'wpbrsmedia' ),
            'filter_items_list' => __( 'Filter ' . $args['name'] . ' list', 'wpbrsmedia' ),
        );

        $register_args = array(
            'label' => __( $args['singular_name'], 'wpbrsmedia' ),
            'description' => __( $args['description'], 'wpbrsmedia' ),
            'labels' => $labels,
            'menu_icon' => $args['menu_icon'],
            'supports' => $args['supports'],
            'taxonomies' => $args['taxonomies'],
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

        register_post_type( $slug, $register_args );
    }
}
add_action( 'init', 'register_multiple_post_types' );
