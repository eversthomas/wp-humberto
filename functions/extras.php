<?php
/**
 * Adds custom classes to the array of body classes. Belong to customizer.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function humberto_body_classes( $classes ) {

	// Switch sidebar to left.
	if ( 'left' === get_theme_mod( 'sidebar_position', 'right' ) ) {
		$classes[] = 'with-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'humberto_body_classes' );