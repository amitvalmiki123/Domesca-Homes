<?php
/**
 * "A builder you can talk to" dark why grid (new HTML `.why`).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_home();
$why      = isset( $defaults['why'] ) ? $defaults['why'] : array();
$key      = function ( $name, $fallback ) use ( $section, $why ) {
	return dsc_row_key( $section, $name, $fallback );
};

$items = $key( 'items', $why['items'] );
if ( ! is_array( $items ) ) {
	$items = $why['items'];
}
$image = $key( 'image', $why['image'] );
?>
<section class="sec why" id="why">
  <div class="why__bg" aria-hidden="true"><?php dsc_row_image( $section, 'image', $image, '', array( 'loading' => 'lazy' ) ); ?></div>
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <p class="eyebrow eyebrow--light"><?php echo esc_html( $key( 'eyebrow', $why['eyebrow'] ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $why['title'] ) ); ?></h2>
    </div>

    <div class="why__grid">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' ); ?>
        <div class="why__cell rv<?php echo esc_attr( $delay ); ?>">
          <b><?php echo esc_html( dsc_row_key( $item, 'number', str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ) ); ?></b>
          <h3><?php echo wp_kses_post( dsc_row_key( $item, 'title', '' ) ); ?></h3>
          <p><?php echo wp_kses_post( dsc_row_key( $item, 'text', '' ) ); ?></p>
        </div>
      <?php $i++; endforeach; ?>
    </div>

    <div class="why__cta rv">
      <a class="btn btn--white btn--lg" href="<?php echo esc_url( $key( 'btn1_url', '#banner-form' ) ); ?>"><?php echo esc_html( $key( 'btn1', __( 'Book Your Free Consultation', 'domesca-homes' ) ) ); ?></a>
      <a class="btn btn--on-dark btn--lg" href="<?php echo esc_url( $key( 'btn2_url', 'tel:' . dsc_phone() ) ); ?>"><?php echo esc_html( $key( 'btn2', __( 'Call ' . dsc_phone_display(), 'domesca-homes' ) ) ); ?></a>
      <p><?php echo esc_html( $key( 'note', __( "Servicing Melbourne's north & west.", 'domesca-homes' ) ) ); ?></p>
    </div>
  </div>
</section>
