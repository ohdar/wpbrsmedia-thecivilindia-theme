<?php
/*
* This is used to display about us single pages
* Template Name: Single Indian Rivers
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
                          		
                          		<?php 
                                     if ( has_post_thumbnail() ) { 
                          				echo '<figure style="float:right; margin:0em 0em 2em 1em; border: 2px solid #0c62a5; border-radius: 10px;">';
                          		}?>
                          			 <a href="<?php the_permalink() ?>" class="">
                                          <?php 
                                              if ( has_post_thumbnail() ) {
                                                  the_post_thumbnail('custom-cityprofile-post');                                                   
                                          }?>
                                     </a> 
                          
                          			<?php 
                          				  if ( has_post_thumbnail() ) {
                          				  $image_id = get_post_thumbnail_id();
                                          $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                                          $image_title = get_the_title($image_id);
                                    	  echo '<figcaption style="text-align: center; color: #333333; text-transform: uppercase; font-weight: 400;">';
                                          echo $image_title;  
                                          echo '</figcaption>';
                                          echo '</figure>';
                          				}?>       
                          
                                <header>
                          			
                                    <h1><?php the_title() ?></h1>
                                </header>
                          
                          		<?php the_content() ?>   
                          		
                            </article>
                         
                    <?php }
                    }
                ?>

<div class="col-12 ">

				<!-- Blog -->
				<section>
					<header class="major">
						<h2>Related Article</h2>
					</header>
					<div class="row">
						<?php
                            $blog_args = array(                                
								'post_type'	=> get_post_type( $post->ID ), // Related Article as per post catagory 'post_type' => 'administration',
								'orderby' => 'rand',
                                'posts_per_page'	=> 4,	
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
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><h3><?php the_title() ?></h3></a>									
								</header>
								<?php the_excerpt() ?>
								<footer>
									<ul class="actions">
										<li><a href="<?php the_permalink() ?>" title="Click here to know more about <?php the_title() ?>"  class="button icon solid fa-file-alt">Check out all about <?php the_title() ?></a></li>
										
									</ul>
								</footer>
							</section>
						</div>
						<?php
                            } ?>
						
<!-- YOUTUBE CHANNEL -->
				<section>
					<header class="major"><h2>IF YOU FIND SOME HELP CONSIDER CONTRIBUTING BY SHARING CONTENT OF OUR CHANNEL </h2></header>
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
						<div class="col-3 col-12-small">
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
                              wp_reset_postdata();
                            } ?>
					</div>
		</section>

		<!-- IMPORTANT ARTICLES -->
				<section>
					<header class="major"><h2>Important Articles </h2></header>
					<div class="row">
						<?php
                            $blog_args = array(
                                'post_type'	=> get_post_type( $post->ID ),								
								'orderby' => 'rand',
                                'posts_per_page'	=> 6,	
                            );
                            $blog_posts = new WP_Query($blog_args);
                            while ($blog_posts->have_posts()) {
                                $blog_posts->the_post(); ?>
						<div class="col-2 col-12-small">
							<section class="box">
								<a href="<?php the_permalink() ?>" title="Click here to know more about <?php the_title() ?>">
									<h3><?php the_title() ?></h3>
								</a>
								
								<?php // the_excerpt() ?>
								<a href="<?php the_permalink() ?>" title="Click here to know more about <?php the_title() ?>"><?php the_excerpt_rss(); ?></a>
                               
							</section>
						</div>
						<?php
                              wp_reset_postdata();
                            } ?>
					</div>
		</section>
		
		<section>
					<!-- <header class="major"><h2>Further Readings </h2></header> 
					<div class="row"> -->
					<?php
                        // Step 1: Get all registered post types, excluding 'post' and 'page'
                        $post_types = get_post_types(array('public' => true), 'names');  // 'public' => true will include only public post types
                        
                        // Optionally, exclude default post types ('post', 'page')
                        $post_types = array_diff($post_types, array('post', 'page' ,'ytchannel', 'quizzeslist'));
                        
                        // Step 2: Check if there are any custom post types
                        if (!empty($post_types)) {
                            // Step 3: Select a random post type from the array
                            $random_post_type = $post_types[array_rand($post_types)]; ?>
                        
                        <header class="major"><h2>Further Readings <?php // echo $random_post_type ?> </h2></header>
                        <div class="row">
                        <?php
                            // Step 4: Use the randomly selected post type in a WP_Query
                            $args = array(
                                'post_type'      => $random_post_type,
                                'posts_per_page' => 6,  // Change this number as needed
                                'orderby'         => 'rand',  // Order the posts randomly
                                'post_status'     => 'publish',
                            );
                        
                            $query = new WP_Query($args);
                        
                            // Step 5: Loop through the query results and display posts
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post(); ?>
                                    <div class="col-2 col-12-small">
            							<section class="box">
        								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
        									<h3><?php the_title() ?></h3>
        								</a>
        								
        								<?php // the_excerpt() ?>
        								<a href="<?php the_permalink() ?>" title="Click here to know more about <?php the_title() ?>"><?php the_excerpt_rss(); ?></a>
                                       
        							</section>
        						    </div>
                            <?php  }
                                wp_reset_postdata();  // Reset post data after custom query
                            } else {
                                echo 'No posts found.';
                            }
                        } else {
                            echo 'No custom post types found.';
                        }
                        ?>
					</div>
		</section>


<?php /*
        //Create WordPress Query with 'orderby' set to 'rand' (Random)
        $the_query = new WP_Query( array ( 
			'post_type'	=> 'administration',			
			'orderby' => 'rand', 
			'posts_per_page' => '10' ) 
								 );
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
        wp_reset_postdata(); */

 ?>



						
					</div>

				</section>

			</div>

            </div>
            <?//php get_sidebar() ?>
 			<?php 
            function is_blog () {
                global  $post;
                $posttype = get_post_type($post );
                return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
                }
            function check_post_type(){
                $postType;
                if (is_blog())
                {
                    $postType = 'I am post';
                } else
                {
                    //$postType = 'administration';
                    $postType = get_post_type( $post->ID );
                    //echo $post_type;
                };
                return $postType;
            }
            $postType=check_post_type();
            //echo $postType;
            get_sidebar("$postType")
            ?>
        </div>
    </div>

</section>

<?php get_footer() ?>