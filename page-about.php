<?php
/**
 * Template Name: About
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
				'post_type'         => 'page',
				'post_parent'       => $post->ID,                               
			    'order'             => 'ASC',
			    'orderby'           => 'name',
			    'posts_per_page'    => -1
				
			));
			if ($wp_query->have_posts()) :  ?>
			<section class="types">
			<?php while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>

				<div class="col">
					<a href="<?php the_permalink(); ?>">
						<div class="image">
							<?php the_post_thumbnail('tile'); ?>
						</div>
						<div class="card">
							<div class="wrap">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="offset"></div>
						</div>
					</a>
				</div>

				

				<?php endwhile; ?>
				</section>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();