<?php
/**
 * Developers / investors section (home page template).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$list = $key( 'list', array() );
if ( ! is_array( $list ) ) {
	$list = array();
}
?>
<section class="sec dev" id="developers" style="background:var(--n-50)">
  <div class="wrap wrap-wide dev__grid">
    <div class="dev__copy rv">
      <p class="eyebrow"><?php echo esc_html( $key( 'eyebrow', 'For Developers & Investors' ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', 'Multi-unit builder for developers & <span class="serif-accent">investors.</span>' ) ); ?></h2>
      <div class="prose" style="margin-top:1.4rem">
        <?php echo wp_kses_post( $key( 'prose', 'As a developer or investor, you need a builder who delivers certainty — on cost, timelines, and quality. At Domesca Homes, we specialise in multi-unit, townhouse, and small-scale residential developments across Melbourne.' ) ); ?>
      </div>

      <?php if ( ! empty( $list ) ) : ?>
        <div class="acc acc--plain dev__acc" style="margin-top:2.1rem">
          <div class="acc__item">
            <h3 class="d4">
              <button class="acc__btn" type="button" aria-expanded="false" aria-controls="dev-assist">What we can assist with<span class="acc__ic" aria-hidden="true"></span></button>
            </h3>
            <div class="acc__panel" id="dev-assist" role="region" aria-label="What we can assist with"><div>
              <ul class="dev__list">
                <?php foreach ( $list as $item ) : ?>
                  <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg> <?php echo wp_kses_post( dsc_row_key( $item, 'label', '' ) ); ?></li>
                <?php endforeach; ?>
              </ul>
            </div></div>
          </div>
        </div>
      <?php endif; ?>

      <div style="display:flex;flex-wrap:wrap;gap:12px;margin-top:2rem">
        <a class="btn" href="<?php echo esc_url( $key( 'url', '#enquire' ) ); ?>"><?php echo esc_html( $key( 'button', 'Talk to Us About Your Site' ) ); ?></a>
        <a class="btn btn--ghost" href="tel:<?php echo esc_attr( dsc_phone() ); ?>"><?php echo esc_html( dsc_phone_display() ); ?></a>
      </div>
    </div>

    <div class="dev__media rv rv-d1">
      <?php dsc_row_image( $section, 'image', 'interior-open-plan-handover.jpg', 'Completed open-plan unit interior at handover, built by Domesca Homes', array( 'loading' => 'lazy' ) ); ?>
      <div class="dev__badge"><b><?php echo esc_html( $key( 'badge_title', 'Duplex, townhouse & multi-unit' ) ); ?></b><span><?php echo esc_html( $key( 'badge_text', 'Small-scale residential developments across Melbourne' ) ); ?></span></div>
    </div>
  </div>
</section>
