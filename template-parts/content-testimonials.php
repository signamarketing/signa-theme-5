<?php
//vars
$testimonials = get_field('testimonials_section');
?>
<section id="testimonials" class="py-80">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 d-flex justify-content-center align-items-center text-center">
          <h2 class="mt-0 mb-80 font-weight-bold"><?php echo $testimonials['testimonial_section_title']; ?></h2>
        </div>

        <?php
        //Parent Group
        if( have_rows('testimonials_section') ):
          while( have_rows('testimonials_section') ): the_row();
            //Child Repeater
            if ( have_rows( 'testimonials' ) ) : 
              while ( have_rows( 'testimonials' ) ) : the_row();
      ?>
        <div class="col-12 col-lg-4 mb-3 mb-lg-0 testimonial-column">
          <div class="testimonial-container bg-gray">
            <div class="testimonial-title-wrapper d-flex">
                <span class="testimonial-color-bg-<?php echo get_row_index(); ?>"><?php echo the_sub_field('testimonial_name_initial');?></span>
              <div class="testimonial-title text-left">
                <p class="font-weight-bold;"><?php echo the_sub_field('testimonial_name'); ?></p>
                <img src="/wp-content/uploads/2019/08/five-stars.png" alt="5 out of 5 star testimonial">
              </div>
            </div>
            <p class="testimonial-text mb-0"><?php echo the_sub_field('testimonial_text'); ?></p>
          </div>
        </div>
      <?php      
              endwhile;
            endif;

          endwhile;
        endif;
      ?>

        <div>
      </div>
    </div> <!-- end of container -->
  </section>