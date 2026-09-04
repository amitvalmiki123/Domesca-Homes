<?php
/**
 * Landing assurance strip.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$assure   = $defaults['assure'];
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};
?>
<section class="assure">
  <div class="wrap wrap-wide assure__in">
    <div class="assure__tx rv">
      <h2><?php echo wp_kses_post( $key( 'title', $assure['title'] ) ); ?></h2>
      <p><?php echo wp_kses_post( $key( 'text', $assure['text'] ) ); ?></p>
    </div>
    <a class="btn btn--white btn--lg rv rv-d1" href="<?php echo esc_url( $key( 'url', '#enquiry-form' ) ); ?>"><?php echo esc_html( $key( 'button', $assure['button'] ) ); ?></a>
  </div>
</section>
