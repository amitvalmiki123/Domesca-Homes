<?php
/**
 * "Your plans, or ours" section (new HTML `.plans`).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_home();
$plans    = isset( $defaults['plans'] ) ? $defaults['plans'] : array();
$key      = function ( $name, $fallback ) use ( $section, $plans ) {
	return dsc_row_key( $section, $name, $fallback );
};

$eyebrow = $key( 'eyebrow', $plans['eyebrow'] );
$title   = $key( 'title', $plans['title'] );
$lead    = $key( 'lead', $plans['lead'] );
$more    = $key( 'more', $plans['more'] );
$more_label = $key( 'more_label', __( 'Read more about our design process', 'domesca-homes' ) );
$routes  = $key( 'routes', $plans['routes'] );
if ( ! is_array( $routes ) ) {
	$routes = $plans['routes'];
}
$image = $key( 'image', $plans['image'] );
$alt   = $key( 'alt', $plans['alt'] );
?>
<section class="sec" id="plans" style="background:var(--white)">
  <div class="wrap wrap-wide about__grid">
    <div class="about__copy rv">
      <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>

      <div class="prose" style="margin-top:1.5rem">
        <?php echo wp_kses_post( $lead ); ?>

        <?php if ( wp_strip_all_tags( $more ) ) : ?>
          <div class="more" id="plans-more"><div>
            <?php echo wp_kses_post( $more ); ?>
          </div></div>
        <?php endif; ?>
      </div>

      <?php if ( wp_strip_all_tags( $more ) ) : ?>
        <button class="more-btn" type="button" data-more="plans-more" aria-expanded="false" aria-controls="plans-more">
          <span class="lbl-more"><?php echo esc_html( $more_label ); ?></span><span class="lbl-less"><?php echo esc_html__( 'Show less', 'domesca-homes' ); ?></span>
          <svg width="13" height="13" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>
        </button>
      <?php endif; ?>

      <?php if ( ! empty( $routes ) ) : ?>
        <div class="plan-routes">
          <?php $i = 0; foreach ( $routes as $route ) : ?>
            <?php $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' ); ?>
            <div class="plan-route rv<?php echo esc_attr( $delay ); ?>">
              <span class="plan-route__ic" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><?php echo dsc_plan_icon( dsc_row_key( $route, 'icon', 'plans' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></svg>
              </span>
              <div>
                <h3><?php echo wp_kses_post( dsc_row_key( $route, 'title', '' ) ); ?></h3>
                <p><?php echo wp_kses_post( dsc_row_key( $route, 'text', '' ) ); ?></p>
              </div>
            </div>
          <?php $i++; endforeach; ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="about__media rv rv-d1">
      <div class="shot-a"><?php dsc_row_image( $section, 'image', $image, $alt, array( 'loading' => 'lazy' ) ); ?></div>
      <div class="about__stamp" aria-hidden="true"><b><?php echo esc_html( $key( 'stamp', $plans['stamp'] ) ); ?></b><span><?php echo esc_html( $key( 'stamp_text', $plans['stamp_text'] ) ); ?></span></div>
    </div>
  </div>
</section>
