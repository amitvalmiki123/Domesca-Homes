<?php
/**
 * Consultation / assurance strip.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$assure   = isset( $defaults['assure'] ) && is_array( $defaults['assure'] ) ? $defaults['assure'] : array();

$title  = dsc_row_key( $section, 'title', isset( $assure['title'] ) ? $assure['title'] : 'Not sure where to start? Book a free, no-obligation consultation.' );
$text   = dsc_row_key( $section, 'text', isset( $assure['text'] ) ? $assure['text'] : 'At your first consultation you discuss your project goals, site details, budget and timeline with our team.' );
$button = dsc_row_key( $section, 'button', isset( $assure['button'] ) ? $assure['button'] : 'Book My Consultation' );
$url    = dsc_row_key( $section, 'url', '#enquire' );
?>
<section class="assure" aria-label="<?php esc_attr_e( 'Book a consultation', 'domesca-homes' ); ?>">
  <div class="wrap wrap-wide assure__in">
    <div class="assure__tx rv">
      <h2><?php echo wp_kses_post( $title ); ?></h2>
      <p><?php echo wp_kses_post( $text ); ?></p>
    </div>
    <a class="btn btn--white rv rv-d1" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $button ); ?></a>
  </div>
</section>
