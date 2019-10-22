<?php
/**
 * Template part for displaying Hero Text.
 *
 * @package start-theme
 */

//vars
$hero = get_field('hero_section');
?>

<section id="hero" class="tall-hero hero-1 d-flex align-items-center" style="background-image:url('<?php echo $hero['hero_background_image']; ?>')">
<div id="bg-filter"></div>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class=""><?php echo $hero['hero_title']; ?></h1>
        </div>
        <div class="col-12 offset-md-2 col-md-8 text-center">
          <?php echo $hero['hero_text']; ?>
        </div>
          <?php
            if( have_rows('hero_section') ):
              while( have_rows('hero_section') ): the_row();
              $hero_btn = get_sub_field('hero_button');
          ?>
          <div class="col-12 offset-md-2 col-md-8 text-center">
              <a href="<?php echo $hero_btn['hero_button_link']; ?>" class="btn btn-hero white"><?php echo $hero_btn['hero_button_text']; ?></a>
              </div>
          <?php      
              endwhile;
            endif;
          ?>
          
        </div>
      </div>
    </div>
  </section>