<?php
/**
 * Avante Garde functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Avante_Garde
 */
namespace Avante_Garde;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class Frontend {

    public function __construct() {
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ], 5 );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
    }

    /**
     * Add front end libary scripts
     *
     * @since 1.0.0
     */
    function register_scripts() {
		wp_register_script( 'avant-garde-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
		wp_register_script( 'avant-garde-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    }

    /**
     * Add front end scripts
     *
     * @since 1.0.0
     */
    function enqueue_scripts() {

		wp_enqueue_script( 'avant-garde-navigation' );
		wp_enqueue_script( 'avant-garde-skip-link-focus-fix' );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

    }

    /**
     * Add front end scripts
     *
     * @since 1.0.0
     */
    function enqueue_styles() {
		wp_enqueue_style( 'avant-garde-style', get_stylesheet_uri() );
    }
 
}
