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
		            <h1 class="logo">
			            <a href="<?php bloginfo('url'); ?>">
			            	<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
			            </a>
		            </h1>
		        <?php } else { ?>
		            <div class="logo">
		            	<a href="<?php bloginfo('url'); ?>">
			            	<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
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

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<nav role="navigation">
					  <div id="menuToggle">
					    <!--
					    A fake / hidden checkbox is used as click reciever,
					    so you can use the :checked selector on it.
					    -->
					    <input type="checkbox" />
					    
					    <!--
					    Some spans to act as a hamburger.
					    
					    They are acting like a real hamburger,
					    not that McDonalds stuff.
					    -->
					    <span></span>
					    <span></span>
					    <span></span>
					    
					    <!--
					    Too bad the menu has to be inside of the button
					    but hey, it's pure CSS magic.
					    -->
					    <ul id="menu"></ul>
					  </div>
					</nav>
				</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content page-wrapper">
