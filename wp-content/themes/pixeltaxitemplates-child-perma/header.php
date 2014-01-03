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
		.main-navigation li> a 
			{ color:<?php echo of_get_option("primary_color") ?>; }
		body,
		.entry-content form textarea:focus, 
		.entry-content form input:focus
			{ border-color: <?php echo of_get_option("primary_color") ?>; }
		nav.social-media li a,
		nav.social-media ,
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
		a:active,
		.main-navigation li.current_page_item a,
		.main-navigation li.current-menu-item a,
		.main-navigation li:hover > a 
			{ color:<?php echo of_get_option("secondary_color") ?>; }
		nav.social-media li a:hover 
			{ background-color:<?php echo of_get_option("secondary_color") ?>; }
	<?php } ?>
	
	<?php if(of_get_option("background_color")){ ?>
		body { background-color:of_get_option("background_color")}
	<?php } ?>

	@media screen and (min-width: 768px) {
		nav.social-media {background-color:transparent;}
	}

</style>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
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



		<?php if(of_get_option("enablesitesearch")) get_search_form(true); ?>
		<?php if(of_get_option("enablelogin")) { if  (function_exists ('wplb_login'))   { wplb_login(); } } ?>


		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'fallback_cb' =>'' ) ); ?>

		<?php if( (of_get_option("frontpageheaderonly") && is_front_page()) || of_get_option("frontpageheaderonly")==0){ ?>
			<img src="<?php header_image(); ?>" class="header-banner" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		<?php } ?>

	</header><!-- #masthead -->


	<div id="content" class="site-content">
