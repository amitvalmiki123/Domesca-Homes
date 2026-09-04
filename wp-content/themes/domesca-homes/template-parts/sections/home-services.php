<?php
/**
 * Services section (used by the home page template / index.html).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_home();
$svc      = $defaults['services'];
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$items = $key( 'items', $svc );
if ( ! is_array( $items ) ) {
	$items = $svc;
}
?>
<section class="sec" id="services" style="background:var(--n-50)">
  <div class="wrap wrap-wide">
    <div class="svc-head">
      <div class="sec-head rv">
        <p class="eyebrow"><?php echo esc_html( $key( 'eyebrow', 'What We Offer' ) ); ?></p>
        <h2 class="d2"><?php echo wp_kses_post( $key( 'title', 'Our construction <span class="serif-accent">services</span>' ) ); ?></h2>
        <p class="lead"><?php echo esc_html( $key( 'lead', 'From a single custom home through to a multi-unit development, every Domesca Homes project is managed end to end — concept, approvals, construction and handover.' ) ); ?></p>
      </div>
      <a class="btn btn--ghost rv rv-d1" href="<?php echo esc_url( $key( 'url', '#enquire' ) ); ?>"><?php echo esc_html( $key( 'button', 'Discuss Your Project' ) ); ?></a>
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
        ?>
        <article class="svc rv<?php echo esc_attr( $delay ); ?>">
          <div class="svc__media">
            <?php dsc_row_image( $item, 'image', 'exterior-single-storey.jpg', dsc_row_key( $item, 'alt', '' ), array( 'loading' => 'lazy' ) ); ?>
            <span class="svc__no"><?php echo esc_html( dsc_row_key( $item, 'number', '0' . ( $i + 1 ) ) ); ?></span>
          </div>
          <div class="svc__body">
            <h3><a href="#enquire"><?php echo wp_kses_post( dsc_row_key( $item, 'title', '' ) ); ?></a></h3>
            <p><?php echo wp_kses_post( dsc_row_key( $item, 'text', '' ) ); ?></p>
            <?php if ( wp_strip_all_tags( $more ) ) : ?>
              <div class="more" id="<?php echo esc_attr( $more_id ); ?>"><div><?php echo wp_kses_post( $more ); ?></div></div>
            <?php endif; ?>
            <?php if ( $tags ) : ?>
              <ul class="svc__tags">
                <?php foreach ( $tags as $tag ) : ?>
                  <li><?php echo esc_html( dsc_row_key( $tag, 'label', '' ) ); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <?php if ( wp_strip_all_tags( $more ) ) : ?>
              <div class="svc__foot">
                <button class="more-btn" type="button" data-more="<?php echo esc_attr( $more_id ); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr( $more_id ); ?>" style="margin-top:0">
                  <span class="lbl-more"><?php echo esc_html__( 'Read more', 'domesca-homes' ); ?></span><span class="lbl-less"><?php echo esc_html__( 'Show less', 'domesca-homes' ); ?></span>
                  <svg width="13" height="13" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>
                </button>
              </div>
            <?php endif; ?>
          </div>
        </article>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
