<?php
/**
 * Child theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage wclancpa-2020
 * @since 1.0
 */


/**
 * As a child theme, let's make sure we enqueue scripts and styles from the parent theme.
 */
function enqueue_parent_child_theme_styles() {
	$parent_style = 'parent-style';

	wp_register_style( $parent_style, esc_url( trailingslashit( get_template_directory_uri() ) . 'style.css' ) );
	wp_register_style(
		'child-style',
		esc_url( trailingslashit( get_stylesheet_directory_uri() ) . 'style.css' ),
		array( $parent_style ),
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_style( 'child-style' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_child_theme_styles' );

