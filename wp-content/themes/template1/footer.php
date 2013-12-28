<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package eros
 */
?>

	</div><!-- #content -->

</div><!-- #page -->


	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php wp_nav_menu( array( 'theme_location' => 'primary-footer', 'container' => 'nav', 'fallback_cb' =>'' ) ); ?>

		<?php wp_nav_menu( array( 'theme_location' => 'secondary-footer', 'container' => 'nav', 'link_after' => '<div class="delimiter">|</div>', 'fallback_cb' =>'' ) ); ?>

		<?php if((of_get_option("social_facebook") && of_get_option("social_facebook") != "https://www.facebook.com/") 
				|| (of_get_option("social_twitter") && of_get_option("social_twitter") != "https://twitter.com/") 
				|| (of_get_option("social_gplus") && of_get_option("social_gplus") != "https://plus.google.com/") 
				|| (of_get_option("social_linkedin") && of_get_option("social_linkedin") != "http://www.linkedin.com/") 
				|| (of_get_option("social_youtube") && of_get_option("social_youtube") != "http://www.youtube.com/") ) 
				{ ?>
			<nav class="social-media">
				<h4>Connect with us</h4>
				<ul>
					<?php if(of_get_option("social_facebook") && of_get_option("social_facebook") != "https://www.facebook.com/") { ?>
						<li class="social-facebook">
					 		<a href="<?php echo of_get_option("social_facebook"); ?>" title="Follow us on Facebook" target="_blank">Follow us on Facebook</a>
					 	</li>
					<?php } ?>
					<?php if(of_get_option("social_twitter") && of_get_option("social_twitter") != "https://twitter.com/") { ?>
						<li class="social-twitter">
					 		<a href="<?php echo of_get_option("social_twitter"); ?>" title="Follow us on Twitter" target="_blank">Follow us on Twitter</a>
					 	</li>
					<?php } ?>
					<?php if(of_get_option("social_gplus") && of_get_option("social_gplus") != "https://plus.google.com/") { ?>
						<li class="social-gplus">
					 		<a href="<?php echo of_get_option("social_gplus"); ?>" title="Follow us on Google Plus" target="_blank">Follow us on Google Plus</a>
					 	</li>
					<?php } ?>
					<?php if(of_get_option("social_linkedin") && of_get_option("social_linkedin") != "http://www.linkedin.com/") { ?>
						<li class="social-linkedin">
					 		<a href="<?php echo of_get_option("social_linkedin"); ?>" title="Follow us on LinkedIn" target="_blank">Follow us on LinkedIn</a>
					 	</li>
					<?php } ?>
					<?php if(of_get_option("social_youtube") && of_get_option("social_youtube") != "http://www.youtube.com/") { ?>
						<li class="social-youtube">
					 		<a href="<?php echo of_get_option("social_youtube"); ?>" title="Follow us on YouTube" target="_blank">Follow us on YouTube</a>
					 	</li>
					<?php } ?>
				</ul>
			</nav>
		<?php } ?>

		<div class="site-info">

			<?php echo 'Designed and built by <a href="http://giner.com.au/" rel="designer">Pixel Taxi</a>'; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>