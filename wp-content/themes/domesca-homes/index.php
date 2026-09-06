<?php
/**
 * Main fallback template.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="dsc-page">
  <div class="wrap wrap-wide" style="padding-block:4rem">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
          <?php the_title( '<h1 class="d1">', '</h1>' ); ?>
          <div class="prose" style="margin-top:1.5rem">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <h1 class="d1"><?php esc_html_e( 'Nothing found', 'domesca-homes' ); ?></h1>
      <div class="prose"><p><?php esc_html_e( 'Please check back later or use the navigation above.', 'domesca-homes' ); ?></p></div>
    <?php endif; ?>
  </div>
</div>
<?php
get_footer();
