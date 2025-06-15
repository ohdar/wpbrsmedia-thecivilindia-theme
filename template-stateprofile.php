<?php
/*
* This is used to display about us single pages
* Template Name: State Profile Template
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
                            <!-- Content State Profile Template-->
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
                                            echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr($image_alt) . '" style="max-width:300px; height:300px;" />';
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
                                    <h1><?php the_title() ?></h1>
                                </header>

                                <?php the_content() ?>

                            </article>
                    <?php }
                    }
                ?>
                <?php wp_reset_postdata() ?>

            
                <!-- State Profile -->
				<section>

					<header class="major">
							<h2>States Of India</h2>
						</header>
					
					<div class="row">


						<?php
                            $angelsoft_args = array(
                                'post_type'	=> 'stateprofile',
                                'orderby' => 'rand',
								'category_name' => 'stateprofileindia-cat',
                                'posts_per_page'	=> 32,
								'paged' => $paged
                            );
                            $angelsoft_posts = new WP_Query($angelsoft_args);
                            while ($angelsoft_posts->have_posts()) {
                                $angelsoft_posts->the_post(); ?>
						<div class="col-3 col-6-medium col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
                                    <?php the_post_thumbnail('custom-stateprofile-post') ?>
								</a>
								<header>
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><h3><?php the_title() ?></h3></a>
								</header>
								<?php the_excerpt() ?>
								<footer>
									<ul class="actions">
										<li><a href="<?php the_permalink() ?>" title="Click here to know more about <?php the_title() ?>" class="button alt">Check out all about <?php the_title() ?></a></li>
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

<!-- State Profile -->
				<section>
					<header class="major">
							<h2>Union Territories Of India</h2>
						</header>
					
					<div class="row">


						<?php
                            $angelsoft_args = array(
                                'post_type'	=> 'stateprofile',
                                'orderby' => 'rand',
								'category_name' => 'utprofile-cat',
                                'posts_per_page'	=> 8,
								'paged' => $paged
                            );
                            $angelsoft_posts = new WP_Query($angelsoft_args);
                            while ($angelsoft_posts->have_posts()) {
                                $angelsoft_posts->the_post(); ?>
						<div class="col-3 col-6-medium col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
                                    <?php the_post_thumbnail('custom-stateprofile-post') ?>
								</a>
								<header>
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><h3><?php the_title() ?></h3></a>
								</header>
								<?php the_excerpt() ?>
								<footer>
									<ul class="actions">
										<li><a href="<?php the_permalink() ?>" title="Click here to know more about <?php the_title() ?>" class="button alt">Check out all about <?php the_title() ?></a></li>
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


            