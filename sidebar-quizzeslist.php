<?php
/* 
* Purpose: This is used to show footer
* Version: 1.0
* Created Date: Sun 7 Aug 19:07:00 IST 2022
* Modified Date:
* Author: Brajesh Ohdar
* Website: https://www.itsbrsmedia.com
*/

?>

<div class="col-3 col-12-medium">
    <div class="col-12 ">
				
				<!-- AD-SPACE-GOOGLE -->
                <section class="box">
                <div class="adsense-container">
                    <!-- Paste your Google AdSense code here -->
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1423223845997762" crossorigin="anonymous"></script>
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-1423223845997762"
                         data-ad-slot="8349979917"
                         data-ad-format="auto"
                         deta-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                </section>
                
                <!-- STATE PROFILE MENU -->
				<section>
					<header class="major"><h2>Take More Quizzes </h2></header> 
					<div class="row"> 
					<?php
                        // Step 1: Get all registered post types, excluding 'post' and 'page'
                        $post_types = get_post_types(array('public' => true), 'names');  // 'public' => true will include only public post types
                        
                        // Optionally, exclude default post types ('post', 'page')
                        $post_types = array_diff($post_types, array('post', 'page' ,'ytchannel', 'quizzeslist'));
                        
                        // Step 2: Check if there are any custom post types
                        if (!empty($post_types)) {
                            // Step 3: Select a random post type from the array
                            $random_post_type = $post_types[array_rand($post_types)]; ?>
                        
                        <?php
                            // Step 4: Use the randomly selected post type in a WP_Query
                            $args = array(
                                //'post_type'      => $random_post_type,
                                'post_type'      => 'quizzeslist',
                                'posts_per_page' => 6,  // Change this number as needed
                                'orderby'         => 'rand',  // Order the posts randomly
                                'post_status'     => 'publish',
                            );
                        
                            $query = new WP_Query($args);
                        
                            // Step 5: Loop through the query results and display posts
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post(); ?>
                                    <div class="col-12 col-12-small">
            							<section class="box">
        								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
        									<h3><?php the_title() ?></h3>
        								</a>
        								
        								<?php // the_excerpt() ?>
        								<a href="<?php the_permalink() ?>" title="Click here to know more about <?php the_title() ?>"> <?php the_excerpt_rss(); ?> </a>
                                       
        							</section>
        						    </div>
                            <?php  }
                                wp_reset_postdata();  // Reset post data after custom query
                            } else {
                                echo 'No Quizzes found.';
                            }
                        } else {
                            echo 'No Quizzes post types found.';
                        }
                        ?>
					</div>
		</section>
				 
    </div>
</div>

