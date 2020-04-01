<?php
/**
 * Template part for displaying Hero Text.
 *
 * @package start-theme
 */

//vars
$hero = get_field('hero_section');
$hero_bg = $hero['hero_background'];
?>

<section id="hero" class="tall-hero hero-1 d-flex align-items-center" style="background-image:url('<?php echo $hero_bg['hero_background_image']; ?>')">
  <!-- Desktop Video -->
  <?php 
    if ($hero_bg['hero_background_video']){
        if(!is_mobile_device()){
  ?>
  <div class="banner-video">
    <div class="homepage-video-container">

        <video muted autoplay loop class="homepage-video" style="width:100%;">
          <source src="<?php echo $hero_bg['hero_background_video']; ?>" type="video/mp4">
        </video>

    </div>
  </div>
  <?php 
      }
    }
  ?>
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