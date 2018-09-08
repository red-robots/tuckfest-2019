<?php
/**
 * Template Name: Schedule
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); 

			get_template_part('inc/banner');

			?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

				</div><!-- #post-## -->
			<?php endwhile; // End of the loop.?>

			<?php  //include( locate_template( 'inc/schedule-links-filter.php', false, false ) );  ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<!-- <h1 class="entry-title">Full Schedule</h1> -->
		</header><!-- .entry-header -->

	</div><!-- #post-## -->



<section class="schedule">
	<div class="col">
	<h2>Thursday</h2>
	<div class="col-wrap">
		<div class="offset"></div>
		<div class="contents">
	<?php
	
	$i=0; 
// wp_reset_query();
// wp_reset_postdata();
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=> array('music','yoga','demo_clinic', 'competition'),
		'posts_per_page' => -1,
		'meta_key'			=> 'thursday_time_p',
		'orderby'			=> 'meta_value',
		'order'				=> 'ASC',
		'meta_type'         => 'TIME',
		'post_status' => array( 'publish', 'private' ),
		'tax_query' => array(
			array(
				'taxonomy' => 'event_day', // your custom taxonomy
				'field' => 'slug',
				'terms' => array( 'thursday' ) // the terms (categories) you created
			)
		)
	));
	//echo $wp_query->request;
	if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post(); 

	//$results = new WP_Query( $query_args );
// Oops, $results has nothing, or something we did not expect
// Show the query


		include( locate_template( 'inc/schedule-links.php', false, false ) ); 
	
			 endwhile; ?>
		<?php endif; ?>
		</div>
		</div>
	</div>
	<div class="col">
		<h2>Friday</h2>
		<div class="col-wrap">
			<div class="offset"></div>
			<div class="contents">
		<?php
		$i=0; 
	

	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=> array('yoga','demo_clinic', 'competition','music'),
		'posts_per_page' => -1,
		'meta_key'			=> 'friday_time_p',
		'orderby'			=> 'meta_value',
		'order'				=> 'ASC',
		'meta_type'         => 'TIME',
		'post_status' => array( 'publish', 'private' ),
		'tax_query' => array(
			array(
				'taxonomy' => 'event_day', // your custom taxonomy
				'field' => 'slug',
				'terms' => array( 'friday' ) // the terms (categories) you created
			)
		)
	));
	if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post(); 

		include( locate_template( 'inc/schedule-links.php', false, false ) );  
	
			 endwhile; ?>
		<?php endif; ?>
		</div>
		</div>
	</div>
	<div class="col">
		<h2>Saturday</h2>
		<div class="col-wrap">
			<div class="offset"></div>
			<div class="contents">
		<?php
		$i=0; 
	

	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=> array('yoga','demo_clinic', 'competition','music'),
		'posts_per_page' => -1,
		'meta_key'			=> 'saturday_time_p',
		'orderby'			=> 'meta_value',
		'order'				=> 'ASC',
		'meta_type'         => 'TIME',
		'post_status' => array( 'publish', 'private' ),
		'tax_query' => array(
			array(
				'taxonomy' => 'event_day', // your custom taxonomy
				'field' => 'slug',
				'terms' => array( 'saturday' ) // the terms (categories) you created
			)
		)
	));
	if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post(); 

		include( locate_template( 'inc/schedule-links.php', false, false ) ); 
	
			 endwhile; ?>
		<?php endif; ?>
		</div>
		</div>
	</div>
	<div class="col">
		<h2>Sunday</h2>
		<div class="col-wrap">
			<div class="offset"></div>
			<div class="contents">
		<?php
		$i=0; 
	

	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=> array('yoga','demo_clinic', 'competition','music'),
		'posts_per_page' => -1,
		'meta_key'			=> 'sunday_time_p',
		'orderby'			=> 'meta_value',
		'order'				=> 'ASC',
		'meta_type'         => 'TIME',
		'post_status' => array( 'publish', 'private' ),
		'tax_query' => array(
			array(
				'taxonomy' => 'event_day', // your custom taxonomy
				'field' => 'slug',
				'terms' => array( 'sunday' ) // the terms (categories) you created
			)
		)
	));
	if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post(); 

		include( locate_template( 'inc/schedule-links.php', false, false ) ); 
	
			 endwhile; ?>
		<?php endif; ?>
		</div>
		</div>
	</div>
</section>
	

<?php
// get_sidebar();
get_footer();
