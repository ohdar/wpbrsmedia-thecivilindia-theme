<?php

add_action( 'login_head', 'custom_hide_login_footer_elements' );
function custom_hide_login_footer_elements() {
    ?>
    <style>
        /* Hide the "Back to site" link */
        .login #backtoblog {
            display: none !important;
        }

        /* Hide the WordPress footer credit */
        .login #nav {
            display: none !important;
        }

        /* Optional: Hide error/notice messages (if you want) */
        .login .message,
        .login .error {
            display: none !important;
        }
    </style>
    <?php
}

function custom_login_form_transparent_box_only() {
    echo '<style type="text/css">
        /* Make only the form container background transparent */
        .login form {
            background: transparent !important;
            box-shadow: none !important;
            
        }

        /* Keep input fields solid */
        .login form input[type="text"],
        .login form input[type="password"],
        .login form input[type="checkbox"],
        .login form input[type="submit"],
        .login form label {
            background: transparent !important;;
            color: #000 !important;
        }

        /* Optional: keep instruction or error messages visible */
        .login .message,
        .login .success,
        .login .error {
            background: rgba(255,255,255,0.8) !important;
            color: #000 !important;
        }
    </style>';
}
add_action('login_head', 'custom_login_form_transparent_box_only');


// Custom Branding of Login Page

if( !function_exists( 'custom_login_screen_style' ) ){
    function custom_login_screen_style() {
        echo '<style>
            /* Custom login logo */
            h1 a { 
            background-image: url("https://www.thecivilindia.com/wp-content/uploads/2025/05/Thecivilindia-logo1.webp") !important; 
            background-size: contain !important;
            width: 320px !important;
            height: 320px !important;
            }
            
            /* Custom login page background */
            body.login {
                background-image: url("https://www.thecivilindia.com/wp-content/uploads/2025/05/thecivil-login-bg.webp");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>';
    }
    add_action( 'login_head', 'custom_login_screen_style' );
}

if( ! function_exists( 'custom_login_logo_url' ) ){
    add_filter( 'login_headerurl', 'custom_login_logo_url' );
    function custom_login_logo_url() {
        return 'https://www.thecivilindia.com';
    }
}

if( !function_exists( 'custom_admin_bar_logo' ) ) {
    function custom_admin_bar_logo()
    {
        if(!is_user_logged_in()){
            return;
        }
        echo '
        <style>
            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
                background-image: url("https://www.thecivilindia.com/wp-content/uploads/2025/02/thecivilindia.png") !important;
                background-position: 0 0;
                color:rgba(0, 0, 0, 0);
                background-size: contain;
            }
            #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
                background-position: 0 0;
            }
        </style>
        ';
    }
    add_action('admin_head', 'custom_admin_bar_logo'); // for the back-end
    add_action('wp_head', 'custom_admin_bar_logo'); // for the front end
}

if( !function_exists( 'custom_admin_bar_logo_link' ) ){
    function custom_admin_bar_logo_link() {
        if( !is_user_logged_in() ){
            return;
        }
        echo "
        <script type='text/javascript'>
            (function(){
                document
                    .getElementById('wp-admin-bar-wp-logo')
                    .children[0]
                    .setAttribute('href', 'https://www.thecivilindia.com')
            })();
        </script>
        ";
    }
    add_action('admin_footer', 'custom_admin_bar_logo_link'); //Trigger on backend
    add_action('wp_footer', 'custom_admin_bar_logo_link'); //Trigger on front-end
}

function custom_admin_footer() {
    echo 'THIS COMMUNITY PROJECT MANAGED BY <a href="https://www.itsbrsmedia.com" target="_blank">BRS MEDIA</a>'; // Empty string to remove the default footer text
}
add_filter( 'admin_footer_text', 'custom_admin_footer' );




if( !function_exists('custom_remove_wp_links_under_the_logo') ) {
    function custom_remove_wp_links_under_the_logo() {
        if( !is_user_logged_in() ){
            return;
        }
        echo '
        <style>
            /* Hide only the dropdown under the WordPress logo */
            #wpadminbar #wp-admin-bar-wp-logo:hover > .ab-sub-wrapper {
                display: none !important;
            }
        </style>
        ';
    }
    add_action('admin_head', 'custom_remove_wp_links_under_the_logo'); // Hide on backend
    add_action('wp_head', 'custom_remove_wp_links_under_the_logo'); // Hide on frontend
}

function hide_screen_options_and_help() {
    echo '<style>
        /* Hide Screen Options button in the top right of the admin screen */
        #screen-options-link-wrap {
            display: none !important;
        }

        /* Hide Help button */
        #contextual-help-link-wrap {
            display: none !important;
        }
    </style>';
}
add_action('admin_head', 'hide_screen_options_and_help');










