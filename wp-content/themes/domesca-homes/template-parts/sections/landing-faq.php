<?php
/**
 * Landing FAQ accordion.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$faq      = isset( $defaults['faq'] ) && is_array( $defaults['faq'] ) ? $defaults['faq'] : array();

$eyebrow     = dsc_row_key( $section, 'eyebrow', isset( $faq['eyebrow'] ) ? $faq['eyebrow'] : 'Frequently Asked Questions' );
$title       = dsc_row_key( $section, 'title', isset( $faq['title'] ) ? $faq['title'] : 'Answers before you <span class="serif-accent">build.</span>' );
$aside_title = dsc_row_key( $section, 'aside_title', isset( $faq['aside_title'] ) ? $faq['aside_title'] : 'Ready to start?' );
$aside_text  = dsc_row_key( $section, 'aside_text', isset( $faq['aside_text'] ) ? $faq['aside_text'] : 'Share a few details about your project and our team will review your needs and respond with the next steps.' );

$items = dsc_row_key( $section, 'items', isset( $faq['items'] ) ? $faq['items'] : array() );
if ( ! is_array( $items ) || empty( $items ) ) {
	$items = isset( $faq['items'] ) ? $faq['items'] : array();
}
?>
<section class="sec" id="faq" style="background:var(--n-50)">
  <div class="wrap wrap-wide">
    <div class="faq__grid">
      <div>
        <div class="sec-head rv" style="max-width:none">
          <?php if ( $eyebrow ) : ?>
            <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
          <?php endif; ?>
          <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
        </div>

        <div class="acc rv rv-d1" style="margin-top:2rem">
          <?php foreach ( $items as $item ) : ?>
            <?php 
            $q = dsc_row_key( $item, 'question', '' );
            $a = dsc_row_key( $item, 'answer', '' );
            ?>
            <?php if ( $q ) : ?>
              <div class="acc__item">
                <h3><button class="acc__btn" type="button" aria-expanded="false"><?php echo wp_kses_post( $q ); ?><span class="acc__ic" aria-hidden="true"></span></button></h3>
                <div class="acc__panel"><div><?php echo wp_kses_post( $a ); ?></div></div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>

      <aside class="faq__aside rv rv-d1">
        <h3><?php echo esc_html( $aside_title ); ?></h3>
        <p><?php echo esc_html( $aside_text ); ?></p>
        <a class="btn btn--block" href="#enquire"><?php echo esc_html__( 'Get My Free Quote', 'domesca-homes' ); ?></a>
        <a class="btn btn--ghost btn--block" href="tel:<?php echo esc_attr( dsc_phone() ); ?>" style="margin-top:10px"><?php echo esc_html( dsc_phone_display() ); ?></a>
        <div class="roof-rule" style="margin:1.6rem 0 1.2rem"></div>
        <p style="font-size:.86rem"><strong style="color:var(--ink-900)"><?php echo esc_html__( 'Prefer email?', 'domesca-homes' ); ?></strong><br><a href="mailto:<?php echo esc_attr( dsc_email() ); ?>" style="color:var(--blue)"><?php echo esc_html( dsc_email() ); ?></a></p>
      </aside>
    </div>
  </div>
</section>
