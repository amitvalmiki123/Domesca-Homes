<?php
/**
 * Landing FAQ accordion.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$faq      = $defaults['faq'];
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$items = $key( 'items', $faq['items'] );
if ( ! is_array( $items ) ) {
	$items = $faq['items'];
}
?>
<section class="sec" id="faq" style="background:var(--n-50)">
  <div class="wrap wrap-wide">
    <div class="faq__grid">
      <div>
        <div class="sec-head rv" style="max-width:none">
          <p class="eyebrow"><?php echo esc_html( $key( 'eyebrow', $faq['eyebrow'] ) ); ?></p>
          <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $faq['title'] ) ); ?></h2>
        </div>

        <div class="acc rv rv-d1" style="margin-top:2rem">
          <?php foreach ( $items as $item ) : ?>
            <div class="acc__item"><h3><button class="acc__btn" type="button" aria-expanded="false"><?php echo wp_kses_post( dsc_row_key( $item, 'question', '' ) ); ?><span class="acc__ic" aria-hidden="true"></span></button></h3><div class="acc__panel"><div><?php echo wp_kses_post( dsc_row_key( $item, 'answer', '' ) ); ?></div></div></div>
          <?php endforeach; ?>
        </div>
      </div>

      <aside class="faq__aside rv rv-d1">
        <h3><?php echo esc_html( $key( 'aside_title', $faq['aside_title'] ) ); ?></h3>
        <p><?php echo esc_html( $key( 'aside_text', $faq['aside_text'] ) ); ?></p>
        <a class="btn btn--block" href="#enquiry-form"><?php echo esc_html__( 'Get My Free Quote', 'domesca-homes' ); ?></a>
        <a class="btn btn--ghost btn--block" href="tel:<?php echo esc_attr( dsc_phone() ); ?>" style="margin-top:10px"><?php echo esc_html( dsc_phone_display() ); ?></a>
        <div class="roof-rule" style="margin:1.6rem 0 1.2rem"></div>
        <p style="font-size:.86rem"><strong style="color:var(--ink-900)"><?php echo esc_html__( 'Prefer email?', 'domesca-homes' ); ?></strong><br><a href="mailto:<?php echo esc_attr( dsc_email() ); ?>" style="color:var(--blue)"><?php echo esc_html( dsc_email() ); ?></a></p>
      </aside>
    </div>
  </div>
</section>
