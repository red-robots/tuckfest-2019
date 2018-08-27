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
				<div class="social">
					<ul>
						<li>
							<a href="http://www.facebook.com/usnwc" target="_blank">
								<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/08/Facebook.png">
							</a>
						</li>
						<li>
							<a href="http://www.twitter.com/usnwc" target="_blank">
								<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/08/Twitter.png">
							</a>
						</li>
						<li>
							<a href="http://www.instagram.com/usnwc" target="_blank">
								<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/08/Insta.png">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="sponsors container rotator">
				<ul>
					<li>
						<a href="http://usnwc.org/" target="_blank">
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/09/USNWC_W.png" alt="USNWC logo">
						</a>
					</li>
					<li>
						<a href="http://explore.usnwc.org/" target="_blank">
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/09/Explore.png" alt="USNWC EXPLORE Logo">
						</a>
					</li>
		            <li>
			            <a href="http://usnwc.org/visit/outfitters/" target="_blank">
			            	<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/09/Outfitters.png" alt="OUTFITTERS Logo">
			            </a>
		            </li>
					<li>
						<a href="https://www.bellsbeer.com/" target="_blank">
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/03/Bells.png" alt="Bells Logo">
						</a>
					</li>
					<li>
						<a href="https://www.keenfootwear.com/" target="_blank">
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/02/Keen.png" alt="Keen Logo">
						</a>
					</li>
					<li>
						<a href="https://recoverbrands.com/" target="_blank">
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/02/Recover_Logo.png" alt="Recover Logo">
						</a>
					</li>
					<li>
						<a href="https://www.hydroflask.com/" target="_blank">
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/03/Hydroflask-1.png" alt="Hydro Flask Logo">
						</a>
					</li>
					<li>
						<a href="https://www.olukai.com/" target="_blank">
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/02/OluKai_Logo.png" alt="OluKai Logo">
						</a>
					</li>
					<li>
						<a href="https://www.blueridgeoutdoors.com/" target="_blank">
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/03/BRO.png" alt="Blue Ridge Outdoors Logo">
						</a>
					</li>
					</ul>
			</div>
		</div>  
		<div class="row description">
			<p>U.S. National Whitewater Center | 5000 Whitewater Center Parkway | Charlotte, NC 28214 | 704.391.3900 | info@usnwc.org</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
