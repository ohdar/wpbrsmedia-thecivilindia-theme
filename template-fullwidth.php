<?php
/*
* This is used to display about us single pages
* Template Name: FullWidth Template
* Purpose: This is used to show footer
* Version: 1.0
* Created Date: Sun 7 Aug 19:07:00 IST 2022
* Modified Date:
* Author: Brajesh Ohdar
* Website: https://www.itsbrsmedia.com
*/

get_header() ?>
<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
		<div class="col-12 col-12-medium">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <!-- Content -->
                            <article class="box post">
                                <a href="<?php the_permalink() ?>" class="image featured">
                                    <?php the_post_thumbnail('single-post') ?>
                                </a>
                                <header>
                                    <h1><?php the_title() ?></h1>
                                </header>

                                <?php the_content() ?>

                            </article>
                    <?php }
                    }
                ?>
                <?php wp_reset_postdata() ?>

            </div>
            
            
        </div>
    </div>
</section>
<?php get_footer() ?>


            