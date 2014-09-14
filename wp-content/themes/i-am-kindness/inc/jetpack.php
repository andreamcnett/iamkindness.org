<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package i-am-kindness
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function i_am_kindness_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'i_am_kindness_jetpack_setup' );
