<?php
/**
 * Inner page split blocks (converted from the new HTML `.split` pattern).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section = isset( $args['section'] ) ? $args['section'] : array();
$items   = dsc_row_key( $section, 'items', array() );
if ( ! is_array( $items ) ) {
	$items = array();
}
?>
<section class="sec">
  <div class="wrap wrap-wide">
    <?php if ( empty( $items ) ) : ?>
      <div class="split rv">
        <div class="split__copy">
          <p class="eyebrow"><?php echo esc_html__( 'About Domesca Homes', 'domesca-homes' ); ?></p>
          <h2 class="d2"><?php echo esc_html__( 'Quality over quantity, on every project.', 'domesca-homes' ); ?></h2>
          <div class="prose" style="margin-top:1.4rem">
            <p class="lead"><?php echo esc_html__( 'Founded in 2013, Domesca Homes is a Melbourne-based building company specialising in custom homes, renovations, knockdown rebuilds, and multi-unit developments across Melbourne’s north and west.', 'domesca-homes' ); ?></p>
          </div>
        </div>
        <div class="split__media">
          <?php dsc_image( '', 'kitchen-living-pendant.jpg', 'Open-plan kitchen and living area in a Domesca Homes build' ); ?>
          <span class="split__tag"><?php echo esc_html__( 'Established 2013', 'domesca-homes' ); ?></span>
        </div>
      </div>
    <?php endif; ?>

    <?php foreach ( $items as $item ) : ?>
      <?php
      $flip = (bool) dsc_row_key( $item, 'flip', false );
      $tag  = dsc_row_key( $item, 'heading_tag', 'h2' );
      if ( ! in_array( $tag, array( 'h2', 'h3' ), true ) ) {
        $tag = 'h2';
      }
      $heading = dsc_row_key( $item, 'heading', '' );
      $eyebrow = dsc_row_key( $item, 'eyebrow', '' );
      $prose   = dsc_row_key( $item, 'prose', array() );
      $list    = dsc_row_key( $item, 'list', array() );
      $actions = dsc_row_key( $item, 'actions', array() );
      $image   = dsc_row_key( $item, 'image', 'kitchen-living-pendant.jpg' );
      $alt     = dsc_row_key( $item, 'alt', '' );
      $tagline = dsc_row_key( $item, 'tag', '' );
      ?>
      <div class="split<?php echo $flip ? ' split--flip' : ''; ?> rv">
        <div class="split__copy">
          <?php if ( $eyebrow ) : ?>
            <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
          <?php endif; ?>
          <?php if ( $heading ) : ?>
            <<?php echo esc_attr( $tag ); ?> class="<?php echo 'h3' === $tag ? 'd3' : 'd2'; ?>"><?php echo wp_kses_post( $heading ); ?></<?php echo esc_attr( $tag ); ?>>
          <?php endif; ?>

          <?php if ( ! empty( $prose ) ) : ?>
            <div class="prose" style="margin-top:1.4rem">
              <?php foreach ( $prose as $p ) : ?>
                <?php $html = dsc_row_key( $p, 'html', '' ); ?>
                <?php $ptag = dsc_row_key( $p, 'tag', 'p' ); ?>
                <?php if ( 'lead' === $ptag ) : ?>
                  <p class="lead"><?php echo wp_kses_post( $html ); ?></p>
                <?php else : ?>
                  <p><?php echo wp_kses_post( $html ); ?></p>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <?php if ( ! empty( $list ) ) : ?>
            <ul class="split__list">
              <?php foreach ( $list as $li ) : ?>
                <li>
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
                  <?php
                  $url       = dsc_row_key( $li, 'url', '' );
                  $label     = dsc_row_key( $li, 'label', '' );
                  $link_text = dsc_row_key( $li, 'link_label', '' );
                  if ( $url && $link_text && false !== strpos( $label, $link_text ) ) :
                    $before = substr( $label, 0, strpos( $label, $link_text ) );
                    $after  = substr( $label, strpos( $label, $link_text ) + strlen( $link_text ) );
                    echo esc_html( $before );
                    echo '<a href="' . esc_url( $url ) . '">' . esc_html( $link_text ) . '</a>';
                    echo esc_html( $after );
                  elseif ( $url ) :
                    ?>
                    <a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a>
                  <?php else : ?>
                    <?php echo esc_html( $label ); ?>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if ( ! empty( $actions ) ) : ?>
            <div class="split__actions">
              <?php foreach ( $actions as $a ) : ?>
                <?php
                $a_label = dsc_row_key( $a, 'label', '' );
                $a_url   = dsc_row_key( $a, 'url', '' );
                $a_style = dsc_row_key( $a, 'style', '' );
                ?>
                <?php if ( $a_label && $a_url ) : ?>
                  <a class="btn<?php echo 'ghost' === $a_style ? ' btn--ghost' : ''; ?>" href="<?php echo esc_url( $a_url ); ?>"><?php echo esc_html( $a_label ); ?></a>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="split__media">
          <?php dsc_row_image( $item, 'image', $image, $alt, array( 'loading' => 'lazy' ) ); ?>
          <?php if ( $tagline ) : ?>
            <span class="split__tag"><?php echo esc_html( $tagline ); ?></span>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
