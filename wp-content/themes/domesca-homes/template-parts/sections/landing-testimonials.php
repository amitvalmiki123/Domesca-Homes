<?php
/**
 * Landing testimonials.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$tm       = isset( $defaults['testimonials'] ) && is_array( $defaults['testimonials'] ) ? $defaults['testimonials'] : array();

$eyebrow  = dsc_row_key( $section, 'eyebrow', isset( $tm['eyebrow'] ) ? $tm['eyebrow'] : 'Testimonials' );
$title    = dsc_row_key( $section, 'title', isset( $tm['title'] ) ? $tm['title'] : 'What our clients <span class="serif-accent">say.</span>' );
$lead     = dsc_row_key( $section, 'lead', isset( $tm['lead'] ) ? $tm['lead'] : 'Real reviews from homeowners and developers across Melbourne.' );
$foot     = dsc_row_key( $section, 'foot', isset( $tm['foot'] ) ? $tm['foot'] : 'Whether it\'s a family home or an investment development, we take the time to understand your goals.' );
$foot_btn = dsc_row_key( $section, 'foot_button', isset( $tm['foot_btn'] ) ? $tm['foot_btn'] : ( isset( $tm['foot_button'] ) ? $tm['foot_button'] : 'Get Your Free Quote' ) );

$items = dsc_row_key( $section, 'items', isset( $tm['items'] ) ? $tm['items'] : array() );
if ( ! is_array( $items ) || empty( $items ) ) {
	$items = isset( $tm['items'] ) ? $tm['items'] : array();
}
?>
<section class="sec tm" id="testimonials">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow eyebrow--light"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>
      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
      <?php if ( $lead ) : ?>
        <p class="lead"><?php echo esc_html( $lead ); ?></p>
      <?php endif; ?>
    </div>

    <div class="tm__grid">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php
        $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' );
        $quote = dsc_row_key( $item, 'quote', '' );
        $more  = dsc_row_key( $item, 'more', '' );
        $name  = dsc_row_key( $item, 'name', dsc_row_key( $item, 'author', 'Client' ) );
        $init  = dsc_row_key( $item, 'initials', strtoupper( substr( $name, 0, 2 ) ) );
        $role  = dsc_row_key( $item, 'role', dsc_row_key( $item, 'meta', '' ) );
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
            <span class="tmc__meta"><b><?php echo esc_html( $name ); ?></b><span><?php echo esc_html( $role ); ?></span></span>
          </figcaption>
        </figure>
      <?php $i++; endforeach; ?>
    </div>

    <?php if ( $foot || $foot_btn ) : ?>
    <div class="tm__foot rv">
      <?php if ( $foot ) : ?><p><?php echo esc_html( $foot ); ?></p><?php endif; ?>
      <?php if ( $foot_btn ) : ?><a class="btn btn--white" href="#enquire"><?php echo esc_html( $foot_btn ); ?></a><?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
