<?php
/*
* This is used to display about us single pages
* Template Name: Leaders Template
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

            
                <!-- Political Leaders -->
				<section>
					<header class="major">
							<h2>Political Leaders</h2>
						</header>
					<p>Politics in India wouldn’t be so interesting without its politicians. Together they represent a motley mix, bringing as many perspectives and identities to the Indian Parliament as the nation itself. But more importantly, these are the people who run the government at various levels and take momentous decisions for the country.</p>
					<p>During elections, the citizens of India cast their vote and elect a representative of their constituency in the hope of a better future. They are the ones who oblige the political leaders with the power and authority to govern the country; therefore, they must acquire important information about the political leaders in order to take an informed decision. </p>
					<div class="row">

						<?php
                            $angelsoft_args = array(
                                'post_type'	=> 'leader',
                                'orderby' => 'rand',
								'category_name' => 'political-leaders-cat',
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
				<!-- Corporate Leaders -->
				<section>
					<header class="major">
							<h2>Corporate Leaders</h2>
						</header>
					<p>Corporate Leaders is an exclusive independent network that inspires business and leadership by providing a trusted forum for executives to network, exchange ideas, share lessons learned and drive business forward in an ever changing environment.</p>
					
					<div class="row">

						<?php
                            $angelsoft_args = array(
                                'post_type'	=> 'leader',
                                'orderby' => 'rand',
								'category_name' => 'corporate-leaders-cat',
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
				<!-- Social Leaders -->
				<section>
					<header class="major">
							<h2>Social Leaders</h2>
						</header>
					<p>Social leadership means to devote one’s life and talents to improving society regardless of social standing, wealth, or privilege.</p>
					<p>Freedom of speech Social leaders serve and bless others. They create beauty in the world, lift the vision of mankind, broaden our possibilities, and deepen our life experience. They protect freedom, preserve peace, and ensure prosperity for as many people as possible.</p>

					<div class="row">

						<?php
                            $angelsoft_args = array(
                                'post_type'	=> 'leader',
                                'orderby' => 'rand',
								'category_name' => 'social-leaders-cat',
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
				<!-- Martyrs -->
				<section>
					<header class="major">
							<h2>Martyrs</h2>
						</header>
					<p>Martyrs are considered holy or are respected by their followers, becoming symbols of exceptional leadership and heroism in the face of difficult circumstances. Martyrs play significant roles in country. </p>
					<p>India’s highest military decoration, the Param Vir Chakra is awarded “for most conspicuous bravery or some daring or pre-eminent act of valour or self sacrifice, in the presence of the enemy, whether on land, at sea, or in the air”. While these words seem simple enough, most people don’t realise the burden they carry. Bravery in the face of odds isn’t something that can be taught. It’s something you are born with. And while the Indian Armed Forces have seen many a brave son make the supreme sacrifice, only 21 men have been considered worthy of the Param Vir Chakra. </p>
					<div class="row">

						<?php
                            $angelsoft_args = array(
                                'post_type'	=> 'leader',
                                'orderby' => 'rand',
								'category_name' => 'martyrs-cat',
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
            <?php get_sidebar("leader") ?> 	
        </div>
    </div>
</section>
<?php get_footer() ?>


            