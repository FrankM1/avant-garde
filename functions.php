<?php
/**
 * Avante Garde functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Avante_Garde
 */
 
// add_action( 'after_switch_theme', 'avante_garde_check_theme_setup' );
/**
 * Show in WP Dashboard notice about the theme is not activated.
 *
 * @since 1.0.0
 *
 * @return void
 */
function avante_garde_check_theme_setup(){
	
	// Minimum required version
	$minimum_version = '5.4';

    // Compare versions
    if ( version_compare( PHP_VERSION, $minimum_version, '<' ) ) :
 
		add_action( 'admin_notices', 'avante_garde_php_version_admin_notice' );
		// Theme not activated info message
        function avante_garde_php_version_admin_notice() {
            ?>
            <div class="update-nag">
                <?php printf( __( 'This theme requires a minimum PHP version of %s. Your version is %s. Your previous theme has been restored.', 'avante-garde' ), $minimum_version, PHP_VERSION ); ?>
            </div>
            <?php
        }
 
        // Switch back to previous theme
        switch_theme( get_option( 'theme_switched' ) );
        return false;
 
    endif;
}

if ( ! version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	return;
}

/**
 * Implement the Theme Kirki Fallback.
 */
require get_template_directory() . '/includes/classes/class-avante-garde-kirki.php';

 /**
 * Frontend config class.
 */
require get_template_directory() . '/includes/config/frontend.php';

 /**
 * Required plugins config.
 */
require get_template_directory() . '/includes/config/plugins.php';

 /**
 * Setup theme.
 */
require get_template_directory() . '/includes/config/setup.php';

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

/**
 * Theme About page.
 */
require get_template_directory() . '/includes/admin/about-page.php'; ?>