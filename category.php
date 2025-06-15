<?php
/*
* This is used to show catagory
*/

get_header();

?>

<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-12-medium">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <div class="col-6 col-12-small">
                                <section class="box">
                                    <a href="<?php the_permalink() ?>" class="image left">
                                        <?php // the_post_thumbnail( array(200,200) ); ?>
                          				<?php the_post_thumbnail(); ?>
                                    </a>
                                    <header>
                                        <h3><?php the_title() ?></h3>
                                        <p>Posted on <?php the_date() ?> at <?php the_time() ?></p>
                                    </header>
                                    <?php the_excerpt() ?>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="<?php the_permalink() ?>" class="button icon solid fa-file-alt">Check out all about <?php the_title() ?></a></li>
                                        <!--    <li><a href="<?php comments_link() ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number( ) ?> comments</a></li> -->
                                        </ul>
                                    </footer>
                            		
                                </section>
                            </div>
                          
                         
                          
                    <?php }
                    }
                ?>
                

            </div>
            
        </div>
    </div>
</section>
<?php get_footer() ?>