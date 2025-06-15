<?php
/*
* This is our functions file
*/
//add_filter('site_transient_update_plugins', '__return_false');
//Include Theme Setup File
require get_template_directory().'/inc/wpbrsmedia-themesetup.php';

//Custom Login Screen Branding Theme Setup File
require get_template_directory().'/inc/thecivilindia-branding.php';

//Include Theme Styles & Scripts
require get_template_directory().'/inc/wpbrsmedia-enquescripts.php';


//Include Theme Register Sidebars File
require get_template_directory().'/inc/wpbrsmedia-regsidebars.php';

//Include Theme Register Custom Nav Menu File
require get_template_directory().'/inc/wpbrsmedia-customnavmenu.php';


//Custom Post Types CurrentAffairs
require get_template_directory().'/inc/currentaffairs.php';

//Custom Post Types Quizzes Lists
require get_template_directory() .'/inc/quizzes-list.php';

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
//Custom Post Types StateProfiles
require get_template_directory().'/inc/stateprofiles.php';
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

//Register Multiple Custom Post Types
require get_template_directory() .'/inc/register-multiple-cpt.php';

//Register Multiple Custom Post Types Institutional Profiles
require get_template_directory() .'/inc/institutional-profiles-multi-cpt.php';


//Custom Taxonomies
require get_template_directory() .'/inc/custom-taxonomies.php';
// require get_template_directory() .'/inc/custom-districts-taxonomies.php'; // Run once manually, then remove the hook because it will slow the server by running again and again
require get_template_directory() .'/inc/countries-taxonomies.php';


//Start-WordPress Caching Headers ETag and Last-Modified Headers
//require get_template_directory() .'/inc/cachecontrol.php';


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



//The code snippet you provided is a WordPress filter to change the font-display property for Google Fonts. how Google Fonts are displayed on your website.
add_filter( 'generate_google_font_display', function() {
    return 'swap';
} );



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

function modify_query_post_types( $query ) {
    // Only modify the main query on frontend
    if ( ! is_admin() && $query->is_main_query() ) {

        // For search pages
        if ( $query->is_search() ) {
            // Get all public post types for search
            $post_types = get_post_types( [ 'public' => true ], 'names' );
            $query->set( 'post_type', $post_types );
        }

        // For category or tag archive pages
        if ( $query->is_category() || $query->is_tag() ) {
            // Get all public post types for category/tag archives
            $post_types = get_post_types( [ 'public' => true ], 'names' );

            // Optionally exclude 'nav_menu_item' if you don't want it here
            if ( ( $key = array_search( 'nav_menu_item', $post_types ) ) !== false ) {
                unset( $post_types[ $key ] );
            }

            $query->set( 'post_type', $post_types );
        }
    }
}
add_filter( 'pre_get_posts', 'modify_query_post_types' );

// Change defult search (https://www.thecivilindia.com/?s=plan). To make search URLs cleaner and more user-friendly
function custom_search_rewrite() {
    add_rewrite_rule( '^search/(.+)/?$', 'index.php?s=$matches[1]', 'top' );
}
add_action( 'init', 'custom_search_rewrite' );

function redirect_search_query() {
    if ( is_search() && !is_admin() && strpos( $_SERVER['REQUEST_URI'], '/search/' ) === false ) {
        wp_redirect( home_url( '/search/' . urlencode( get_query_var( 's' ) ) ) );
        exit();
    }
}
add_action( 'template_redirect', 'redirect_search_query' );


// Excerpt Limit 15 words
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Show Tags below content
function tags_after_single_post_content($content) {
  if (is_single()) { // Ensure this only runs on single posts
    $posttags = get_the_tags();
    if ($posttags) {
      $array = [];
      foreach($posttags as $tag) {
        $tag_link = get_tag_link($tag->term_id);
        $array[] = '<li class="x-label x-label-0"><a class="x-label-0" href="' . esc_url($tag_link) . '">' . esc_html($tag->name) . '</a></li>';
      }
      $content .= '<h2>Key Terms:</h2><ul class="" style="margin:0px; padding:0px">' . implode('', $array) . '</ul>';  
      
      $content .= '<br><hr class="wp-block-separator has-alpha-channel-opacity">';
 	  $content .= '<p><strong><i>Disclaimer:</strong> The information provided here has been compiled from various sources to ';
      $content .= 'the best of our knowledge. While every effort has been made to ensure the accuracy of the details, there may be occasional ';
      $content .= 'errors or omissions. If you find any discrepancies or incorrect information, kindly inform us so we can make the necessary ';
      $content .= 'corrections. Thank you for your understanding and cooperation.</i></p>';
      $content .= '<hr class="wp-block-separator has-alpha-channel-opacity">';
    }
  }
  return $content;
}
add_filter('the_content', 'tags_after_single_post_content');


//This code will extract the first heading (e.g., <h2> or <h3>) from the post content and output it as a <meta> tag for SEO purposes
// Define your custom function to extract the first heading
function my_custom_first_heading_meta() {
    if (is_single()) {
        // Get the content of the post
        $content = get_the_content();

        // Debug: check the content
        //echo '<!-- Content: ' . esc_html($content) . ' -->';

        // Use a regular expression to match the first <h2> or <h3> tag
        if (preg_match('/<h[2-3][^>]*>(.*?)<\/h[2-3]>/', $content, $matches)) {
            $first_heading = $matches[1]; // Extract the heading text

            // Output the first heading as a <meta> tag for SEO purposes
            //echo '<meta name="title" content="' . esc_attr($first_heading) . '" />';
          	echo '<title>' . esc_attr($first_heading) . '</title>';
            echo '<!-- Heading Found: ' . esc_html($first_heading) . ' -->';
        } else {
            // If no heading is found, output a default meta title
            echo '<meta name="title" content="No headings found." />';
            echo '<!-- No Heading Found -->';
        }
    }
}

// Hook your custom function into the 'wp_head' action
//add_action('wp_head', 'my_custom_first_heading_meta');


// Caution Activate only when you need to Move Current CPT to Another CPT e.g from HindiStory to Mythology etc
//require get_template_directory() .'/inc/move-currentcpt-anothercpt.php';

// Shows Total Post in admin dashboard
require get_template_directory() .'/inc/admintotal-post-count.php';

// Code to Increase Posts Per Page in Admin Dashboard
function custom_edit_posts_per_page($per_page, $post_type) {
    // Apply only in admin dashboard
    if (is_admin()) {
        // Get all public post types (e.g., post, page, custom post types)
        $post_types = get_post_types(['public' => true], 'names');

        // Apply the per-page change only to those post types
        if (in_array($post_type, $post_types)) {
            return 50; // Change this number as needed
        }
    }

    return $per_page;
}
add_filter('edit_posts_per_page', 'custom_edit_posts_per_page', 10, 2);

//Tell search engines not to index feeds, but allow them to follow links
function add_noindex_to_feed() {
    if (is_feed()) {
        echo '<meta name="robots" content="noindex, follow">';
    }
}
add_action('wp_head', 'add_noindex_to_feed');

// dynamically include all post types that support the post_tag taxonomy
add_action('pre_get_posts', function ($query) {
    if (!is_admin() && $query->is_tag() && $query->is_main_query()) {
        // Get all post types that support 'post_tag'
        $post_types = get_post_types(['public' => true], 'names');
        $tagged_post_types = [];

        foreach ($post_types as $post_type) {
            if (is_object_in_taxonomy($post_type, 'post_tag')) {
                $tagged_post_types[] = $post_type;
            }
        }

        $query->set('post_type', $tagged_post_types);
    }
});






