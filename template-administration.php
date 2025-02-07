<?php
/*
* This is used to display about us single pages
* Template Name: Administration Template
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
                                    <h1><?php the_title() ?></h1>
                                </header>

                                <?php the_content() ?>

                            </article>
                    <?php }
                    }
                ?>
                <?php wp_reset_postdata() ?>

            
                <!-- Administration -->
				<section>
					
					<div class="row">


						<?php
                            $angelsoft_args = array(
                                'post_type'	=> 'administration',
                                'orderby' => 'rand',
                                'posts_per_page'	=> 20,
								'paged' => $paged
                            );
                            $angelsoft_posts = new WP_Query($angelsoft_args);
                            while ($angelsoft_posts->have_posts()) {
                                $angelsoft_posts->the_post(); ?>
						<div class="col-3 col-6-medium col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
                                    <?php the_post_thumbnail('single-post') ?>
								</a>
								<header>
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><h3><?php the_title() ?></h3></a>
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

<!-- Cityprofiles -->
				<section>
					<header class="major">
							<h2>City Profiles</h2>
						</header>
					<p>A city is a dynamic urban area characterized by dense populations, diverse cultures, and a wide range of industries. It offers amenities like entertainment, education, and transportation. Cities are often economic, cultural, and political hubs, with landmarks, public spaces, and a variety of lifestyles shaping daily life.</p>
					
					
					<div class="row">


						<?php
                            $angelsoft_args = array(
                                'post_type'	=> 'cityprofile',
                                'orderby' => 'rand',
                                'posts_per_page'	=> 8
                            );
                            $angelsoft_posts = new WP_Query($angelsoft_args);
                            while ($angelsoft_posts->have_posts()) {
                                $angelsoft_posts->the_post(); ?>
						<div class="col-3 col-6-medium col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
                                    <?php the_post_thumbnail('single-post') ?>
								</a>
								<header>
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><h3><?php the_title() ?></h3></a>
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
				
            </div>   
			<?php get_sidebar("administration") ?> 			
        </div>
		
    </div>
</section>
<?php get_footer() ?>


            