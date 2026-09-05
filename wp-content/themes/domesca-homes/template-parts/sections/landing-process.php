<?php
/**
 * Construction process.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$process  = isset( $defaults['process'] ) && is_array( $defaults['process'] ) ? $defaults['process'] : array();

$eyebrow = dsc_row_key( $section, 'eyebrow', isset( $process['eyebrow'] ) ? $process['eyebrow'] : 'How We Build' );
$title   = dsc_row_key( $section, 'title', isset( $process['title'] ) ? $process['title'] : 'A clear path from first call to <span class="serif-accent">handover.</span>' );
$lead    = dsc_row_key( $section, 'lead', isset( $process['lead'] ) ? $process['lead'] : 'Our design process begins with an initial consultation to understand your vision and requirements.' );
$note    = dsc_row_key( $section, 'note', isset( $process['note'] ) ? $process['note'] : 'A single-storey home typically takes <strong>4&ndash;6 months</strong>, and a double-storey home <strong>8&ndash;12 months</strong>.' );
$button  = dsc_row_key( $section, 'button', isset( $process['button'] ) ? $process['button'] : 'Get My Free Quote' );
$url     = dsc_row_key( $section, 'url', '#enquire' );

$steps = dsc_row_key( $section, 'steps', isset( $process['steps'] ) ? $process['steps'] : array() );
if ( ! is_array( $steps ) || empty( $steps ) ) {
	$steps = isset( $process['steps'] ) ? $process['steps'] : array();
}
?>
<section class="sec proc" id="process">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>
      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
      <?php if ( $lead ) : ?>
        <p class="lead"><?php echo esc_html( $lead ); ?></p>
      <?php endif; ?>
    </div>

    <div class="proc__grid">
      <?php $i = 0; foreach ( $steps as $step ) : ?>
        <?php $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ( 2 === $i ? ' rv-d2' : ' rv-d3' ) ); ?>
        <div class="step rv<?php echo esc_attr( $delay ); ?>">
          <div class="step__num"><?php echo esc_html( dsc_row_key( $step, 'label', '0' . ( $i + 1 ) ) ); ?></div>
          <h3><?php echo wp_kses_post( dsc_row_key( $step, 'title', '' ) ); ?></h3>
          <p><?php echo wp_kses_post( dsc_row_key( $step, 'text', '' ) ); ?></p>
        </div>
      <?php $i++; endforeach; ?>
    </div>

    <?php if ( $note || $button ) : ?>
    <div class="proc__foot rv">
      <?php if ( $note ) : ?>
        <p class="proc__note"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg> <?php echo wp_kses_post( $note ); ?></p>
      <?php endif; ?>
      <?php if ( $button ) : ?>
        <a class="btn" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $button ); ?></a>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
