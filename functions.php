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
//Custom Post Types CityProfile
require get_template_directory().'/inc/cityprofile.php';
//Custom Post Types India Tourism
require get_template_directory().'/inc/indiatourism.php';
//Custom Post Types Technology
require get_template_directory().'/inc/technologies.php';
//Custom Post Types Youtube Channel Videos
require get_template_directory().'/inc/ytchannel.php';
//Custom Post Types Hindi Stories
require get_template_directory() .'/inc/hindistories.php';

//Custom Post Types Food Industries of India
require get_template_directory() .'/inc/naturalfoodindustry.php';






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





function my_single_templates($single_template) {
    global $post;

    if ( $post->post_type == "leader") {
        $single_template = get_template_directory(). 'single-leader.php';
    }

    // Copy the above for your other categories

    return $single_template;
}

//add_filter( "single_template", "my_single_templates" );


// Define what post types to search
function searchAll( $query ) {
	if ( $query->is_search ) {
		$query->set( 'post_type', array( 'post', 
      									 'page', 
      									 'feed',
      									 'administration', 
      									 'hindistory',
      									 'currentaffair',
      									 'govtprogram',
      									 'politics', 
      									 'education',
      									 'business',
      									 'leader',
      									 'banking', 
      									 'infrastructure',
      									 'indiatourism',
      									 'technology',
      									 'naturalfood'
      										));
	}
	return $query;
}

// The hook needed to search ALL content
add_filter( 'the_search_query', 'searchAll' );

function namespace_add_custom_types( $query1 ) {
  if( is_category() || is_tag() && empty( $query1->query_vars['suppress_filters'] ) ) {
    $query1->set( 'post_type', array('post', 
    								 'nav_menu_item',
                                     'administration', 
      								 'hindistory',
      								 'currentaffair',
      								 'govtprogram',
      								 'politics', 
      								 'education',
      								 'business',
      								 'leader',
      								 'banking', 
      								 'infrastructure',
      								 'indiatourism',
      								 'technology',
      								 'naturalfood'
		));
	  return $query1;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );



// Excerpt Limit 15 words
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
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

// Show Tags below content With Tag Links
function tags_after_single_post_content1($content) {
  $posttags = get_the_tags();
  if ($posttags) {
    $array = [];
    foreach($posttags as $tag) {
      $array[] = '<li class="x-label x-label-0"><a style="color:white" href="/tag/' . $tag->slug . '/">' . $tag->name . '</a></li>';
    }
    $content .= '<h2>Key Terms:</h2><ul class="" style="margin:0px; padding:0px">' . implode(', ', $array) . '</ul>';
  }

  return $content;
}
//add_filter( 'the_content', 'tags_after_single_post_content1' );


