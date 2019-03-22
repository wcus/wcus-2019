<?php
/**
 * Functions and definitions for WCUS 2019.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wcus-2019
 */

/**
 * Enqueue child theme style and dequeue the parent style.
 */
function wcus_2019_enqueue_styles() {
	$version = '1.0.0';
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		$version = filemtime( dirname( __FILE__ ) . '/style.css' );
	}

	wp_dequeue_style( 'campsite-2017-style' );
	wp_enqueue_style( 'wcus-2019-style', get_stylesheet_directory_uri() . '/style.css', array(), $version );
}
add_action( 'wp_enqueue_scripts', 'wcus_2019_enqueue_styles', 12 );
