<?php
/**
 * Landing testimonials.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$tm       = $defaults['testimonials'];
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$items = $key( 'items', $tm['items'] );
if ( ! is_array( $items ) ) {
	$items = $tm['items'];
}
?>
<section class="sec tm" id="testimonials">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <p class="eyebrow eyebrow--light"><?php echo esc_html( $key( 'eyebrow', $tm['eyebrow'] ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $tm['title'] ) ); ?></h2>
      <p class="lead"><?php echo esc_html( $key( 'lead', $tm['lead'] ) ); ?></p>
    </div>

    <div class="tm__grid">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php
        $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' );
        $quote = dsc_row_key( $item, 'quote', '' );
        $more  = dsc_row_key( $item, 'more', '' );
        $init  = dsc_row_key( $item, 'initials', 'JS' );
        $name  = dsc_row_key( $item, 'name', '' );
        $role  = dsc_row_key( $item, 'role', '' );
        $id    = 'tm-' . ( $i + 1 );
        ?>
        <figure class="tmc rv<?php echo esc_attr( $delay ); ?>">
          <span class="tmc__q" aria-hidden="true">&ldquo;</span>
          <blockquote>
            <?php echo wp_kses_post( $quote ); ?>
            <?php if ( wp_strip_all_tags( $more ) ) : ?>
              <div class="tmc__more" id="<?php echo esc_attr( $id ); ?>"><div>
                <?php echo wp_kses_post( $more ); ?>
              </div></div>
            <?php endif; ?>
          </blockquote>
          <?php if ( wp_strip_all_tags( $more ) ) : ?>
            <button class="more-btn" type="button" data-more="<?php echo esc_attr( $id ); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr( $id ); ?>">
              <span class="lbl-more"><?php echo esc_html__( 'Read full review', 'domesca-homes' ); ?></span><span class="lbl-less"><?php echo esc_html__( 'Show less', 'domesca-homes' ); ?></span>
              <svg width="12" height="12" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>
            </button>
          <?php endif; ?>
          <figcaption class="tmc__by">
            <span class="tmc__av" aria-hidden="true"><?php echo esc_html( $init ); ?></span>
            <span><b><?php echo esc_html( $name ); ?></b><span><?php echo esc_html( $role ); ?></span></span>
          </figcaption>
        </figure>
      <?php $i++; endforeach; ?>
    </div>

    <div class="tm__foot rv">
      <p><?php echo esc_html( $key( 'foot', $tm['foot'] ) ); ?></p>
      <a class="btn btn--white" href="#enquiry-form"><?php echo esc_html( $key( 'foot_button', $tm['foot_btn'] ) ); ?></a>
    </div>
  </div>
</section>
