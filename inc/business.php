<?php
// Register Custom Post Type Business
// Post Type Key: business

function create_business_cpt()
{
    $labels = array(
        'name' => _x('Business', 'Post Type General Name', 'wpbrsmedia'),
        'singular_name' => _x('Business', 'Post Type Singular Name', 'wpbrsmedia'),
        'menu_name' => _x('Business', 'Admin Menu text', 'wpbrsmedia'),
        'name_admin_bar' => _x('Business', 'Add New on Toolbar', 'wpbrsmedia'),
        'archives' => __('Business Archives', 'wpbrsmedia'),
        'attributes' => __('Business Attributes', 'wpbrsmedia'),
        'parent_item_colon' => __('Parent Business:', 'wpbrsmedia'),
        'all_items' => __('All Business', 'wpbrsmedia'),
        'add_new_item' => __('Add New Business', 'wpbrsmedia'),
        'add_new' => __('Add New', 'wpbrsmedia'),
        'new_item' => __('New Business', 'wpbrsmedia'),
        'edit_item' => __('Edit Business', 'wpbrsmedia'),
        'update_item' => __('Update Business', 'wpbrsmedia'),
        'view_item' => __('View Business', 'wpbrsmedia'),
        'view_items' => __('View Business', 'wpbrsmedia'),
        'search_items' => __('Search Business', 'wpbrsmedia'),
        'not_found' => __('Not found', 'wpbrsmedia'),
        'not_found_in_trash' => __('Not found in Trash', 'wpbrsmedia'),
        'featured_image' => __('Featured Image', 'wpbrsmedia'),
        'set_featured_image' => __('Set featured image', 'wpbrsmedia'),
        'remove_featured_image' => __('Remove featured image', 'wpbrsmedia'),
        'use_featured_image' => __('Use as featured image', 'wpbrsmedia'),
        'insert_into_item' => __('Insert into Business', 'wpbrsmedia'),
        'uploaded_to_this_item' => __('Uploaded to this Business', 'wpbrsmedia'),
        'items_list' => __('Business list', 'wpbrsmedia'),
        'items_list_navigation' => __('Business list navigation', 'wpbrsmedia'),
        'filter_items_list' => __('Filter Business list', 'wpbrsmedia'),
    );
    $args = array(
        'label' => __('Business', 'wpbrsmedia'),
        'description' => __('News About Business', 'wpbrsmedia'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-networking',
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
    register_post_type('business', $args);
}
add_action('init', 'create_business_cpt', 0);


