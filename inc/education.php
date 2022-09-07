<?php
// Register Custom Post Type Education
// Post Type Key: education


function create_education_cpt()
{
    $labels = array(
        'name' => _x('Educations', 'Post Type General Name', 'wpbrsmedia'),
        'singular_name' => _x('Education', 'Post Type Singular Name', 'wpbrsmedia'),
        'menu_name' => _x('Educations', 'Admin Menu text', 'wpbrsmedia'),
        'name_admin_bar' => _x('Education', 'Add New on Toolbar', 'wpbrsmedia'),
        'archives' => __('Education Archives', 'wpbrsmedia'),
        'attributes' => __('Education Attributes', 'wpbrsmedia'),
        'parent_item_colon' => __('Parent Education:', 'wpbrsmedia'),
        'all_items' => __('All Educations', 'wpbrsmedia'),
        'add_new_item' => __('Add New Education', 'wpbrsmedia'),
        'add_new' => __('Add New', 'wpbrsmedia'),
        'new_item' => __('New Education', 'wpbrsmedia'),
        'edit_item' => __('Edit Education', 'wpbrsmedia'),
        'update_item' => __('Update Education', 'wpbrsmedia'),
        'view_item' => __('View Education', 'wpbrsmedia'),
        'view_items' => __('View Educations', 'wpbrsmedia'),
        'search_items' => __('Search Education', 'wpbrsmedia'),
        'not_found' => __('Not found', 'wpbrsmedia'),
        'not_found_in_trash' => __('Not found in Trash', 'wpbrsmedia'),
        'featured_image' => __('Featured Image', 'wpbrsmedia'),
        'set_featured_image' => __('Set featured image', 'wpbrsmedia'),
        'remove_featured_image' => __('Remove featured image', 'wpbrsmedia'),
        'use_featured_image' => __('Use as featured image', 'wpbrsmedia'),
        'insert_into_item' => __('Insert into Education', 'wpbrsmedia'),
        'uploaded_to_this_item' => __('Uploaded to this Education', 'wpbrsmedia'),
        'items_list' => __('Educations list', 'wpbrsmedia'),
        'items_list_navigation' => __('Educations list navigation', 'wpbrsmedia'),
        'filter_items_list' => __('Filter Educations list', 'wpbrsmedia'),
    );
    $args = array(
        'label' => __('Education', 'wpbrsmedia'),
        'description' => __('News About Education', 'wpbrsmedia'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-welcome-learn-more',
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
    register_post_type('education', $args);
}
add_action('init', 'create_education_cpt', 0);
