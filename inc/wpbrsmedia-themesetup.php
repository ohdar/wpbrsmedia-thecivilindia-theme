<?php

/**
 * WPBRSMEDIA Theme Setup.
 */

function wpbrsmedia_theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('home-featured', 580, 300, array('center', 'center'));
    add_image_size('single-post', 1200, 600, array('center', 'center'));
    add_image_size('single-post-tourism', 1200, 600, array('center', 'center'));
  	add_image_size('custom-administration-post', 300, 300, array('center', 'center'));
  	add_image_size('custom-cityprofile-post', 300, 300, array('center', 'center'));
  	add_image_size('custom-stateprofile-post', 300, 300, array('center', 'center'));
    
    
    add_theme_support('automatic-feed-links');
    add_theme_support('woocommerce');
  	
  	add_theme_support( 'responsive-embeds' ); /* Youtube Embed Size full Width */
	add_theme_support( 'custom-spacing' );

    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'wpbrsmedia')
    ));

    register_nav_menus(array(
        'secondary'   => __('Secondary Menu', 'wpbrsmedia')
    ));
};

add_action('after_setup_theme', 'wpbrsmedia_theme_setup');
