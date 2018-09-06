<?php
/**
 * Template Name: Types Yoga
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

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

			<?php endwhile; // End of the loop.?>
			<?php
			$wp_query = new WP_Query();
			$wp_query->query(array(
				'post_type'=>'yoga',
				'posts_per_page' => 10,
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'yoga_day', // your custom taxonomy
						'field' => 'slug',
						'terms' => array( 'friday', 'saturday', 'sunday' ) // the terms (categories) you created
					)
				)
			));
			if ($wp_query->have_posts()) : ?>
			<?php while ($wp_query->have_posts()) : ?>
			<?php $wp_query->the_post(); $hash = sanitize_title_with_dashes(get_the_title());?>
				<article id="<?php echo $hash; ?>" <?php post_class(); ?>>
					<div class="featured-image">
					<header class="entry-header">
						<?php the_title( '<h1 class="">', '</h1>' ); ?>
					</header><!-- .entry-header -->
						<?php 
						if(has_post_thumbnail()) {
							the_post_thumbnail('tile');
						} else { ?>
							<img src="<?php echo $comingSoon['url']; ?>">
						<?php } ?>
					</div>
					
					<div class="copy">
						<div class="entry-content">
							<?php
								the_content();
							?>
						</div><!-- .entry-content -->
						<div class="offset-border"></div>
					</div>
				</article><!-- #post-## -->
			

<?php endwhile; ?>
<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
