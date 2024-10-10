<?php
/*
* This is used to show footer
*/

?>
<div class="col-3 col-12-medium">
<?php dynamic_sidebar('main-sidebar') ?>

<div class="col-12 ">
<!-- CURRENT AFFAIRS MENU -->
				<section class="box">
                 <div class="col-2 col-12-small custom-footer-menu">								
					<header><h3>Current Affairs</h3></header>
					<?php wp_nav_menu( array( 'theme_location' => 'currentaffairsmenu', 'container_class' => 'custom-menu-class' ) ); ?>
				 </div>
                </section> 				
<!-- Youtube Video Blog -->
				<section>
					<!-- <header class="major"><h2>OUR YOUTUBE CHANNEL</h2></header> -->
					<div class="row">
						<?php
                            $blog_args = array(
                                'post_type'	=> 'ytchannel',
								'orderby' => 'rand',
                                'posts_per_page'	=> 4,	
                            );
                            $blog_posts = new WP_Query($blog_args);
                            while ($blog_posts->have_posts()) {
                                $blog_posts->the_post(); ?>
						<div class="col-12 col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" class="image featured">
									<?php the_post_thumbnail('home-featured') ?>
								</a>
								
								<?php //the_excerpt() ?>
								<?php the_content() ?>	
                              <header>
									<h3><?php the_title() ?></h3>
									<!-- <a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a> -->
								</header>
							</section>
						</div>
						<?php
                            } ?>
					</div>
				</section>	
				

</div>

<?php
echo '<div class="col-12">';
echo '<section><header class="major"><h2>You Can Find Articles Here On:</h2> </header>';
echo '<div class="box col-12" style="padding:0px; margin:0px">';						
$categories = get_categories();
echo '<ul class="">';
foreach( $categories as $category) { 
// echo $category->cat_name . ' ';
echo '<li class="x-label x-label-0">' . $category->cat_name . '</li>';
//echo '<li class="x-label x-label-0"><a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a></li>';
} 
echo '</ul></div></section></div>';
?>
	
<?php
        //Create WordPress Query with 'orderby' set to 'rand' (Random)
        $the_query = new WP_Query( array ( 
			'post_type'	=> 'administration',
			'orderby' => 'rand', 
			'posts_per_page' => '10' 
		) );
        // output the random post
       		
		echo '<div class="col-12">';
		echo '<section><header class="major"><h2>Other Articles</h2> </header>';
		echo '<div class="box col-12" style="margin: 0px; padding: 0px;">';
		echo '<ol class="">';
        while ( $the_query->have_posts() ) : $the_query->the_post();
            echo '<li>';
            echo '<a href=';
            the_permalink();
            echo '>';
            the_title();
            echo '</a>';
            echo '</li>'; 
        endwhile;
        echo '</ol></div></section></div>';
        // Reset Post Data
        wp_reset_postdata();
 ?>

<!-- ---------- Invitation to add your contribution ------------- -->
<?php
	echo '<div class="col-3 col-12-medium" style="padding:0px; margin-top:10px"><section class="box">';						
	echo '<h3>Invitation to add your contribution</h3>';
	echo '<p>This is an invitation to add your contribution from your skill-set to share your knowledge. We have started a platform benefiting to various to know good and effective solution by sharing of relevant information with our community.</p>';
	echo '<a href="https://www.thecivilindia.com/invitation-to-add-your-contribution/" class="button alt">Read More</a>';
	echo '</section></div>';
?>
<!-- ---------- Invitation to add your contribution ------------- -->
 
<!-- ---------- Consider Donations ------------- -->
<?php
echo '<div class="col-3 col-12-medium" style="padding:0px; margin-top:10px"><section class="box">';						
echo '<h3>Consider Donations</h3>';
echo '<p>Various people have asked me how they can contribute and donate to this project. As a consequence, I have created a way to accept hosting donations in Gpay. If you appreciate the work that goes into keeping this community going, please consider making a small donation!</p>';
echo '<a href="https://www.thecivilindia.com/consider-donations/" class="button alt">Read More</a>';
echo '</section></div>';
?>
<!-- ---------- Consider Donations ------------- -->

</div>