<?php
/**
 * pixeltaxi functions and definitions
 *
 * @package pixeltaxi
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'pixeltaxi_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pixeltaxi_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on pixeltaxi, use a find and replace
	 * to change 'pixeltaxi' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pixeltaxi', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pixeltaxi' ),
		'secondary' => __( 'Secondary Menu', 'pixeltaxi' ),
		'primary-footer' => __( 'Primary Footer', 'pixeltaxi' ),
		'secondary-footer' => __( 'Secondary Footer', 'pixeltaxi' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pixeltaxi_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // pixeltaxi_setup
add_action( 'after_setup_theme', 'pixeltaxi_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function pixeltaxi_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'pixeltaxi' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'pixeltaxi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pixeltaxi_scripts() {
	wp_enqueue_style( 'pixeltaxi-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pixeltaxi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'pixeltaxi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pixeltaxi_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


$args = array(
	'width'         => 1200,
	'height'        => 500,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
	'header-text'	=> false
);
add_theme_support( 'custom-header', $args );



add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if($item->title == "memberships"){ 
             $classes[] = "membership-menu";
     }
     return $classes;
}

