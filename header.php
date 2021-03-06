<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>

<!-- Google Tag Manager USNWC -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PLX2GN6');
</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47534226-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-47534226-1');
</script>



<!-- Google Tag Manager -->
<script>
// (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
// new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
// j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
// 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore…
// })(window,document,'script','dataLayer','GTM-WJWJ742');
</script>
<!-- End Google Tag Manager -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLX2GN6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			<div class="mobile-header-scroll">
				<div class="">
	            	<a href="<?php bloginfo('url'); ?>">
		            	<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
		            </a>
		            <div class="event-date-mobile">
			        	<?php the_field('event_date', 'option'); ?>
			        </div>
	            </div>
			</div>
			<div class="mobile-wrapper">
				<?php if(is_home()) { ?>
		            <h1 class="logo desktop">
			            <a href="<?php bloginfo('url'); ?>">
			            	<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
			            </a>
		            </h1>
		        <?php } else { ?>
		            <div class="logo desktop">
		            	<a href="<?php bloginfo('url'); ?>">
			            	<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
			            </a>
		            </div>
		        <?php } ?>
		        <?php if(is_home()) { ?>
		            <h1 class="logo mobile">
			            <a href="<?php bloginfo('url'); ?>">
			            	<img src="<?php bloginfo('template_url'); ?>/images/logo-mobile.png" alt="<?php bloginfo('name'); ?>">
			            </a>
		            </h1>
		        <?php } else { ?>
		            <div class="logo mobile">
		            	<a href="<?php bloginfo('url'); ?>">
			            	<img src="<?php bloginfo('template_url'); ?>/images/logo-mobile.png" alt="<?php bloginfo('name'); ?>">
			            </a>
		            </div>
		        <?php } ?>

		        <div class="event-date">
		        	<?php the_field('event_date', 'option'); ?>
		        </div>
	        </div>
			
		</div><!-- wrapper -->

		<div class="eyeglass">
			<a class="colorbox" href="#search">
				<img src="<?php bloginfo('template_url'); ?>/images/eyeglass.png">
			</a>
		</div>

		<div style="display: none;">
			<div id="search">
				<?php get_search_form(); ?>
			</div>
		</div>
	<div class="burger">
	  <span></span>
	</div>

	<nav class="mobilemenu">
	  <ul class="main">
	    <li>
	    	<a href="<?php bloginfo('url'); ?>/schedule">Schedule</a>
	    </li>
    	<li>Music
    	<!-- <a href="<?php bloginfo('url'); ?>/tuckfest-music">Music</a> -->
	    	<ul class="dropdown">
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/thursday-line-up/">Thursday Line-up</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/friday-line-up/">Friday Line-up</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/saturday-line-up/">Saturday Line-up</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/sunday-line-up/">Sunday Line-up</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/past-line-ups/">Past Line-up</a>
	    		</li>
	    	</ul>
    	</li>
    	<li>Competitions
	    	<ul class="dropdown">
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/adventure-obstacle/">Adventure & Obstacle</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/sup/">Sup</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/bike/">Bike</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/swim/">Swim</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/climb/">Climb</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/deep-water-solo/">Deep Water Solo</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/trail-run/">Trail Run</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/raft/">Raft</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/kayak/">Kayak</a>
	    		</li>
	    	</ul>
    	</li>
    	<li>Clinics & Films
    		<ul class="dropdown">
    			<li><a href="<?php bloginfo('url'); ?>/demo-clinic-type/clinics">Clinics</a></li>
    			<li><a href="<?php bloginfo('url'); ?>/demo-clinic-type/films">Films</a></li>
    		</ul>
    		
	    </li>
    	<li>
    		<a href="<?php bloginfo('url'); ?>/tuckfest-yoga">Yoga</a>
    	</li>
    	<li>Buy
	    	<ul class="dropdown">
	    		<!-- <li>
	    			<a href="<?php bloginfo('url'); ?>/buy/info/">Info</a>
	    		</li> -->
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/buy/registration/">Race & Comp Registration</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/buy/terrace-access/">Terrace Access</a>
	    		</li>
	    	</ul>
    	</li>
    	<li>About
	    	<ul class="dropdown">
	    		
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/faqs/">FAQ's</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/tuck-fest-insiders-guide/">Tuck Fest Insider’s Guide</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/contact/">Contact</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/map/">Map</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/gallery/">Gallery</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/accommodations/">Accommodations</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/food-and-beverage/">Food & Beverage</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/vendors/">Vendors</a>
	    		</li>
	    	</ul>
    	</li>
	  </ul>
	</nav>		
				 
			

		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<div class="desktop">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content page-wrapper">
