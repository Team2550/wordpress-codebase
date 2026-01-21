<?php
/**
 * Theme functions and definitions
 *
 * @package skynet2550
 */

/**
 * Enqueue theme stylesheet.
 */
function skynet2550_enqueue_styles() {
	wp_enqueue_style(
		'skynet2550-base',
		get_template_directory_uri() . '/assets/css/base.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'skynet2550_enqueue_styles' );
