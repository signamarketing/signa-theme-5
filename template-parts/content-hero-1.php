<?php
/**
 * Template part for displaying Hero Text.
 *
 * @package start-theme
 */

//vars
$hero = get_field('hero_section');
?>

<section id="hero" class="bg-hero padding-hero py-5 py-md-3 hero-2" style="background-image:url('<?php echo $hero['hero_background_image']; ?>')">
<div id="bg-filter"></div>
    <div class="container">
      <div class="row flex-wrap align-content-center align-items-center text-center">
        <div class="col-12 offset-md-2 col-md-8 text-center hero-title-margin-bottom">
          <h1 class=""><?php echo $hero['hero_title']; ?></h1>
          <?php echo $hero['hero_text']; ?>
          <?php
            if( have_rows('hero_section') ):
              while( have_rows('hero_section') ): the_row();
              $hero_btn = get_sub_field('hero_button');
          ?>
              <a href="<?php echo $hero_btn['hero_button_link']; ?>" class="btn blue"><?php echo $hero_btn['hero_button_text']; ?></a>
          <?php      
              endwhile;
            endif;
          ?>
          
        </div>
      </div>
    </div>
  </section>