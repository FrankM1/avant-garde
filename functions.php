<?php
/**
 * Avante Garde functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Avante_Garde
 */

/**
 * Implement the Theme Kirki Fallback.
 */
require get_template_directory() . '/includes/classes/class-avante-garde-kirki.php';

/**
 * The Kirki installer class.
 */
require get_template_directory() . '/includes/classes/class-kirki-integration.php';

/**
 * Tgm plugin installer class.
 */
require get_template_directory() . '/includes/classes/class-tgm-plugin-activation.php';

 /**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/functions/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/functions/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/functions/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/functions/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/functions/jetpack.php';
}

