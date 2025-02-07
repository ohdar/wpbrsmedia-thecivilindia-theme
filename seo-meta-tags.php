<?php
// Meta Description and Tags to Wordpress 

function custom_meta_tags() {
    global $post;

    // Title Tag
    if (is_single() || is_page()) {
        $title = get_the_title($post->ID);
    } elseif (is_home()) {
        $title = get_bloginfo('name');
    } else {
        $title = wp_title('|', false, 'right') . get_bloginfo('name');
    }
    echo '<title>' . esc_html($title) . '</title>' . "\n";

    // Meta Description
    if (is_single() || is_page()) {
        $description = '';
        
        // Check for custom excerpt or Yoast SEO meta description
        if (has_excerpt($post->ID)) {
            $description = get_the_excerpt($post->ID);
        } elseif (get_post_meta($post->ID, '_yoast_wpseo_metadesc', true)) {
            // Yoast SEO meta description
            $description = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
        } else {
            // Fallback: Use the first 160 characters of post content
            $content = strip_tags($post->post_content);
            $description = substr($content, 0, 160);
        }
        
        echo '<meta name="description" content="' . esc_attr($description) . '" />' . "\n";
    } elseif (is_home()) {
        // Fallback meta description for homepage
        echo '<meta name="description" content="Welcome to the homepage of [Site Name], where you can find articles on [topics] and more." />' . "\n";
    } else {
        // Default meta description
        echo '<meta name="description" content="Default description for all other pages of the site." />' . "\n";
    }

    // Canonical URL to avoid duplicate content issues
    if (is_single() || is_page()) {
        echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '" />' . "\n";
    }

    // Open Graph Meta Tags for social media optimization
    if (is_single() || is_page()) {
        $og_title = get_the_title($post->ID);
        $og_description = $description;
        $og_url = get_permalink();
        $og_image = '';

        if (has_post_thumbnail($post->ID)) {
            $og_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        }

        // Open Graph Meta Tags
        echo '<meta property="og:title" content="' . esc_attr($og_title) . '" />' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($og_description) . '" />' . "\n";
        echo '<meta property="og:url" content="' . esc_url($og_url) . '" />' . "\n";
        if ($og_image) {
            echo '<meta property="og:image" content="' . esc_url($og_image) . '" />' . "\n";
        }
        echo '<meta property="og:type" content="article" />' . "\n"; // Defines the content type for posts
        echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";
    }

    // Twitter Card Meta Tags for Twitter optimization
    if (is_single() || is_page()) {
        echo '<meta name="twitter:card" content="summary_large_image" />' . "\n"; // Image-heavy card
        echo '<meta name="twitter:title" content="' . esc_attr($og_title) . '" />' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr($og_description) . '" />' . "\n";
        if ($og_image) {
            echo '<meta name="twitter:image" content="' . esc_url($og_image) . '" />' . "\n";
        }
        echo '<meta name="twitter:creator" content="@your_twitter_handle" />' . "\n"; // Optional, if relevant
    }

    // Robots Meta Tags for controlling index behavior
    if (is_single()) {
        // Ensure that blog posts are indexed
        echo '<meta name="robots" content="index, follow" />' . "\n";
    } elseif (is_page()) {
        // Pages should also be indexed
        echo '<meta name="robots" content="index, follow" />' . "\n";
    } elseif (is_home() || is_archive()) {
        // Blog archive pages can be indexed
        echo '<meta name="robots" content="index, follow" />' . "\n";
    } else {
        // Noindex for other pages you may not want to appear in search engines (e.g., thank you pages, checkout pages)
        echo '<meta name="robots" content="noindex, nofollow" />' . "\n";
    }

    // Viewport for mobile optimization
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />' . "\n";

    // Schema.org JSON-LD Structured Data for Rich Snippets (for articles)
    if (is_single() || is_page()) {
        $schema_data = [
            "@context" => "http://schema.org",
            "@type" => "Article",
            "headline" => get_the_title($post->ID),
            "description" => $description,
            "image" => $og_image ? esc_url($og_image) : '',
            "author" => [
                "@type" => "Person",
                "name" => get_the_author()
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => get_bloginfo('name'),
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => esc_url(get_logo_url()) // Replace with your site's logo URL
                ]
            ],
            "datePublished" => get_the_date('c', $post->ID),
            "dateModified" => get_the_modified_date('c', $post->ID),
            "url" => get_permalink($post->ID),
        ];
        echo '<script type="application/ld+json">' . json_encode($schema_data) . '</script>' . "\n";
    }
}
?>



