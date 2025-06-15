<?php
/*
* This is used to show header
*/

?>
<?php get_header(); ?>
<!-- Main -->
<section id="main">
 	<div class="container">
		<div class="row">
			<div class="col-9 col-12-medium">
					<!-- Banner -->
					<?php if (true == get_theme_mod('toggle_home_banner', true)) : ?>
						<section id="banner">
							<header>
								<h2><?php echo get_theme_mod('home_banner_heading_text', 'Howdy. This is TheCivilIndia.') ?></h2>
								<p><?php echo get_theme_mod('home_banner_paragraph_text', 'TheCivilIndia A responsive template by BRS MEDIA.') ?></p>

							</header>				
						</section>
					<?php endif;?>

					<!-- Intro 
					<?php if (true == get_theme_mod('toggle_home_intro', true)) : ?>
					<div id="homeintro" class="row home-intro">
						<section id="intro" class="container">
							<div class="row">
								<div class="col-3 col-12-medium">
									<section class="first">
										<i class="dashicons featured dashicons-<?php echo esc_attr(get_theme_mod('intro_box_1_icon', 'admin-generic')); ?>"></i>
										<header>
										<h2><?php echo get_theme_mod('intro_box_1_heading_text', 'Complete Website Solution.') ?></h2>						
										</header>
										<p><?php echo get_theme_mod('intro_box_1_paragraph_text', 'Domain Registration.') ?></p>
										
									</section>
								</div>			
								<div class="col-3 col-12-medium">
									<section class="first">
									<i class="dashicons featured dashicons-<?php echo esc_attr(get_theme_mod('intro_box_2_icon', 'admin-generic')); ?>"></i>
										<header>
										<h2><?php echo get_theme_mod('intro_box_2_heading_text', 'Complete Website Solution.') ?></h2>						
										</header>
										<p><?php echo get_theme_mod('intro_box_2_paragraph_text', 'Domain Registration.') ?></p>
									</section>
								</div>
								<div class="col-3 col-12-medium">
									<section class="first">
									<i class="dashicons featured dashicons-<?php echo esc_attr(get_theme_mod('intro_box_3_icon', 'admin-generic')); ?>"></i>
									<header>
										<h2><?php echo get_theme_mod('intro_box_3_heading_text', 'Complete Website Solution.') ?></h2>						
										</header>
										<p><?php echo get_theme_mod('intro_box_3_paragraph_text', 'Domain Registration.') ?></p>
									</section>
								</div>
								<div class="col-3 col-12-medium">
									<section class="last">
									<i class="dashicons featured dashicons-<?php echo esc_attr(get_theme_mod('intro_box_4_icon', 'admin-generic')); ?>"></i>
									<header>
										<h2><?php echo get_theme_mod('intro_box_4_heading_text', 'Complete Website Solution.') ?></h2>						
										</header>
										<p><?php echo get_theme_mod('intro_box_4_paragraph_text', 'Domain Registration.') ?></p>
										<p><b>Please contact us via info[at]brsmedia[dot]in to schedule your repair.</b></p>
									</section>
								</div>
							</div>
							
						</section>
					</div>
					<?php endif; ?> -->

					<!-- Intro -->


							

					<!--City Profiles -->
					<section>
						<header class="major">
							<h2>City Profiles </h2>
						</header>
						<div class="row">

							<?php
								$service_args = array(
									'post_type'	=> 'cityprofile',
									'posts_per_page'	=> 4,
									'orderby' => 'rand',
									//'order' => 'ASC'
								);
								$service_posts = new WP_Query($service_args);
								while ($service_posts->have_posts()) {
									$service_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"  class="image featured">
									<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section> 

				
					<!-- Indian Rivers -->
					<section>
						<header class="major">
							<h2>Rivers of India</h2>
						</header>
						<div class="row">

							<?php
								$portfolio_args = array(
									'post_type'	=> 'indianrivers',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$portfolio_posts = new WP_Query($portfolio_args);
								while ($portfolio_posts->have_posts()) {
									$portfolio_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
									<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section> 

				
					<!-- Natural Foods In India -->
					<section>
						<header class="major">
							<h2>Foods Sources</h2>
						</header>
						<div class="row">

							<?php
								$portfolio_args = array(
									'post_type'	=> 'naturalfood',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$portfolio_posts = new WP_Query($portfolio_args);
								while ($portfolio_posts->have_posts()) {
									$portfolio_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
									<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section> 

				
					<!-- Leaders -->
					<section>
						<header class="major">
							<h2>Leaders</h2>
						</header>
						<div class="row">

							<?php
								$portfolio_args = array(
									'post_type'	=> 'leader',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$portfolio_posts = new WP_Query($portfolio_args);
								while ($portfolio_posts->have_posts()) {
									$portfolio_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
									<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section> 

				
					<!-- Business -->
					<section>
						<header class="major">
							<h2>Business</h2>
						</header>
						<div class="row">

							<?php
								$portfolio_args = array(
									'post_type'	=> 'business',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$portfolio_posts = new WP_Query($portfolio_args);
								while ($portfolio_posts->have_posts()) {
									$portfolio_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
									<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section> 

				
					<!-- State Profiles -->
					<section>
						<header class="major">
							<h2>State Profiles</h2>
						</header>
						<div class="row">

							<?php
								$portfolio_args = array(
									'post_type'	=> 'stateprofile',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$portfolio_posts = new WP_Query($portfolio_args);
								while ($portfolio_posts->have_posts()) {
									$portfolio_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
									<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section> 

				
					<!-- Infrastructure in India -->
					<section>
						<header class="major">
							<h2>Infrastructure</h2>
						</header>
						<div class="row">

							<?php
								$portfolio_args = array(
									'post_type'	=> 'infrastructure',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$portfolio_posts = new WP_Query($portfolio_args);
								while ($portfolio_posts->have_posts()) {
									$portfolio_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
									<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section> 

				
					<!-- India Tourism -->
					<section>
						<header class="major">
							<h2>Tourist Places in India</h2>
						</header>
						<div class="row">

							<?php
								$portfolio_args = array(
									'post_type'	=> 'indiatourism',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$portfolio_posts = new WP_Query($portfolio_args);
								while ($portfolio_posts->have_posts()) {
									$portfolio_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
									<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section> 

				

					
					<!-- Technology -->
					<section>
						<header class="major">
							<h2>Technology</h2>
						</header> 
						<div class="row">
							<?php
								$blog_args = array(
									'post_type'	=> 'technology',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$blog_posts = new WP_Query($blog_args);
								while ($blog_posts->have_posts()) {
									$blog_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
										<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>	
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section>

					<!-- Banking -->
					<section>
						<header class="major">
							<h2>Hindi Stories & Poems</h2>
						</header>
						<div class="row">

							<?php
								$portfolio_args = array(
									'post_type'	=> 'hindistory',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$portfolio_posts = new WP_Query($portfolio_args);
								while ($portfolio_posts->have_posts()) {
									$portfolio_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
									<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>
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
							<?php wp_reset_postdata() ?>
							
						</div>
					</section> 

					<!-- Major Govt Programs -->
					<section>
						<header class="major">
							<h2>Major Govt. Programs</h2>
						</header> 
						<div class="row">
							<?php
								$blog_args = array(
									'post_type'	=> 'govtprogram',
									'orderby' => 'rand',
									'posts_per_page'	=> 4
								);
								$blog_posts = new WP_Query($blog_args);
								while ($blog_posts->have_posts()) {
									$blog_posts->the_post(); ?>
							<div class="col-3 col-12-small">
								<section class="box">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="image featured">
										<?php the_post_thumbnail('custom-cityprofile-post') ?>
									</a>
									<header>
										<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" ><h3><?php the_title() ?></h3></a>	
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
								
							<?php wp_reset_postdata() ?>
							
						</div>
					</section>
					<?php
							echo '<div class="col-9">';
							echo '<section><header class="major"><h2>You Can Find Articles Here On:</h2> </header>';
							echo '<div class="box col-9" style="padding:0px; margin:0px">';						
							$categories = get_categories();
							echo '<ul class="">';
							foreach( $categories as $category) { 
							// echo $category->cat_name . ' ';
								echo '<li class="x-label x-label-0">' . $category->cat_name . '</li>';
								//echo '<li class="x-label x-label-0"><a class="x-label-0" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a></li>';
							} 
							echo '</ul></div></section></div>';
					?>
				</div>
				<?php get_sidebar() ?>
			</div>
			
		</div>
		
	</div>

</section>

<?php get_footer(); ?>