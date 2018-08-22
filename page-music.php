<?php
/**
 * Template Name: Music Top Level
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			$wp_query = new WP_Query();
			$wp_query->query(array(
				'post_type'=> 'music',
				'posts_per_page' => -1,
				
			));
			if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post();

				$theID = get_the_ID();
				$terms = get_the_terms($theID, 'event_day' );
				$term = $terms[0]->slug;
				if( $term == 'thursday' ) {
					$slug = 'thursday-line-up';
				} elseif( $term == 'friday' ) {
					$slug = 'friday-line-up';
				} elseif( $term == 'saturday' ) {
					$slug = 'saturday-line-up';
				} elseif( $term == 'sunday' ) {
					$slug = 'sunday-line-up';
				}
				$hash = sanitize_title_with_dashes(get_the_title());
				$url = get_bloginfo('url').'/tuckfest-music/'.$slug.'/#'.$hash;
			?>
			<li>
				<a href="<?php echo $url; ?>">
					<?php the_title(); ?>
				</a>
			</li>
		<?php endwhile; ?>
	<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
