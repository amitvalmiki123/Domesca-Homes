<?php
/**
 * Search results template.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="dsc-page">
  <div class="wrap wrap-wide" style="padding-block:4rem">
    <h1 class="d1"><?php printf( esc_html__( 'Search results for “%s”', 'domesca-homes' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'dsc-result' ); ?>>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="prose"><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <div class="prose"><p><?php esc_html_e( 'Nothing matched your search. Try another term.', 'domesca-homes' ); ?></p></div>
    <?php endif; ?>
  </div>
</div>
<?php
get_footer();
