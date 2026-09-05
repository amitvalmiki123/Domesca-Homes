<?php
/**
 * Credential strip.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$items    = dsc_row_key( $section, 'items', isset( $defaults['creds'] ) ? $defaults['creds'] : array() );

if ( ! is_array( $items ) || empty( $items ) ) {
	$items = isset( $defaults['creds'] ) ? $defaults['creds'] : array();
}
?>
<section class="creds" aria-label="<?php esc_attr_e( 'Domesca Homes at a glance', 'domesca-homes' ); ?>">
  <div class="wrap wrap-wide">
    <div class="creds__grid">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ( 2 === $i ? ' rv-d2' : ' rv-d3' ) ); ?>
        <div class="cred rv<?php echo esc_attr( $delay ); ?>">
          <i aria-hidden="true"></i>
          <b><?php echo wp_kses_post( dsc_row_key( $item, 'value', '' ) ); ?></b>
          <span><?php echo wp_kses_post( dsc_row_key( $item, 'label', '' ) ); ?></span>
        </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
