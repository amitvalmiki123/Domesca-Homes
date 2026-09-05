<?php
/**
 * Domesca Homes child theme bootstrap.
 *
 * It extends the minimal "Domesca Parent" theme and contains all layout,
 * content, ACF and design work.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

define( 'THEME_VERSION', '1.0.0' );
define( 'THEME_DIR', get_stylesheet_directory() );
define( 'THEME_URI', get_stylesheet_directory_uri() );

// Compatibility aliases used by the older template part files.
define( 'DSC_THEME_VERSION', THEME_VERSION );
define( 'DSC_THEME_DIR', THEME_DIR );
define( 'DSC_THEME_URI', THEME_URI );

require_once THEME_DIR . '/defaults.php';                 // all fallback content
require_once THEME_DIR . '/inc/helpers/field-helpers.php';
require_once THEME_DIR . '/inc/helpers/image-helpers.php';
require_once THEME_DIR . '/inc/helpers/section-helpers.php';
require_once THEME_DIR . '/inc/setup.php';
require_once THEME_DIR . '/inc/enqueue.php';
require_once THEME_DIR . '/inc/nav.php';
require_once THEME_DIR . '/inc/ajax.php';
require_once THEME_DIR . '/inc/customizer.php';
require_once THEME_DIR . '/inc/acf/options-fields.php';
require_once THEME_DIR . '/inc/acf/landing-fields.php';
require_once THEME_DIR . '/inc/acf/home-fields.php';

/**
 * Quick check used by templates.
 */
function dsc_is_landing() {
	$is_front     = is_front_page();
	$is_template  = is_page_template( 'page-templates/template-landing.php' );

	return $is_front || $is_template;
}
