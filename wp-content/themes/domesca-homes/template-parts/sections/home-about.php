<?php
/**
 * Home page "About Domesca Homes" section (new index.html content).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_home();
$about    = $defaults['about'];
$key      = function ( $name, $fallback ) use ( $section, $about ) {
	return dsc_row_key( $section, $name, $fallback );
};

$points = $key( 'points', $about['points'] );
if ( ! is_array( $points ) ) {
	$points = $about['points'];
}
?>
<section class="sec" id="about">
  <div class="wrap wrap-wide about__grid">
    <div class="about__media rv">
      <div class="shot-a"><?php dsc_row_image( $section, 'image_a', $about['image_a'], 'Timber-floored entry hallway with a feature door in a Domesca Homes custom build' ); ?></div>
      <div class="shot-b"><?php dsc_row_image( $section, 'image_b', $about['image_b'], 'Covered alfresco entertaining area completed by Domesca Homes' ); ?></div>
      <div class="about__stamp" aria-hidden="true"><b><?php echo esc_html( $key( 'stamp', $about['stamp'] ) ); ?></b><span><?php echo esc_html__( 'Est. Melbourne', 'domesca-homes' ); ?></span></div>
    </div>

    <div class="about__copy rv rv-d1">
      <p class="eyebrow"><?php echo esc_html( $key( 'eyebrow', $about['eyebrow'] ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $about['title'] ) ); ?></h2>

      <div class="prose" style="margin-top:1.5rem">
        <?php echo wp_kses_post( $key( 'lead', $about['lead'] ) ); ?>

        <?php if ( wp_strip_all_tags( $key( 'more', $about['more'] ) ) ) : ?>
          <div class="more" id="about-more">
            <div><?php echo wp_kses_post( $key( 'more', $about['more'] ) ); ?></div>
          </div>
        <?php endif; ?>
      </div>

      <?php if ( wp_strip_all_tags( $key( 'more', $about['more'] ) ) ) : ?>
      <button class="more-btn" type="button" data-more="about-more" aria-expanded="false" aria-controls="about-more">
        <span class="lbl-more"><?php echo esc_html__( 'Read more about us', 'domesca-homes' ); ?></span><span class="lbl-less"><?php echo esc_html__( 'Show less', 'domesca-homes' ); ?></span>
        <svg width="13" height="13" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>
      </button>
      <?php endif; ?>

      <ul class="about__points">
        <?php foreach ( $points as $point ) : ?>
          <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg> <?php echo wp_kses_post( dsc_row_key( $point, 'label', '' ) ); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
