<?php
/**
 * About section with dual images, stamp, rich text and bullet points.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$about    = isset( $defaults['about'] ) && is_array( $defaults['about'] ) ? $defaults['about'] : array();

$eyebrow = dsc_row_key( $section, 'eyebrow', isset( $about['eyebrow'] ) ? $about['eyebrow'] : 'New Home Construction' );
$title   = dsc_row_key( $section, 'title', isset( $about['title'] ) ? $about['title'] : 'Homes built to last, by a builder you can <span class="serif-accent">talk to.</span>' );
$lead    = dsc_row_key( $section, 'lead', isset( $about['lead'] ) ? $about['lead'] : '' );
$more    = dsc_row_key( $section, 'more', isset( $about['more'] ) ? $about['more'] : '' );
$stamp   = dsc_row_key( $section, 'stamp', isset( $about['stamp'] ) ? $about['stamp'] : '2013' );

$points  = dsc_row_key( $section, 'points', isset( $about['points'] ) ? $about['points'] : array() );
if ( ! is_array( $points ) || empty( $points ) ) {
	$points = isset( $about['points'] ) ? $about['points'] : array();
}

$image_a = dsc_row_key( $section, 'image_a', isset( $about['image_a'] ) ? $about['image_a'] : 'kitchen-living-pendant.jpg' );
$image_b = dsc_row_key( $section, 'image_b', isset( $about['image_b'] ) ? $about['image_b'] : 'exterior-single-storey.jpg' );

$data_a = dsc_image_data( $image_a, array( 'default' => 'kitchen-living-pendant.jpg', 'alt' => 'Open-plan kitchen and living area with feature pendant lighting in a Domesca Homes custom build' ) );
$data_b = dsc_image_data( $image_b, array( 'default' => 'exterior-single-storey.jpg', 'alt' => 'Contemporary single-storey new home built by Domesca Homes' ) );
?>
<section class="sec" id="about">
  <div class="wrap wrap-wide about__grid">
    <div class="about__media rv">
      <div class="shot-a">
        <img src="<?php echo esc_url( $data_a['url'] ); ?>" alt="<?php echo esc_attr( $data_a['alt'] ); ?>" loading="lazy" width="1560" height="896">
      </div>
      <div class="shot-b">
        <img src="<?php echo esc_url( $data_b['url'] ); ?>" alt="<?php echo esc_attr( $data_b['alt'] ); ?>" loading="lazy" width="705" height="470">
      </div>
      <?php if ( $stamp ) : ?>
        <div class="about__stamp" aria-hidden="true">
          <b><?php echo esc_html( $stamp ); ?></b>
          <span><?php esc_html_e( 'Est. Melbourne', 'domesca-homes' ); ?></span>
        </div>
      <?php endif; ?>
    </div>

    <div class="about__copy rv rv-d1">
      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>

      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>

      <div class="prose" style="margin-top:1.5rem">
        <?php echo wp_kses_post( $lead ); ?>

        <?php if ( wp_strip_all_tags( $more ) ) : ?>
          <div class="more" id="about-more">
            <div><?php echo wp_kses_post( $more ); ?></div>
          </div>
        <?php endif; ?>
      </div>

      <?php if ( wp_strip_all_tags( $more ) ) : ?>
        <button class="more-btn" type="button" data-more="about-more" aria-expanded="false" aria-controls="about-more">
          <span class="lbl-more"><?php esc_html_e( 'Read more', 'domesca-homes' ); ?></span><span class="lbl-less"><?php esc_html_e( 'Show less', 'domesca-homes' ); ?></span>
          <svg width="13" height="13" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>
        </button>
      <?php endif; ?>

      <?php if ( ! empty( $points ) ) : ?>
        <ul class="about__points">
          <?php foreach ( $points as $point ) :
            $label = is_array( $point ) ? dsc_row_key( $point, 'label', '' ) : (string) $point;
            if ( ! $label ) continue;
          ?>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg> <?php echo wp_kses_post( $label ); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</section>
