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
</div>
<?php
// get_sidebar();
get_footer();
