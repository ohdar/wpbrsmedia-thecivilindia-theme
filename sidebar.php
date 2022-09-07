<?php
/*
* This is used to show footer
*/

?>

<div class="col-3 col-12-medium">
<?php dynamic_sidebar('main-sidebar') ?>
<div class="col-12 ">

				<!-- Blog -->
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
 

<!-- Article By Month and Catagory List -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar 1') ) : ?>
<?php echo '<div class="col-12">'; ?>
<?php echo '<section><header class="major"><h2>Other Resources</h2> </header>'; ?>
<?php echo '<div class="box col-12" style="padding:0px; margin:0px">'; ?>
<?php echo '<ul class="">'; ?>
		   <h3>Articles by month</h3>
		   <ul>
			  <?php wp_get_archives('title_li=&type=monthly'); ?>
		   </ul>
		   <h3>Categories</h3>
		   <ul>
			  <?php wp_list_categories('show_count=0&title_li='); ?>
		   </ul>
<?php echo '</ul></div></section></div>'; ?>
<?php endif; ?>
<!-- Article By Month and Catagory List -->
</div>