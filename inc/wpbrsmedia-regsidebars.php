<?php
/*
* This is our functions file
*/

//Include Theme Setup File

function wpbrsmedia_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'wpbrsmedia'),
        'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'wpbrsmedia'),
        'id'            => 'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'wpbrsmedia'),
        'id'            => 'footer-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'wpbrsmedia'),
        'id'            => 'footer-3',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 4', 'wpbrsmedia'),
        'id'            => 'footer-4',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 5', 'wpbrsmedia'),
        'id'            => 'footer-5',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 6', 'wpbrsmedia'),
        'id'            => 'footer-6',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ));
   
}
add_action('widgets_init', 'wpbrsmedia_widgets_init');
