<?php
/**
 * Template Name: Schedule
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<section class="schedule">
	<div class="col">
		<h2>Thursday</h2>
		<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=> array('yoga','demo_clinic', 'competition','music'),
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'event_day', // your custom taxonomy
				'field' => 'slug',
				'terms' => array( 'thursday' ) // the terms (categories) you created
			)
		)
	));
	if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post(); 

	include( locate_template( 'inc/schedule-links.php', false, false ) ); 
	

	?>

		<li>
			<a href="<?php echo $url; ?>">
			<?php the_title(); ?>
			</a>
		</li>

<?php endwhile; ?>
<?php endif; ?>
	</div>
	<div class="col">
		<h2>Friday</h2>
		<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=> array('yoga','demo_clinic', 'competition','music'),
		'posts_per_page' => -1,
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
	?>

		<li>
			<a href="<?php echo $url; ?>">
			<?php the_title(); ?>
			</a>
		</li>

<?php endwhile; ?>
<?php endif; ?>
	</div>
	<div class="col">
		<h2>Saturday</h2>
		<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=> array('yoga','demo_clinic', 'competition','music'),
		'posts_per_page' => -1,
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
	?>

		<li>
			<a href="<?php echo $url; ?>">
			<?php the_title(); ?>
			</a>
		</li>

<?php endwhile; ?>
<?php endif; ?>
	</div>
	<div class="col">
		<h2>Sunday</h2>
		<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=> array('yoga','demo_clinic', 'competition','music'),
		'posts_per_page' => -1,
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

	?>

		<li>
			<a href="<?php echo $url; ?>">
			<?php the_title(); ?>
			</a>
		</li>

<?php endwhile; ?>
<?php endif; ?>
	</div>
</section>
	

<?php
// get_sidebar();
get_footer();
