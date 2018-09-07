<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="row social search">
			<div class="sub-row search social">
				<div class="search">
					<gcse:search></gcse:search>
				</div>
				<?php if( have_rows('social_links', 'option') ) : ?>
				<div class="social">
					<ul>
					<?php while( have_rows('social_links', 'option') ) : the_row();

						$icon = get_sub_field('icon', 'option');
						$link = get_sub_field('link', 'option');

					?>
						<li>
							<a href="<?php echo $link; ?>" target="_blank">
								<img src="<?php echo $icon['url']; ?>">
							</a>
						</li>
					<?php endwhile; ?>
					</ul>
				</div>
				<?php endif; ?>
			</div>
			<?php if( have_rows('footer_sponsors', 'option') ) : ?>
			<div class="sponsors container rotator">
				<ul>
				<?php while( have_rows('footer_sponsors', 'option') ) : the_row();

					$icon = get_sub_field('icon', 'option');
					$link = get_sub_field('link', 'option');

				?>
						<li>
							<a href="<?php echo $link; ?>" target="_blank">
								<img src="<?php echo $icon['url']; ?>">
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>  
		<div class="row description">
			<!-- <p>U.S. National Whitewater Center | 5000 Whitewater Center Parkway | Charlotte, NC 28214 | 704.391.3900 | info@usnwc.org</p> -->
		</div>
		<div class="presented">
			<div class="thing">Presented By</div>
			<div class="image">
			<a href="https://usnwc.org" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/presented.png"></a>
				
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
