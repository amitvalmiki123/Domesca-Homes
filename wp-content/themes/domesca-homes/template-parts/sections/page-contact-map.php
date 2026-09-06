<?php
/**
 * Full-width contact map (new HTML `.contact-map-full`).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section = isset( $args['section'] ) ? $args['section'] : array();
$map     = dsc_row_key( $section, 'map', dsc_opt( 'address_url', 'https://www.google.com/maps?q=Hillside+VIC+3037+Australia&z=11&output=embed' ) );
?>
<section class="contact-map-full" aria-label="<?php echo esc_attr__( 'Map of the Domesca Homes service area', 'domesca-homes' ); ?>">
  <iframe title="<?php echo esc_attr__( 'Map showing the Domesca Homes service area around Hillside, Victoria', 'domesca-homes' ); ?>" src="<?php echo esc_url( $map ); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
