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


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
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
    	<li><a href="<?php bloginfo('url'); ?>/tuckfest-music">Music</a>
	    	<!-- <ul class="dropdown">
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
	    	</ul> -->
    	</li>
    	<li>Competitions
	    	<ul class="dropdown">
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/adventure-obstacle/">Adventure & Obstacle</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/bike/">Bike</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/climb/">Climb</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/deep-water-solo/">Deep Water Solo</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/kayak/">Kayak</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/raft/">Raft</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/sup/">Sup</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/swim/">Swim</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/competition-type/trail-run/">Trail Run</a>
	    		</li>
	    		
	    	</ul>
    	</li>
    	<li>
    		<a href="<?php bloginfo('url'); ?>/demo-clinic-type/demo">Demos & Clinics</a>
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
	    			<a href="<?php bloginfo('url'); ?>/buy/registration/">Registration</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/buy/terrace-access/">Terrace Access</a>
	    		</li>
	    	</ul>
    	</li>
    	<li>About
	    	<ul class="dropdown">
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/info/">Info</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/faqs/">FAQ's</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/contact/">Contact</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/map/">Map</a>
	    		</li>
	    		<li>
	    			<a target="_blank" href="https://fs24.formsite.com/usnwc/form141/index.html">Vendor Application</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/about/photos/">Gallery</a>
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
