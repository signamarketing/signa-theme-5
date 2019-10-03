<?php
/**
 * The template for displaying normal pages
 * Template Name: Careers
 * @package start-theme
 */

get_header(); ?>

  <!-- Page Title Section-->
  <?php get_template_part( 'template-parts/content-page-title-2' ); ?>




<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<section class="py-80 pb-60">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="mt-0 mb-80"><?php the_field('services_section_title') ?></h2>
        </div>
      
        <?php

          // check if the repeater field has rows of data
          if( have_rows('services_section') ):

            // loop through the rows of data
              while ( have_rows('services_section') ) : the_row();

        ?>
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <a href="<?php echo the_sub_field('service_link'); ?>" class="intro-block image-block">
              <div class="block-image"
                style="display:none; background-image:url(<?php echo the_sub_field('service_image'); ?>);"></div>
              <div class="block-text">
                <div class="block-icon">
                  <img src="<?php echo the_sub_field('service_image'); ?>">
                  <h3 class="mt-0"><?php echo the_sub_field('service_title'); ?></h3>
                </div>
                <p><?php echo the_sub_field('service_text'); ?></p>
                <p class="read-more mb-0">Read More</p>
              </div>
            </a>
          </div>
        <?php

              endwhile;

          else :

              // no rows found

          endif;
        ?>
      </div>
    </div>
  </section>

  <!-- Social Feed -->
  <?php signa_select_social(); ?>


  </article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>