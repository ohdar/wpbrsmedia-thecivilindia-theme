<?php

/**
 * WPBRSMEDIA Theme Styles & Scripts.
 */

function wpbrsmedia_scripts()
{
	// Enqueue own styles    
	wp_enqueue_style('style', get_stylesheet_uri());

    wp_register_style('wpbrsmedia-style', get_template_directory_uri(). '/assets/css/wpbrsmedia.css',array(),'1.0','all');    
    wp_enqueue_style('wpbrsmedia-style');
    
    wp_enqueue_style('dashicons');
    wp_enqueue_style('wpbrsmedia-offcanvas-style', get_template_directory_uri(). '/assets/navigation/css/offcanvas.min.css');
	wp_enqueue_style( 'wpbrsmedia-custom-menuclass', get_template_directory_uri() .'/assets/css/custom-menuclass.css', array(), false, 'all' );
	// Enqueue own JS    
	wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri(). '/assets/js/jquery.min.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('wpbrsmedia-browser', get_template_directory_uri(). '/assets/js/browser.min.js');
    wp_enqueue_script('wpbrsmedia-main', get_template_directory_uri(). '/assets/js/main.js');
    wp_enqueue_script('wpbrsmedia-offcanvas', get_template_directory_uri(). '/assets/navigation/js/offcanvas.min.js');
}
add_action('wp_enqueue_scripts', 'wpbrsmedia_scripts');
