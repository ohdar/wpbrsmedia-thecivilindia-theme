<?php
/*
* This is used to show pages
*/

get_header()
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-9 col-12-medium">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <!-- Content Page -->
                            <article class="box post">
                                <?php 
                                            if ( has_post_thumbnail() ) { 
                                                echo '<figure style="float:right; margin:0em 0em 2em 1em; border: 2px solid #0c62a5; border-radius: 10px;">';
                                                ?>
                                                <a href="<?php the_permalink(); ?>" class="">
                                                    <?php 
                                                    $image_id = get_post_thumbnail_id();
                                                    $mime_type = get_post_mime_type($image_id);
                                            
                                                    if ( $mime_type === 'image/svg+xml' ) {
                                                        // SVG: output the raw image URL
                                                        $thumbnail_url = wp_get_attachment_url($image_id);
                                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                                        if ( ! $image_alt ) {
                                                            $image_alt = get_the_title();
                                                        }
                                                        echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr($image_alt) . '" style="max-width:300px; height:auto;" />';
                                                    } else {
                                                        // Other image types: output thumbnail normally
                                                        the_post_thumbnail('custom-stateprofile-post');
                                                    }
                                                    ?>
                                                </a>
                                                <?php 
                                            
                                                $image_title = get_the_title($image_id);
                                            
                                                echo '<figcaption style="text-align: center; color: #333333; text-transform: uppercase; font-weight: 400;">';
                                                echo esc_html($image_title);                  
                                                echo '</figcaption>';
                                                echo '</figure>';
                                            }
                                            ?>   
                                <header>
                          			
                                    <h2><?php the_title() ?></h2>
                                </header>

                                <?php the_content() ?>

                            </article>
                    <?php }
                    }
                ?>
                

            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</section>

<?php get_footer() ?>