<?php
/**
 * Template Name: Music Lineup Day
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<h1><?php the_title(); ?></h1>
			<?php

			if( is_page(2045) ) { // Thursday
				$tax = 'thursday';
			} elseif( is_page(981) ) { // Friday
				$tax = 'friday';
			} elseif( is_page(983) ) { // Saturday
				$tax = 'saturday';
			} elseif( is_page(985) ) { // Sunday
				$tax = 'sunday';
			}

			$wp_query = new WP_Query();
			$wp_query->query(array(
				'post_type'=> 'music',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'event_day', // your custom taxonomy
						'field' => 'slug',
						'terms' => array( $tax ) // the terms (categories) you created
					)
				)
			));
			if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post(); 

				$hash = sanitize_title_with_dashes(get_the_title());

			?>

			<li>
				<h2 id="<?php echo $hash; ?>"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</li>
		<?php endwhile; ?>
	<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
