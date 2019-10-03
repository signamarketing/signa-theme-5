<?php
/**
 * The template for displaying normal pages
 * Template Name: Service List/Service Parent Page
 * @package start-theme
 */

get_header(); ?>

  <!-- Page Title Section-->
  <?php get_template_part( 'template-parts/content-page-title-2' ); ?>




<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
      //vars
      $page_content_section = get_field('page_content');
    ?>

    <?php
    //Parent Group
    if( have_rows('page_content') ):
      while( have_rows('page_content') ): the_row();
    ?>
    <section class="py-80">
      <div class="container alternating-page-layout">
        <?php
        //Child Group
        if( have_rows('main_content_section') ):
          while( have_rows('main_content_section') ): the_row();?>
            <div class="row">
              <div class="col-md-6 order-2 order-md-1">
                <h2><?php echo the_sub_field('service_listings_title'); ?></h2>
                  <?php
                    if( have_rows('text') ):
                      while( have_rows('text') ): the_row();
                  ?>
                        <h3><?php echo the_sub_field('service_title'); ?></h3>
                        <p><?php echo the_sub_field('service_text'); ?></p>
                        <a class="btn blue btn-small" href="<?php echo the_sub_field('service_button_link'); ?>" alt="<?php echo the_sub_field('image'); ?>"><?php echo the_sub_field('service_button_text'); ?></a>
                  <?php       
                      endwhile;
                    endif;   
                  ?>
              </div>
              <div class="col-md-6 text-center text-md-right order-1 order-md-2 mb-4 mb-md-0">
                <img src="<?php echo the_sub_field('image'); ?>">
              </div>
            </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </section>
    <?php
      endwhile;
    endif;
    ?>

    <?php
    //Parent Group
    if( have_rows('page_content') ):
      while( have_rows('page_content') ): the_row();
    ?>
        <!-- //Section HTML -->
        <section class="py-80 bg-blue">
          <div class="container">
            <div class="row secondary-section-width">
              <div class="col-12 text-center">
    <?php
        //Nested Repeater
                if (have_rows('secondary_content_section')):
                  while (have_rows('secondary_content_section')): the_row();
    ?>
            <!-- Nested Group -->
            <h3 class="h2 mt-0"><?php echo the_sub_field('title'); ?></h3>
            <?php echo the_sub_field('text'); ?>
    <?php
                endwhile;
              endif;
    ?>
          </div>
        </div>
      </div>
    </section>
    <?php
        endwhile;
      endif;
    ?>

    <section class="py-80">
      <div class="container">
        <div class="row">
          <?php
          //vars
          $cta = get_field('call_to_action');
          ?>

          <div class="col-12 col-lg-6 text-center text-lg-left">
            <h3 class="mt-0 mb-lg-0 cta-2-text"><?php echo $cta['text']; ?></h3>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
            <a class="btn blue cta" href="<?php echo $cta['button_link']; ?>" ><?php echo $cta['button_text']; ?></a>
          </div>
        </div>
      </div>
    </section>


  </article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>