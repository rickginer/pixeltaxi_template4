<?php
/**
 * pixeltaxi functions and definitions
 *
 * @package pixeltaxi
 */

$args = array(
	'width'         => 1200,
	'height'        => 675,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
	'header-text'	=> false
);
add_theme_support( 'custom-header', $args );