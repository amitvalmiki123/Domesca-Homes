<?php
/**
 * Landing process.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$proc     = $defaults['process'];
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$steps = $key( 'steps', $proc['steps'] );
if ( ! is_array( $steps ) ) {
	$steps = $proc['steps'];
}
?>
<section class="sec proc" id="process">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <p class="eyebrow"><?php echo esc_html( $key( 'eyebrow', $proc['eyebrow'] ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $proc['title'] ) ); ?></h2>
      <p class="lead"><?php echo wp_kses_post( $key( 'lead', $proc['lead'] ) ); ?></p>
    </div>

    <ol class="proc__grid">
      <?php $i = 0; foreach ( $steps as $step ) : ?>
        <?php $delay = 0 === $i ? '' : ' rv-d' . ( $i > 4 ? 4 : $i ); ?>
        <li class="step rv<?php echo esc_attr( $delay ); ?>"><b><?php echo wp_kses_post( dsc_row_key( $step, 'label', 'Step' ) ); ?></b><h3><?php echo wp_kses_post( dsc_row_key( $step, 'title', '' ) ); ?></h3><p><?php echo wp_kses_post( dsc_row_key( $step, 'text', '' ) ); ?></p></li>
      <?php $i++; endforeach; ?>
    </ol>

    <div class="proc__note rv">
      <div class="proc__note__text">
        <strong class="proc__note__label"><?php echo esc_html( $key( 'note_label', 'Indicative build timeframes.' ) ); ?></strong>
        <?php echo wp_kses_post( $key( 'note', $proc['note'] ) ); ?>
      </div>
      <a class="btn" href="<?php echo esc_url( $key( 'url', '#enquiry-form' ) ); ?>"><?php echo esc_html( $key( 'button', $proc['button'] ) ); ?></a>
    </div>
  </div>
</section>
