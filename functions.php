<?php
/*
* This is our functions file
*/
//add_filter('site_transient_update_plugins', '__return_false');
//Include Theme Setup File
require get_template_directory().'/inc/wpbrsmedia-themesetup.php';

//Include Theme Styles & Scripts
require get_template_directory().'/inc/wpbrsmedia-enquescripts.php';


//Include Theme Register Sidebars File
require get_template_directory().'/inc/wpbrsmedia-regsidebars.php';

//Include Theme Register Custom Nav Menu File
require get_template_directory().'/inc/wpbrsmedia-customnavmenu.php';


//Custom Post Types CurrentAffairs
require get_template_directory().'/inc/currentaffairs.php';
//Custom Post Types Administration
require get_template_directory().'/inc/administration.php';
//Custom Post Types Major Govt Programs
require get_template_directory().'/inc/govtprograms.php';
//Custom Post Types Politics
require get_template_directory().'/inc/politics.php';
//Custom Post Types Education
require get_template_directory().'/inc/education.php';
//Custom Post Types Business
require get_template_directory().'/inc/business.php';
//Custom Post Types Leaders
require get_template_directory().'/inc/leaders.php';
//Custom Post Types Banking
require get_template_directory().'/inc/banking.php';
//Custom Post Types Infrastructure
require get_template_directory().'/inc/infrastructure.php';
//Custom Post Types India Tourism
require get_template_directory().'/inc/indiatourism.php';
//Custom Post Types Technology
require get_template_directory().'/inc/technologies.php';
//Custom Post Types Youtube Channel Videos
require get_template_directory().'/inc/ytchannel.php';



//Include Theme Features
require get_template_directory().'/inc/features-remove.php';

//TGM Plugin Activation
//require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';
//require get_template_directory().'/inc/install-plugins.php';

//Kirki Embedded
require get_template_directory().'/inc/plugins/kirki/kirki.php';
require get_template_directory().'/inc/kirki-config.php';

//Include Customizer
require get_template_directory() .'/inc/customizer.php';
//increase the upload size
//@ini_set( 'upload_max_size' , '64M' );
//@ini_set( 'post_max_size', '64M');
//@ini_set( 'max_execution_time', '300' );

// Excerpt Limit 20 words
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Show Tags below content
function tags_after_single_post_content($content) {
  $posttags = get_the_tags();
  if ($posttags) {
    $array = [];
    foreach($posttags as $tag) {
      $array[] = '<li class="x-label x-label-0">' . $tag->name . '</li>';
    }
    $content .= '<h2>Key Terms:</h2><ul class="" style="margin:0px; padding:0px">' . implode(', ' , $array ) . '</ul>';
  }

  return $content;
}
add_filter( 'the_content', 'tags_after_single_post_content' );

