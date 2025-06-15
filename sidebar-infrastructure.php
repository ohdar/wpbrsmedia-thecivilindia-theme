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
				
				<!-- YOUTUBE CHANNEL -->
				<section>
					<!-- <header class="major"><h2>OUR YOUTUBE CHANNEL</h2></header> -->
					<div class="row">
						<?php
                            $blog_args = array(
                                'post_type'	=> 'ytchannel',
								'orderby' => 'rand',
                                'posts_per_page'	=> 1,	
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
				<!-- INFRASTRUCTURE MENU -->
				<section class="box">
                 <div class="col-2 col-12-small custom-footer-menu">								
					<header><h3>Infrastructure</h3></header>
					<?php wp_nav_menu( array( 'theme_location' => 'infrastructuremenu', 'container_class' => 'custom-menu-class' ) ); ?>
				 </div>
                </section> 
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
				<!-- CITYPROFILE MENU -->
				<section class="box">
                 <div class="col-2 col-12-small custom-footer-menu">								
					<header><h3>City Profiles</h3></header>
					<?php wp_nav_menu( array( 'theme_location' => 'cityprofilemenu', 'container_class' => 'custom-menu-class' ) ); ?>
				 </div>
                </section>  
    </div>
</div>

