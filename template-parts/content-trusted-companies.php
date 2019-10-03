<?php
//vars
$companies = get_field('trusted_companies_section');
?>
<section class="p-60 bg-blue">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p class="trusted-company-title h3 mt-0 title-margin"><?php echo $companies['section_title']; ?></p>
      </div>
      <?php
        if( have_rows('trusted_companies_section') ):
          while( have_rows('trusted_companies_section') ): the_row();

            if ( have_rows( 'images_section' ) ) : 
              while ( have_rows( 'images_section' ) ) : the_row();
      ?>
                <div class="trusted-company-img" style="margin:auto;">
                  <img src="<?php echo the_sub_field('image');?>">
                </div>
      <?php      
              endwhile;
            endif;

          endwhile;
        endif;
      ?>
    </div>
  </div>
</section>