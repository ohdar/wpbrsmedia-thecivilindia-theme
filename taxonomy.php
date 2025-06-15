<?php
/*
* This template is used to display posts by taxonomy (e.g., category or custom taxonomy)
*/

get_header(); 
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-12-medium">
                <?php
                    // Get the current taxonomy term
                    if (is_tax()) {
                        $term = get_queried_object(); // Get the current taxonomy term object
                        echo '<h2>Posts in "' . esc_html($term->name) . '"</h2>'; // Display the taxonomy term name
                        if (!empty($term->description)) {
                            echo '<p>' . esc_html($term->description) . '</p>'; // Display the description of the taxonomy term
                        }
                    }

                    // Start the WordPress Loop
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post(); ?>
                            <div class="col-6 col-12-small">
                                <section class="box">
                                    <a href="<?php the_permalink(); ?>" class="image left">
                                        <?php // the_post_thumbnail(array(200, 200)); ?>
                          				<?php the_post_thumbnail(); ?>
                                    </a>
                                    <header>
                                        <h3><?php the_title(); ?></h3>
                                        <p>Posted on <?php the_date(); ?> at <?php the_time(); ?></p>
                                    </header>
                                    <?php the_excerpt(); ?>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="<?php the_permalink(); ?>" class="button icon solid fa-file-alt">Check out all about <?php the_title() ?></a></li>
                                            <!-- <li><a href="<?php comments_link(); ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number(); ?> comments</a></li> -->
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                        <?php }
                    } else {
                        echo '<p>No posts found in this taxonomy term.</p>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
