<?php
/**
 * Functions and definitions for WCUS 2019.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wcus-2019
 */

add_action( 'wp_enqueue_scripts', 'campsite_2017_parent_theme_enqueue_styles' );

/**
 * Enqueue child theme style and dequeue the parent style.
 */
function campsite_2017_parent_theme_enqueue_styles() {
	// Dequeue the parent style because we'll replace the whole stylesheet via Remote CSS.
	wp_dequeue_style( 'campsite-2017-style' );
	wp_enqueue_style( 'wcus-2019-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0' );
}
