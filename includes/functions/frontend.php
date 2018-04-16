<?php
/**
 * Avante Garde functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Avante_Garde
 */

/**
 * Enqueue scripts and styles.
 */
function avante_gard_scripts() {
	wp_enqueue_style( 'avant-garde-style', get_stylesheet_uri() );

	wp_enqueue_script( 'avant-garde-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'avant-garde-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'avante_gard_scripts' );
