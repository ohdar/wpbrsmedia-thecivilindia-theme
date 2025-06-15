<?php
/*
 * This template is used to display posts assigned to a specific tag.
 * Save this as tag.php in your theme folder.
 */

get_header(); 
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-12-medium">

                <?php
                // Get the current tag object
                if (is_tag()) {
                    $tag = get_queried_object();
                    echo '<h1>Posts for tag: ' . esc_html($tag->name) . '</h1>';
                    if (!empty($tag->description)) {
                        echo '<p>' . esc_html($tag->description) . '</p>';
                    }
                }
                ?>

                <?php if (have_posts()) : ?>
                    <div class="row">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-12 col-12-small">
                                <section class="box">
                                    <a href="<?php the_permalink(); ?>" class="image left">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <header>
                                        <h3><?php the_title(); ?></h3>
                                        <p>Posted on <?php the_time(get_option('date_format')); ?> at <?php the_time(); ?></p>
                                    </header>
                                    <?php the_excerpt(); ?>
                                    <footer>
                                        <ul class="actions">
                                            <li>
                                                <li><a href="<?php the_permalink() ?>" class="button icon solid fa-file-alt">Check out all about <?php the_title() ?></a></li>
                                                <!--  <a href="<?php the_permalink(); ?>" class="button icon solid fa-file-alt">Read more</a> -->
                                            </li>
                                            <!-- Optionally add comment count here -->
                                            <!-- <li><a href="<?php comments_link(); ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number(); ?> comments</a></li> -->
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <p>No posts found with this tag.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

            </div>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>
