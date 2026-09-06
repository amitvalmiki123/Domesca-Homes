<?php
/**
 * Asset enqueuing.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Front-end assets.
 */
function dsc_enqueue_scripts() {
	$main_ver  = file_exists( THEME_DIR . '/assets/css/main.css' ) ? filemtime( THEME_DIR . '/assets/css/main.css' ) : THEME_VERSION;
	$resp_ver  = file_exists( THEME_DIR . '/assets/css/responsive.css' ) ? filemtime( THEME_DIR . '/assets/css/responsive.css' ) : THEME_VERSION;
	$main_js   = file_exists( THEME_DIR . '/assets/js/main.js' ) ? filemtime( THEME_DIR . '/assets/js/main.js' ) : THEME_VERSION;
	$form_js   = file_exists( THEME_DIR . '/assets/js/theme-forms.js' ) ? filemtime( THEME_DIR . '/assets/js/theme-forms.js' ) : THEME_VERSION;
	$custom_js = file_exists( THEME_DIR . '/assets/js/customizer-preview.js' ) ? filemtime( THEME_DIR . '/assets/js/customizer-preview.js' ) : THEME_VERSION;

	// Google Fonts (font-display: swap is handled by the provider).
	wp_enqueue_style(
		'dsc-fonts',
		'https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&family=Inter:wght@400;450;500;600&family=Instrument+Serif:ital@0;1&display=swap',
		array(),
		null
	);

	// Rule 11: base styles first, responsive media queries second.
	wp_enqueue_style( 'dsc-main', THEME_URI . '/assets/css/main.css', array( 'dsc-fonts' ), $main_ver );
	wp_enqueue_style( 'dsc-responsive', THEME_URI . '/assets/css/responsive.css', array( 'dsc-main' ), $resp_ver );

	wp_enqueue_script( 'dsc-main', THEME_URI . '/assets/js/main.js', array(), $main_js, true );
	wp_enqueue_script( 'dsc-forms', THEME_URI . '/assets/js/theme-forms.js', array( 'dsc-main' ), $form_js, true );

	if ( is_customize_preview() ) {
		wp_enqueue_script( 'dsc-customizer-preview', THEME_URI . '/assets/js/customizer-preview.js', array( 'jquery' ), $custom_js, true );
	}

	wp_localize_script( 'dsc-main', 'dscTheme', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'dsc_enquiry' ),
		'action'  => 'dsc_enquiry',
	) );
}
add_action( 'wp_enqueue_scripts', 'dsc_enqueue_scripts' );
