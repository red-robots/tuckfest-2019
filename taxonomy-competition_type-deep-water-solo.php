<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

$comingSoon = get_field('coming_soon', 'option');

?>
<div class="content-wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

		<div class="featured-image">
		<?php 

		$obj = get_queried_object(); 
		$banner = get_field('featured_image', $obj);
		if($banner) { ?>
			<img src="<?php echo $banner['url']; ?>">
		<?php }

						 ?>
		</div>

			<header class="page-header">
			<h1 class="entry-title">
				<?php single_term_title(); ?>
			</h1>
				<?php
					
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); 

				$hash = sanitize_title_with_dashes(get_the_title());

			?>


			<?php endwhile; ?>

		<?php endif; ?>


		<?php
		$wp_query = new WP_Query();
		$wp_query->query(array(
		'post_type'=>'athlete',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'athlete_type', // your custom taxonomy
				'field' => 'slug',
				'terms' => array( 'routesetters' ) // the terms (categories) you created
			)
		)
	));
	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>	

	<?php endwhile; endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
// get_sidebar();
get_footer();
