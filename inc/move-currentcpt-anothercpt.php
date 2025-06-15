<?php
// Activate only when you need to Move Current CPT to Another CPT 

// Add the post type column
add_filter('manage_posts_columns', 'add_post_type_column');
function add_post_type_column($columns) {
    $columns['post_type'] = 'Post Type';
    return $columns;
}

// Display the post type in the column
add_action('manage_posts_custom_column', 'show_post_type_column', 10, 2);
function show_post_type_column($column_name, $post_id) {
    if ($column_name == 'post_type') {
        echo esc_html(get_post_type($post_id));
    }
}

// Add the dropdown to Quick Edit
add_action('quick_edit_custom_box', 'add_post_type_quick_edit', 10, 2);
function add_post_type_quick_edit($column_name, $post_type) {
    if ($column_name != 'post_type') return;

    $post_types = get_post_types(['_builtin' => false], 'objects'); // Custom post types only

    echo '<fieldset class="inline-edit-col-right">';
    echo '<div class="inline-edit-col">';
    echo '<label>';
    echo '<span class="title">Post Type</span>';
    echo '<select name="custom_post_type">';
    foreach ($post_types as $slug => $pt) {
        echo '<option value="' . esc_attr($slug) . '">' . esc_html($pt->label) . '</option>';
    }
    echo '</select>';
    echo '</label>';
    echo '</div>';
    echo '</fieldset>';
}

// Save the custom post type on Quick Edit
add_action('save_post', 'save_quick_edit_post_type');
function save_quick_edit_post_type($post_id) {
    if (!isset($_POST['custom_post_type'])) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    $new_post_type = sanitize_text_field($_POST['custom_post_type']);

    // Avoid if post type is same
    if (get_post_type($post_id) !== $new_post_type) {
        set_post_type($post_id, $new_post_type);
    }
}

// JavaScript to set the dropdown to current value in Quick Edit
add_action('admin_footer', 'quick_edit_post_type_script');
function quick_edit_post_type_script() {
    global $current_screen;
    if ($current_screen->post_type != 'post') return;

    ?>
    <script>
    jQuery(document).ready(function($) {
        var $wp_inline_edit = inlineEditPost.edit;

        inlineEditPost.edit = function(id) {
            $wp_inline_edit.apply(this, arguments);

            var post_id = 0;
            if (typeof(id) == 'object') {
                post_id = parseInt(this.getId(id));
            }

            if (post_id > 0) {
                var post_type = $('#post-' + post_id).find('td.column-post_type').text().trim();
                $('select[name="custom_post_type"]').val(post_type);
            }
        }
    });
    </script>
    <?php
}
