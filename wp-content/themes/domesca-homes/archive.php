<?php
/**
 * Archive template.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="dsc-page">
  <div class="wrap wrap-wide" style="padding-block:4rem">
    <?php
    the_archive_title( '<h1 class="d1">', '</h1>' );
    the_archive_description( '<div class="prose" style="margin-top:1rem">', '</div>' );
    ?>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'dsc-result' ); ?>>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="prose"><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; ?>
      <div style="margin-top:2rem"><?php the_posts_pagination(); ?></div>
    <?php else : ?>
      <div class="prose"><p><?php esc_html_e( 'Nothing found.', 'domesca-homes' ); ?></p></div>
    <?php endif; ?>
  </div>
</div>
<?php
get_footer();
