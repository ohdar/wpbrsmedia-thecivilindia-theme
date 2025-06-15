<?php
//Start-WordPress Caching Headers ETag and Last-Modified Headers
function custom_cache_headers() {
    if (is_singular()) {
        // Add Cache-Control header for dynamic content like posts
        header('Cache-Control: private, max-age=600, must-revalidate');
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 600) . ' GMT');
    } else {
        // Add Cache-Control for static content like images, CSS, and JS
        header('Cache-Control: public, max-age=31536000, immutable');
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
    }
}
add_action('send_headers', 'custom_cache_headers');

function add_etag_and_last_modified_headers() {
    if (!is_admin()) {
        $last_modified = filemtime(get_template_directory() . '/assets/css/wpbrsmedia.css');
        $etag = md5($last_modified);

        // Set the Last-Modified header
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $last_modified) . ' GMT');

        // Set the ETag header
        header('ETag: "' . $etag . '"');

        // If the resource hasn’t changed, send a 304 Not Modified response
        if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified || $_SERVER['HTTP_IF_NONE_MATCH'] == $etag) {
            header('HTTP/1.1 304 Not Modified');
            exit;
        }
    }
}
add_action('send_headers', 'add_etag_and_last_modified_headers');


//End-WordPress Caching Headers ETag and Last-Modified Headers

//Cache Clearing Mechanism: Force Cache Invalidation with Versioning or Cache Busting

function my_theme_enqueue_scripts() {
    $css_version = filemtime(get_template_directory() . '/assets/css/wpbrsmedia.css'); // Use filemtime for cache-busting

    // Enqueue CSS with version
    wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/assets/css/wpbrsmedia.css', array(), $css_version);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// Function to clear cache (flush headers, reset cache)
function custom_clear_cache() {
    // Flush object cache (if any)
    wp_cache_flush();

    // Clear transients (optional based on your use case)
    delete_transient('your_transient_key');

    // You can add further cache clearing logic if using server-side caches like Redis or Memcached
}

// Add Clear Cache Button in Admin Bar
function add_clear_cache_button_to_admin_bar($wp_admin_bar) {
    $wp_admin_bar->add_node(array(
        'id' => 'clear_cache_button',
        'title' => 'Clear Cache',
        'href' => '#',
        'meta' => array('onclick' => 'customClearCache(); return false;'),
    ));
}
add_action('admin_bar_menu', 'add_clear_cache_button_to_admin_bar', 100);

// JavaScript for AJAX Call to Clear Cache
function custom_clear_cache_js() {
    ?>
    <script type="text/javascript">
    function customClearCache() {
        jQuery.ajax({
            url: ajaxurl,
            method: 'POST',
            data: {
                action: 'clear_cache'  // Trigger custom_clear_cache function
            },
            success: function(response) {
                alert('Cache Cleared!');
            }
        });
    }
    </script>
    <?php
}
add_action('admin_footer', 'custom_clear_cache_js');

// Handle AJAX request to clear cache
function handle_clear_cache_ajax() {
    custom_clear_cache();  // Clear cache when the AJAX request is triggered
    wp_send_json_success();
}
add_action('wp_ajax_clear_cache', 'handle_clear_cache_ajax');

$css_version = filemtime(get_template_directory() . '/assets/css/wpbrsmedia.css'); // Cache-busting version based on file modification time

