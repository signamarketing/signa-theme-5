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

  <?php //get_template_part('template-parts/content-homepage-links-under-hero'); ?>

  <?php
    get_template_part( 'template-parts/content-homepage-main-content-1' )
    // $homepage_main_content_sections = get_field('main_content_layout_selection');

    // if($homepage_main_content_sections =='Main Content Layout 1'){
    //   get_template_part( 'template-parts/content-homepage-main-content-1' );
    // }
    // elseif($homepage_main_content_sections =='Main Content Layout 2'){
    //   get_template_part( 'template-parts/content-homepage-main-content-2' );
    // }

  ?>

  <?php get_template_part('template-parts/content-trusted-companies'); ?>

  <?php get_template_part('template-parts/content-testimonials'); ?>

  <?php get_template_part('template-parts/content-cta-1'); ?>

  <!-- Social Feed -->
  <?php signa_select_social(); ?>

  <?php get_template_part('template-parts/content-recent-blog'); ?>

</article><!-- #post-## -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>