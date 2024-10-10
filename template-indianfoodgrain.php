<?php
/*
* This is used to display about us single pages
* Template Name: Indian Food Grains Template
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
                            <!-- Content -->
                            <article class="box post">
                                <a href="<?php the_permalink() ?>" class="image featured">
                                    <?php the_post_thumbnail('single-post') ?>
                                </a>
                                <header>
                                    <h2><?php the_title() ?></h2>
                                </header>

                                <?php the_content() ?>

                            </article>
                    <?php }
                    }
                ?>
                <?php wp_reset_postdata() ?>

            
                <!-- Education -->
				<section>
					
					<div class="row">


						<?php
                            $angelsoft_args = array(
                                'post_type'	=> 'naturalfood',
                                'orderby' => 'rand',
                                'posts_per_page'	=> 20,
								'paged' => $paged
                            );
                            $angelsoft_posts = new WP_Query($angelsoft_args);
                            while ($angelsoft_posts->have_posts()) {
                                $angelsoft_posts->the_post(); ?>
						<div class="col-3 col-6-medium col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" class="image featured">
                                    <?php the_post_thumbnail('single-post') ?>
								</a>
								<header>
									<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
								</header>
								<?php the_excerpt() ?>
								<footer>
									<ul class="actions">
										<li><a href="<?php the_permalink() ?>" class="button alt">More</a></li>
									</ul>
								</footer>
							</section>
						</div>
						<?php
                            } ?>						
						
					</div>
				</section>
<!-- Pagination -->
				<section>
					
					<div class="boxpaging"><h3>
					<div style="margin: auto;  width: 20%;  border: 0px solid green;  padding: 10px;">
                      <?php
                      $total_pages = $angelsoft_posts->max_num_pages;

                          if ($total_pages > 1){

                              $current_page = max(1, get_query_var('paged'));

                              echo paginate_links(array(
                                  'base' => get_pagenum_link(1) . '%_%',
                                  'format' => '/page/%#%',
                                  'current' => $current_page,
                                  'total' => $total_pages,
                                  'prev_text'    => __('« prev'),
                                  'next_text'    => __('next »'),
                              ));
                          }
                      ?>
						<?php wp_reset_postdata() ?>
					</div>						
					</h3></div>
				</section>
<!-- Pagination -->             

            </div>
            <?php get_sidebar("education") ?> 	
        </div>
    </div>
</section>
<?php get_footer() ?>


            