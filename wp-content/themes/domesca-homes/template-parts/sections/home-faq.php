<?php
/**
 * FAQ tab section (new HTML `.faq` with tab chips).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_home();
$faq      = isset( $defaults['faq'] ) ? $defaults['faq'] : array();
$key      = function ( $name, $fallback ) use ( $section, $faq ) {
	return dsc_row_key( $section, $name, $fallback );
};

$eyebrow = $key( 'eyebrow', $faq['eyebrow'] );
$title   = $key( 'title', $faq['title'] );
$tabs    = $key( 'tabs', $faq['tabs'] );
if ( ! is_array( $tabs ) ) {
	$tabs = $faq['tabs'];
}
$aside_title = $key( 'aside_title', $faq['aside_title'] );
$aside_text  = $key( 'aside_text', $faq['aside_text'] );
?>
<section class="sec" id="faq" style="background:var(--n-50)">
  <div class="wrap wrap-wide">
    <div class="faq__grid">
      <div>
        <div class="sec-head rv" style="max-width:none">
          <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
          <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
        </div>

        <?php if ( ! empty( $tabs ) ) : ?>
          <div class="faq__tabs rv rv-d1" role="tablist" aria-label="<?php echo esc_attr__( 'FAQ categories', 'domesca-homes' ); ?>">
            <?php $first = true; foreach ( $tabs as $index => $tab ) : ?>
              <?php
              $tab_id  = 'f-' . sanitize_html_class( dsc_row_key( $tab, 'id', 'f' . ( $index + 1 ) ) );
              $tab_txt = dsc_row_key( $tab, 'label', '' );
              ?>
              <button class="chip" type="button" role="tab" id="tab-<?php echo esc_attr( $tab_id ); ?>" aria-controls="<?php echo esc_attr( $tab_id ); ?>" aria-selected="<?php echo $first ? 'true' : 'false'; ?>" tabindex="<?php echo $first ? '0' : '-1'; ?>" data-tab="<?php echo esc_attr( $tab_id ); ?>"><?php echo esc_html( $tab_txt ); ?></button>
            <?php $first = false; endforeach; ?>
          </div>
        <?php endif; ?>

        <?php foreach ( $tabs as $index => $tab ) : ?>
          <?php
          $tab_id   = 'f-' . sanitize_html_class( dsc_row_key( $tab, 'id', 'f' . ( $index + 1 ) ) );
          $questions = dsc_row_key( $tab, 'items', array() );
          if ( ! is_array( $questions ) ) {
            $questions = array();
          }
          ?>
          <div class="acc faq__panel rv" id="<?php echo esc_attr( $tab_id ); ?>" role="tabpanel" aria-labelledby="tab-<?php echo esc_attr( $tab_id ); ?>"<?php echo 0 < $index ? ' hidden' : ''; ?>>
            <?php foreach ( $questions as $item ) : ?>
              <div class="acc__item"><h3><button class="acc__btn" type="button" aria-expanded="false"><?php echo wp_kses_post( dsc_row_key( $item, 'question', '' ) ); ?><span class="acc__ic" aria-hidden="true"></span></button></h3><div class="acc__panel"><div><?php echo wp_kses_post( dsc_row_key( $item, 'answer', '' ) ); ?></div></div></div>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </div>

      <aside class="faq__aside rv rv-d1">
        <h3><?php echo esc_html( $aside_title ); ?></h3>
        <p><?php echo esc_html( $aside_text ); ?></p>
        <a class="btn btn--block" href="#banner-form"><?php echo esc_html__( 'Get My Free Quote', 'domesca-homes' ); ?></a>
        <a class="btn btn--ghost btn--block" href="tel:<?php echo esc_attr( dsc_phone() ); ?>" style="margin-top:10px"><?php echo esc_html( dsc_phone_display() ); ?></a>
        <div class="roof-rule" style="margin:1.6rem 0 1.2rem"></div>
        <p style="font-size:.86rem"><strong style="color:var(--ink-900)"><?php echo esc_html__( 'Prefer email?', 'domesca-homes' ); ?></strong><br><a href="mailto:<?php echo esc_attr( dsc_email() ); ?>" style="color:var(--blue)"><?php echo esc_html( dsc_email() ); ?></a></p>
      </aside>
    </div>
  </div>
</section>
