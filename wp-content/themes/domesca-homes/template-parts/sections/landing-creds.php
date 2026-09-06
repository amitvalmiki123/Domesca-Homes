<?php
/**
 * Landing credentials strip.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$items    = dsc_row_key( $section, 'items', $defaults['creds'] );
if ( ! is_array( $items ) ) {
	$items = $defaults['creds'];
}
?>
<section class="creds" aria-label="Domesca Homes at a glance">
  <div class="wrap wrap-wide">
    <div class="creds__grid">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php $delay = 0 === $i ? '' : ' rv-d' . ( $i > 3 ? 3 : $i ); ?>
        <div class="cred rv<?php echo esc_attr( $delay ); ?>"><i aria-hidden="true"></i><b><?php echo wp_kses_post( dsc_row_key( $item, 'value', '' ) ); ?></b><span><?php echo wp_kses_post( dsc_row_key( $item, 'label', '' ) ); ?></span></div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
