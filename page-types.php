<?php
/**
 * Template Name: Types
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

				the_content();

			endwhile; // End of the loop.

			if(is_page(954)) {
				$type = 'competition_type';
				$slug = 'competition-type';
			}elseif(is_page(978)) {
				$type = 'event_day';
				$slug = 'event-day';
			}elseif(is_page(960)) {
				$type = 'demo_clinic_type';
				$slug = 'demo-clinic-type';
			}elseif(is_page(2131)) {
				$type = 'yoga_day';
				$slug = 'yoga-day';
			}
			
			$terms = get_terms( $type , array(
				 'hide_empty' => false,
				));

			// echo '<pre>';
			// print_r($terms);
			// echo '</pre>';

				?>
				<section class="tiles">
				<?php
			foreach ($terms as $term) { 

				$url = get_bloginfo('url').'/'.$slug.'/'.$term->slug;
				?>
				<div class="tile">
				<a href="<?php echo $url; ?>"><?php echo $term->name; ?></a>
					
				</div>
			<?php }
			?>
</section>
			<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=>'custom_post_type',
		'posts_per_page' => 10,
		'paged' => $paged,
		'tax_query' => array(
			array(
				'taxonomy' => 'custom_taxonomy', // your custom taxonomy
				'field' => 'slug',
				'terms' => array( 'green', 'blue' ) // the terms (categories) you created
			)
		)
	));
	if ($wp_query->have_posts()) : ?>
	<?php while ($wp_query->have_posts()) : ?>
	<?php $wp_query->the_post(); ?>

		<li>
			<?php the_title(); ?>
		</li>

<?php endwhile; ?>
<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
