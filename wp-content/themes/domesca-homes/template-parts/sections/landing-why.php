<?php
/**
 * Landing "What you get" section.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$why      = isset( $defaults['why'] ) && is_array( $defaults['why'] ) ? $defaults['why'] : array();

$eyebrow = dsc_row_key( $section, 'eyebrow', isset( $why['eyebrow'] ) ? $why['eyebrow'] : 'Why Build With Domesca Homes' );
$title   = dsc_row_key( $section, 'title', isset( $why['title'] ) ? $why['title'] : 'What you get when you build with <span class="serif-accent">us.</span>' );

$items = dsc_row_key( $section, 'items', isset( $why['items'] ) ? $why['items'] : array() );
if ( ! is_array( $items ) || empty( $items ) ) {
	$items = isset( $why['items'] ) ? $why['items'] : array();
}
?>
<section class="sec sec--tight" style="background:var(--n-50)">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>
      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
    </div>

    <div class="incl">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' ); ?>
        <div class="incl__cell rv<?php echo esc_attr( $delay ); ?>">
          <span class="incl__ic" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><?php echo dsc_why_icon( dsc_row_key( $item, 'icon', 'check' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></svg></span>
          <div>
            <h3><?php echo wp_kses_post( dsc_row_key( $item, 'title', '' ) ); ?></h3>
            <p><?php echo wp_kses_post( dsc_row_key( $item, 'text', '' ) ); ?></p>
          </div>
        </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
