<?php
/*
* This is used to show header
*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>    	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />        
        <meta name="description" content="India's first & largest Portal for latest updates, history, results and the Assembly of India,Current, accurate and in depth facts on India." />
        <meta name="keywords" content="India's first & largest Portal for latest updates, history, results of the Parliamentary and the Assembly of India, Current, accurate and in depth facts on India. Unique cultural information provided.">
        <meta name="linkage" content="http://www.thecivilindia.com/">
        <meta name="coverage" content="Worldwide">
        <meta name="msnbot" content="INDEX,FOLLOW" />
        <meta name="robots" content="Index,Follow" />
        <meta name="robots" content="ALL">
        <meta name="rating" content="GENERAL" />
        <meta name="distribution" content="GLOBAL" />
        <meta name="copyright" content="BRS MEDIA" />
        <meta name="owner" content="BRS MEDIA" />
        <meta name="alias" content="BRS MEDIA" />
        <meta name="language" content="en-us" />
        <meta name="document-type" content="Public" />
        <meta name="classification" content="India" />
        <meta name="designer" content="BRS MEDIA" />
        <meta name="identifier-URL" content="http://www.thecivilindia.com" />
        <meta name="revisit-after" content="3 days" />
        <meta name="MSSmartTagsPreventParsing" content="true" />
        <meta name="category" content="India, Industry, Public Transport, Tourism, Development" />
        <meta name="subjects" content="India, Industry, Public Transport, Tourism, Development" />
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
		<meta name="google-site-verification" content="9xqfPtKGofTmmjcUNy6_Zm47lTxtl6N8lrzcO4PzRMk" /> 
		<meta name=“msvalidate.01” content="1870327E2DECB39769DB599DD1ADEE83" />
        <meta property="fb:pages" content="346126155849937" />
		<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "url": "http://www.thecivilindia.com",
          "logo": "https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/The_Civil_India.png/282px-The_Civil_India.png",
          "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+919868558794",
            "email": "info@thecivilindia.com",
            "contactType": "customer service"
          }]
        }
        </script>
		
		<!-- Google Analytics -->
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-19704906-20', 'auto');
          ga('send', 'pageview');
        </script>
		<!-- Google Analytics -->

		<!-- Google Analytics G4  -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-CPL21B723M"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-CPL21B723M');
        </script>
		<!-- Google Analytics G4  -->


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
				<div class="custom-menu-class" style="display: inline-block; float: right; width: auto; margin: 20px 50px 0 0; color:#ffffff">
				We are updateing for old website visit link <a href="https://www.thecivilindia.com/index.html" target="_blank">Here</a></div>
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