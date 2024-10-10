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
                                'posts_per_page'	=> 2,	
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
				<!-- BANKING MENU -->
				<section class="box">
                 <div class="col-2 col-12-small custom-footer-menu">								
					<header><h3>Banking</h3></header>
					<?php wp_nav_menu( array( 'theme_location' => 'bankingmenu', 'container_class' => 'custom-menu-class' ) ); ?>
				 </div>
                </section>                
    </div>
</div>

