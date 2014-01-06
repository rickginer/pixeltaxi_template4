<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pixeltaxi
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<style type="text/css">
	<?php if(of_get_option("primary_color")){ ?>
		a, 
		a:visited,
		.main-navigation li.current_page_item a,
		.main-navigation li.current-menu-item a,
		.main-navigation li:hover > a 
			{ color:<?php echo of_get_option("primary_color") ?>; }
		body,
		.entry-content form textarea:focus, 
		.entry-content form input:focus
			{ border-color: <?php echo of_get_option("primary_color") ?>; }
		.social-white nav.social-media, 
		.social-white nav.social-media li a,
		button:hover,
		input[type="button"]:hover,
		input[type="reset"]:hover,
		input[type="submit"]:hover,
		button:focus,
		input[type="button"]:focus,
		input[type="reset"]:focus,
		input[type="submit"]:focus,
		button:active,
		input[type="button"]:active,
		input[type="reset"]:active,
		input[type="submit"]:active
			{ background-color:<?php echo of_get_option("primary_color") ?>; }
	<?php } ?>
	<?php if(of_get_option("secondary_color")){ ?>
		a:hover, 
		a:active
			{ color:<?php echo of_get_option("secondary_color") ?>; }
		nav.social-media li a:hover,
		.social-white nav.social-media li a:hover
			{ background-color:<?php echo of_get_option("secondary_color") ?>; }
	<?php } ?>

	<?php if (of_get_option("article_colour")){ ?>
		.hentry {background-color:<?php echo of_get_option("article_colour"); ?>;}
	<?php } ?>

	@media screen and (min-width: 768px) {
		nav.social-media {background-color:transparent;}
	}

</style>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site <?php if(of_get_option("article_colour")) echo "solid-article-colour "; ?>   social-<?php echo of_get_option("social_display"); ?>  social-location-<?php echo of_get_option("social_location"); ?> nav-align-<?php echo of_get_option("nav_alignment"); ?> ">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle">Menu</h1>
			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

		</nav><!-- #site-navigation -->


		<div class="site-branding">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php if(of_get_option("logo_image")) { ?>
						<img src="<?php echo of_get_option("logo_image") ?>" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
					<?php }else{ ?>
						<h1><?php bloginfo( 'name' ); ?></h1>
					<?php } ?>
				</a>
			</div>
		</div>


		<?php if((of_get_option("social_location") == "top") && (
					(of_get_option("social_facebook") && of_get_option("social_facebook") != "https://www.facebook.com/") 
				|| (of_get_option("social_twitter") && of_get_option("social_twitter") != "https://twitter.com/") 
				|| (of_get_option("social_gplus") && of_get_option("social_gplus") != "https://plus.google.com/") 
				|| (of_get_option("social_linkedin") && of_get_option("social_linkedin") != "http://www.linkedin.com/") 
				|| (of_get_option("social_youtube") && of_get_option("social_youtube") != "http://www.youtube.com/") ) )
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


		<?php if(of_get_option("enablesitesearch")) get_search_form(true); ?>
		<?php if(of_get_option("enablelogin")) { if  (function_exists ('wplb_login'))   { wplb_login(); } } ?>


		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'fallback_cb' =>'' ) ); ?>

		<?php if( (of_get_option("frontpageheaderonly") && is_front_page()) || of_get_option("frontpageheaderonly")==0){ ?>
			<img src="<?php header_image(); ?>" class="header-banner" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		<?php } ?>



	</header><!-- #masthead -->


	<div id="content" class="site-content">
