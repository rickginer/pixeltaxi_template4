<?php
/**
 * pixeltaxi functions and definitions
 *
 * @package pixeltaxi
 */

$args = array(
	'width'         => 2000,
	'height'        => 800,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
	'header-text'	=> false
);
add_theme_support( 'custom-header', $args );