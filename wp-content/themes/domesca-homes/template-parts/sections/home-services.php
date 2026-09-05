<?php
/**
 * Services section (used by the home page template / index.html).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_home();
$svc      = isset( $defaults['services'] ) && is_array( $defaults['services'] ) ? $defaults['services'] : array();

$eyebrow = dsc_row_key( $section, 'eyebrow', 'What We Offer' );
$title   = dsc_row_key( $section, 'title', 'Our construction <span class="serif-accent">services</span>' );
$lead    = dsc_row_key( $section, 'lead', 'From a single custom home through to a multi-unit development, every Domesca Homes project is managed end to end — concept, approvals, construction and handover.' );
$btn     = dsc_row_key( $section, 'button', 'Discuss Your Project' );
$url     = dsc_row_key( $section, 'url', '#enquire' );

$items = dsc_row_key( $section, 'items', $svc );
if ( ! is_array( $items ) || empty( $items ) ) {
	$items = $svc;
}
?>
<section class="sec" id="services" style="background:var(--n-50)">
  <div class="wrap wrap-wide">
    <div class="svc-head">
      <div class="sec-head rv">
        <?php if ( $eyebrow ) : ?>
          <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
        <?php endif; ?>
        <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
        <?php if ( $lead ) : ?>
          <p class="lead"><?php echo esc_html( $lead ); ?></p>
        <?php endif; ?>
      </div>
      <a class="btn btn--ghost rv rv-d1" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $btn ); ?></a>
    </div>

    <div class="svc-grid">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php
        $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' );
        $more  = dsc_row_key( $item, 'more', '' );
        $more_id = 'svc-more-' . ( $i + 1 );
        $tags  = dsc_row_key( $item, 'tags', array() );
        if ( ! is_array( $tags ) ) {
          $tags = array();
        }
        $img = dsc_row_key( $item, 'image', 'exterior-single-storey.jpg' );
        $data = dsc_image_data( $img, array( 'default' => 'exterior-single-storey.jpg', 'alt' => dsc_row_key( $item, 'title', '' ) ) );
        $link = dsc_row_key( $item, 'link', '#enquire' );
        ?>
        <article class="svc rv<?php echo esc_attr( $delay ); ?>">
          <div class="svc__media">
            <img src="<?php echo esc_url( $data['url'] ); ?>" alt="<?php echo esc_attr( $data['alt'] ); ?>" width="<?php echo esc_attr( $data['width'] ); ?>" height="<?php echo esc_attr( $data['height'] ); ?>" loading="lazy">
            <span class="svc__no"><?php echo esc_html( dsc_row_key( $item, 'number', '0' . ( $i + 1 ) ) ); ?></span>
          </div>
          <div class="svc__body">
            <h3><a href="<?php echo esc_url( $link ); ?>"><?php echo wp_kses_post( dsc_row_key( $item, 'title', '' ) ); ?></a></h3>
            <p><?php echo wp_kses_post( dsc_row_key( $item, 'text', '' ) ); ?></p>
            <?php if ( wp_strip_all_tags( $more ) ) : ?>
              <div class="more" id="<?php echo esc_attr( $more_id ); ?>">
                <div><?php echo wp_kses_post( $more ); ?></div>
              </div>
              <button class="more-btn" type="button" data-more="<?php echo esc_attr( $more_id ); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr( $more_id ); ?>">
                <span class="lbl-more"><?php esc_html_e( 'Read more', 'domesca-homes' ); ?></span><span class="lbl-less"><?php esc_html_e( 'Show less', 'domesca-homes' ); ?></span>
                <svg width="12" height="12" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>
              </button>
            <?php endif; ?>

            <?php if ( ! empty( $tags ) ) : ?>
              <div class="svc__tags">
                <?php foreach ( $tags as $tag ) : ?>
                  <?php $t_label = is_array( $tag ) ? dsc_row_key( $tag, 'label', '' ) : (string) $tag; ?>
                  <?php if ( $t_label ) : ?>
                    <span><?php echo esc_html( $t_label ); ?></span>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <a class="link-arrow" href="<?php echo esc_url( $link ); ?>">
              <?php esc_html_e( 'Explore this service', 'domesca-homes' ); ?>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </div>
        </article>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
