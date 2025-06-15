<?php
/*
* This is used to show search
*/

get_header() ?>
<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-9 col-12-medium">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box">
                                   	<a href="<?php the_permalink() ?>" class="image left">
                          				
                                    		<?php // the_post_thumbnail( array(200,200) ); ?>
                                    		<?php the_post_thumbnail(); ?>
                          				
                                	</a>
                                    <header>
                          				<p>Published on <?php the_date() ?></p>
                                        <h3><?php the_title() ?></h3>
                                        
                                    </header>
                                    <?php the_excerpt() ?>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="<?php the_permalink() ?>" class="button icon solid fa-file-alt">Check out all about <?php the_title() ?></a></li>
                                           <!-- <li><a href="<?php comments_link() ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number( ) ?> comments</a></li> -->
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                    <?php }
                    }
                ?>
                

            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</section>
<?php get_footer() ?>