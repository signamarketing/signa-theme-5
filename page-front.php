<?php
/**
 * Template Name: Front Page Template
 *
 * @package start-theme
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- Hero Section-->
  
  <?php
    get_template_part( 'template-parts/content-hero-1' );
    // $hero_sections = get_field('hero_sections');

    // if($hero_sections =='Hero 1'){
    //   get_template_part( 'template-parts/content-hero-1' );
    // }
    // elseif($hero_sections =='Hero 2'){
    //   get_template_part( 'template-parts/content-hero-2' );
    // }
  ?>

  <?php
    get_template_part( 'template-parts/content-flexible-layout-default' )
  ?>

</article><!-- #post-## -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>