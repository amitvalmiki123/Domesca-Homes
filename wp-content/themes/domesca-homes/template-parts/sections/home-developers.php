<?php
/**
 * Developers / investors section (home page template).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();

$eyebrow     = dsc_row_key( $section, 'eyebrow', 'For Developers & Investors' );
$title       = dsc_row_key( $section, 'title', 'Multi-unit builder for developers & <span class="serif-accent">investors.</span>' );
$prose       = dsc_row_key( $section, 'prose', 'As a developer or investor, you need a builder who delivers certainty — on cost, timelines, and quality. At Domesca Homes, we specialise in multi-unit, townhouse, and small-scale residential developments across Melbourne.' );
$badge_title = dsc_row_key( $section, 'badge_title', 'Duplex, townhouse & multi-unit' );
$badge_text  = dsc_row_key( $section, 'badge_text', 'Small-scale residential developments across Melbourne' );
$button      = dsc_row_key( $section, 'button', 'Talk to Us About Your Site' );
$url         = dsc_row_key( $section, 'url', '#enquire' );

$list = dsc_row_key( $section, 'list', array(
	array( 'label' => 'Feasibility and design review before permit submission' ),
	array( 'label' => 'Fixed-price contract tailored to developer milestones' ),
	array( 'label' => 'End-to-end site management, trades and certifications' ),
	array( 'label' => 'On-time delivery to protect your development timeline' ),
) );
if ( ! is_array( $list ) ) {
	$list = array();
}

$img_data = dsc_image_data( dsc_row_key( $section, 'image', 'interior-open-plan-handover.jpg' ), array(
	'default' => 'interior-open-plan-handover.jpg',
	'alt'     => 'Completed open-plan unit interior at handover, built by Domesca Homes',
) );
?>
<section class="sec dev" id="developers" style="background:var(--n-50)">
  <div class="wrap wrap-wide dev__grid">
    <div class="dev__copy rv">
      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>
      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
      <div class="prose" style="margin-top:1.4rem">
        <p><?php echo wp_kses_post( $prose ); ?></p>
      </div>

      <?php if ( ! empty( $list ) ) : ?>
        <div class="acc acc--plain dev__acc" style="margin-top:2.1rem">
          <div class="acc__item">
            <h3 class="d4">
              <button class="acc__btn" type="button" aria-expanded="false" aria-controls="dev-assist"><?php esc_html_e( 'What we can assist with', 'domesca-homes' ); ?><span class="acc__ic" aria-hidden="true"></span></button>
            </h3>
            <div class="acc__panel" id="dev-assist" role="region" aria-label="<?php esc_attr_e( 'What we can assist with', 'domesca-homes' ); ?>"><div>
              <ul class="dev__list">
                <?php foreach ( $list as $item ) : ?>
                  <?php $label = is_array( $item ) ? dsc_row_key( $item, 'label', '' ) : (string) $item; ?>
                  <?php if ( $label ) : ?>
                    <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg> <?php echo wp_kses_post( $label ); ?></li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            </div></div>
          </div>
        </div>
      <?php endif; ?>

      <div style="display:flex;flex-wrap:wrap;gap:12px;margin-top:2rem">
        <a class="btn" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $button ); ?></a>
        <a class="btn btn--ghost" href="tel:<?php echo esc_attr( dsc_phone() ); ?>"><?php echo esc_html( dsc_phone_display() ); ?></a>
      </div>
    </div>

    <div class="dev__media rv rv-d1">
      <img src="<?php echo esc_url( $img_data['url'] ); ?>" alt="<?php echo esc_attr( $img_data['alt'] ); ?>" width="<?php echo esc_attr( $img_data['width'] ); ?>" height="<?php echo esc_attr( $img_data['height'] ); ?>" loading="lazy">
      <div class="dev__badge">
        <b><?php echo esc_html( $badge_title ); ?></b>
        <span><?php echo esc_html( $badge_text ); ?></span>
      </div>
    </div>
  </div>
</section>
