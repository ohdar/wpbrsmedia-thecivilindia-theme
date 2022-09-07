<?php
//The Side Menu
add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type()
{
    remove_menu_page('edit.php');
}

//The +New Post in Admin Bar
add_action('admin_bar_menu', 'remove_default_post_type_menu_bar', 999);

function remove_default_post_type_menu_bar($wp_admin_bar)
{
    $wp_admin_bar->remove_node('new-post');
}

//The Quick Draft Dashboard Widget
add_action('wp_dashboard_setup', 'remove_draft_widget', 999);

function remove_draft_widget()
{
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}

//Remove Comments from WordPress Admin Bar
add_action('admin_menu', 'my_remove_admin_menus');
function my_remove_admin_menus()
{
    remove_menu_page('edit-comments.php');
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support()
{
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
}
// Removes from admin bar
function mytheme_admin_bar_render()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'mytheme_admin_bar_render');


// Remove unneeded menus
function sc_remove_menus()
{
    // setup the global menu variable
    global $menu;
    // this is an array of the menu item names we wish to remove
    //$restricted = array( __('Links'),__('Tools'),__('Comments'), __('Media'), __('Settings'));
    $restricted = array( __('Tools'), __('Settings'));
    //$restricted = array( __('Tools'));
    end($menu);
    while (prev($menu)) {
        $value = explode(' ', $menu[key($menu)][0]);
        if (in_array($value[0] != null?$value[0]:"", $restricted)) {
            unset($menu[key($menu)]);
        }
    }
}
// hook into the action that creates the menu
add_action('admin_menu', 'sc_remove_menus');
