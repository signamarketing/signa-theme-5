<?php
/**
 * The template for displaying contact page
 * Template Name: Contact Page
 *
 * @package start-theme
 */

get_header(); ?>

  <!-- Page Title Section-->
  <?php get_template_part( 'template-parts/content-page-title-2' ); ?>




<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php
    get_template_part( 'template-parts/content-flexible-layout-contact' )
  ?>
  
  </article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>