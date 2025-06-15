<?php
/*
* This is used to show footer
*/

?>
<!-- Footer -->
<section id="footer">
	<div class="container">
			<div class="row">							
							<div class="col-2 col-12-small custom-footer-menu">								
								<header><h3>Administration</h3></header>
								<?php wp_nav_menu( array( 'theme_location' => 'administrationmenu', 'container_class' => 'custom-menu-class' ) ); ?>
							</div>
							<div class="col-2 col-12-small custom-footer-menu">								
								<header><h3>Political Parties</h3></header>
								<?php wp_nav_menu( array( 'theme_location' => 'politicsmenu', 'container_class' => 'custom-menu-class' ) ); ?>
							</div>
							<div class="col-2 col-12-small custom-footer-menu">								
								<header><h3>Education</h3></header>
								<?php wp_nav_menu( array( 'theme_location' => 'educationmenu', 'container_class' => 'custom-menu-class' ) ); ?>
							</div>
							<div class="col-2 col-12-small custom-footer-menu">								
								<header><h3>Business</h3></header>
								<?php wp_nav_menu( array( 'theme_location' => 'businessmenu', 'container_class' => 'custom-menu-class' ) ); ?>
							</div>
							<div class="col-2 col-12-small custom-footer-menu">								
								<header><h3>Banking</h3></header>
								<?php wp_nav_menu( array( 'theme_location' => 'bankingmenu', 'container_class' => 'custom-menu-class' ) ); ?>
							</div>
							<div class="col-2 col-12-small custom-footer-menu">								
								<header><h3>Infastructure</h3></header>
								<?php wp_nav_menu( array( 'theme_location' => 'infrastructuremenu', 'container_class' => 'custom-menu-class' ) ); ?>
							</div>
							
				</div>
		</div>
</section>
<!-- Signature -->
<section style="background:#333; margin-top:-1em;">
<div class="container">
	<div class="row">
		<div class="col-12">

								<!-- Trademark -->
									<div id="trademark" style="background:#333;">
										<ul class="links">										
										<li><a href="https://www.thecivilindia.com/disclaimer/">Disclaimer</a></li>
										<li><a href="https://www.thecivilindia.com/privacy-policy-new/">Privacy Policy</a></li>
										<li><a href="https://www.thecivilindia.com/copyrights-and-trademarks/">Copyright &amp; Trademark</a></li>
    									</ul>
									</div>

		</div>
		<div class="col-12">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Copyright © 2016 - All Rights Reserved - thecivilindia.com</li><li>Design & Development: <a href="https://www.itsbrsmedia.com">BRS MEDIA</a></li>
										</ul>
									</div>

		</div>
</div>
</div>
</section>
</div>
    <?php wp_footer() ?>

<!-- Your other footer content -->

<!-- Add your custom JavaScript code just before the closing </body> tag -->
<script>
  // Listen for the 'pagehide' event
  window.addEventListener('pagehide', function(event) {
    console.log('Page is being unloaded or hidden');
    // Perform any necessary cleanup tasks here
  });

  // Listen for the 'visibilitychange' event
  document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
      console.log('Page is hidden');
      // Perform tasks like pausing media or saving state
    } else {
      console.log('Page is visible');
    }
  });
</script>

</body>


</body>
</html>