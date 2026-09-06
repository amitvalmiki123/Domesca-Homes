<?php
/**
 * Parent theme fallback. All rendering is intentionally done in the child theme.
 *
 * @package Domesca_Parent
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'get_header' ) ) {
	return;
}

get_header();
?>
<div style="max-width:900px;margin:0 auto;padding:2rem" class="domesca-parent-fallback">
	<h1><?php esc_html_e( 'This theme requires the Domesca Homes child theme.', 'domesca-parent' ); ?></h1>
	<p><?php esc_html_e( 'Please activate the child theme in Appearance → Themes.', 'domesca-parent' ); ?></p>
</div>
<?php
get_footer();
