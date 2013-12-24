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

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php wp_nav_menu( array( 'theme_location' => 'primary-footer', 'container' => 'nav' ) ); ?>

		<?php wp_nav_menu( array( 'theme_location' => 'secondary-footer', 'container' => 'nav', 'link_after' => '<div class="delimiter">|</div>' ) ); ?>




		<div class="site-info">
			<?php do_action( 'eros_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'eros' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'eros' ), 'eros', '<a href="http://giner.com.au/" rel="designer">Rick Giner</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>