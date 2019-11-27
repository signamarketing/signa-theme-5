<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package start-theme
 */
get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('template-parts/content-page-title-single-post'); ?>
    <?php get_template_part( 'template-parts/content', 'single' ); ?>
  <?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>