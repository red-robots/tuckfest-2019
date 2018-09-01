<?php
/**
 * Template Name: Photos
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

				$regLink = get_field('registration_link', 'option');
			?>
				<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<?php the_content(); ?>
					</div>


					<section class="photo-gallery">
						<?php 

						$gallery = get_field('gallery');

						foreach ( $gallery as $image ) { 

							// echo '<pre>';
							// print_r($image);
							// echo '</pre>';

							?>
							<div class="gal-thumb">
								<a class="gallery" href="<?php echo $image['url']; ?>">
									<img src="<?php echo $image['sizes']['gallery']; ?>">
								</a>
								
							</div>
						<?php }
						 ?>
					</section>


			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
