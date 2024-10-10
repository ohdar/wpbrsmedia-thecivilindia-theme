<?php
// Register Custom Post Type Poitics
// Post Type Key: politics

function create_poitics_cpt()
{
    $labels = array(
        'name' => _x('Poitics', 'Post Type General Name', 'wpbrsmedia'),
        'singular_name' => _x('Poitics', 'Post Type Singular Name', 'wpbrsmedia'),
        'menu_name' => _x('Poitics', 'Admin Menu text', 'wpbrsmedia'),
        'name_admin_bar' => _x('Poitics', 'Add New on Toolbar', 'wpbrsmedia'),
        'archives' => __('Poitics Archives', 'wpbrsmedia'),
        'attributes' => __('Poitics Attributes', 'wpbrsmedia'),
        'parent_item_colon' => __('Parent Poitics:', 'wpbrsmedia'),
        'all_items' => __('All Poitics', 'wpbrsmedia'),
        'add_new_item' => __('Add New Poitics', 'wpbrsmedia'),
        'add_new' => __('Add New', 'wpbrsmedia'),
        'new_item' => __('New Poitics', 'wpbrsmedia'),
        'edit_item' => __('Edit Poitics', 'wpbrsmedia'),
        'update_item' => __('Update Poitics', 'wpbrsmedia'),
        'view_item' => __('View Poitics', 'wpbrsmedia'),
        'view_items' => __('View Poitics', 'wpbrsmedia'),
        'search_items' => __('Search Poitics', 'wpbrsmedia'),
        'not_found' => __('Not found', 'wpbrsmedia'),
        'not_found_in_trash' => __('Not found in Trash', 'wpbrsmedia'),
        'featured_image' => __('Featured Image', 'wpbrsmedia'),
        'set_featured_image' => __('Set featured image', 'wpbrsmedia'),
        'remove_featured_image' => __('Remove featured image', 'wpbrsmedia'),
        'use_featured_image' => __('Use as featured image', 'wpbrsmedia'),
        'insert_into_item' => __('Insert into Poitics', 'wpbrsmedia'),
        'uploaded_to_this_item' => __('Uploaded to this Poitics', 'wpbrsmedia'),
        'items_list' => __('Poitics list', 'wpbrsmedia'),
        'items_list_navigation' => __('Poitics list navigation', 'wpbrsmedia'),
        'filter_items_list' => __('Filter Poitics list', 'wpbrsmedia'),
    );
    $args = array(
        'label' => __('Poitics', 'wpbrsmedia'),
        'description' => __('News About Politics', 'wpbrsmedia'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-buddicons-groups',
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
    register_post_type('politics', $args);
}
add_action('init', 'create_poitics_cpt', 0);
