<?php
// Shows Total Post Counts Per Post Type in Admin Dashboard

if (is_admin()) {
    // Only run this in admin area
    add_action('wp_dashboard_setup', 'custom_dashboard_total_posts_widget');

    function custom_dashboard_total_posts_widget() {
        wp_add_dashboard_widget(
            'custom_total_posts_widget',              // Widget slug
            'Total Published Articles by Post Type',  // Title
            'custom_total_posts_widget_display'       // Display callback
        );
    }

    function custom_total_posts_widget_display() {
        // Try to get cached result
        $cached = get_transient('dashboard_post_type_counts');

        if ($cached === false) {
            $args = array('public' => true);
            $all_post_types = get_post_types($args, 'objects'); // Use 'objects' to get labels

            $counts = [];
            $total = 0;

            foreach ($all_post_types as $post_type => $post_type_obj) {
                // Count Media (attachments) as well
                $count = wp_count_posts($post_type);
                $published = isset($count->publish) ? $count->publish : 0;

                // Handle Media/Attachments separately if needed
                if ($post_type === 'attachment') {
                    $counts['Media'] = $published; // Label it as Media
                } else {
                    $counts[$post_type_obj->labels->name] = $published;
                }

                $total += $published;
            }

            ksort($counts); // Sort alphabetically by label

            // Cache for 12 hours (store both counts and total)
            set_transient('dashboard_post_type_counts', [
                'counts' => $counts,
                'total'  => $total,
            ], 12 * HOUR_IN_SECONDS);
        } else {
            $counts = isset($cached['counts']) ? $cached['counts'] : $cached;
            $total  = isset($cached['total']) ? $cached['total'] : array_sum($cached);
        }

        echo '<ul>';
        foreach ($counts as $label => $count) {
            echo '<li><strong>' . esc_html($label) . ':</strong> ' . number_format_i18n($count) . '</li>';
        }
        echo '</ul>';

        // Add a separator line before the final total
        echo '<hr>';

        // Display the total Pages & Articles
        echo '<p><strong>Total Pages & Articles:</strong> ' . number_format_i18n($total) . '</p>';
    }
}



