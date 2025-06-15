<?php
/*
* This is used to show header
*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>    	

   <?php include_once 'private/adsense-code.php'; ?>

   <?php wp_head() ?>
		

	</head>
	<body <?php body_class('homepage is-preload') ?>>

	<section id="offcanvas-sidebar">
		<div>
			<?php
                wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => ''
                        ));
            ?>
					
					
					</div>
	</section>

	<div id="page-wrapper">

			<!-- Header -->
			<section id="header">

				<!-- Logo -->
				<div style="display: inline-block; float: left; width: auto;"><?php the_custom_logo() ?> </div>
			<!--	<div class="custom-menu-class" style="display: inline-block; float: right; width: auto; margin: 20px 50px 0 0; color:#ffffff">
				NEWS UPDATES : <a href="https://www.thecivilindia.com/" target="_blank">Server Migration in Progress</a> We understand this must be a very frustrating experience for your reader and sincerely regret the inconvenience.</div> -->
				
				<div style="margin:0px; padding:0px; clear: both;"></div>



				<!-- Nav -->
                <nav id="nav">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => ''
                        ));
                    ?>
					
				</nav>
				
				<!-- <button class="menu-toggle" id="toggleNav"><i class="icon solid fa-bars"></i></button> -->

				

			</section>
<?php dynamic_sidebar('main-sidebar') ?>