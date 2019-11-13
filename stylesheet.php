<?php
/**
 * The template for displaying client options
 * Template Name: Stylesheet
 *
 * @package start-theme
 */

get_header('stylesheet'); ?>
  <style>
    #orange-top-bar {background-color:<?php the_field('main_theme_color_1', 'options'); ?>;}
    .orange-bg {background-color:<?php the_field('main_theme_color_1', 'options'); ?>;}
    .testimonials-title>div{background-color:<?php the_field('main_theme_color_1', 'options'); ?>;}
    .nav-cta a:hover{
      background-color: <?php the_field('main_theme_color_1', 'options'); ?>;
      border-color: <?php the_field('main_theme_color_1', 'options'); ?>;
    }
    @media (min-width: 992px){
      .nav-collapse .nav-top ul.nav li a:hover {
        text-decoration: none;
        color: <?php the_field('nav_hover_color_1', 'options'); ?>;
      }
    }
    .btn.orange {
      border-color: <?php the_field('button_color_1', 'options'); ?>;
      color: <?php the_field('button_text_color_1', 'options'); ?>;
    }
    .btn.orange:hover {
      background-color: <?php the_field('button_hover_color_1', 'options'); ?>;
      color: <?php the_field('button_text_hover_color_1', 'options'); ?>;
    }

    .btn.dark-blue {
      border-color: <?php the_field('button_color_2', 'options'); ?>;
      color: <?php the_field('button_text_color_2', 'options'); ?>;
    }
    .btn.dark-blue:hover {
      border-color: <?php the_field('button_hover_color_2', 'options'); ?>;
      background-color: <?php the_field('button_hover_color_2', 'options'); ?>;
      color: <?php the_field('button_text_hover_color_2', 'options'); ?>;
    }
    .btn.white {
    border-color: <?php the_field('cta_row_button_color', 'options'); ?>;
    color: <?php the_field('cta_row_button_text_color', 'options'); ?>;
    }    
    .btn.white:hover {
      background-color: <?php the_field('cta_row_button_hover_color', 'options'); ?>;
      color: <?php the_field('cta_row_button_text_hover_color', 'options'); ?>;
    }
    input#gform_submit_button_2 {
      background-color: <?php the_field('form_button_color', 'options'); ?>;
      color: <?php the_field('form_button_text_color', 'options'); ?>;
      border-color: <?php the_field('form_button_border_color', 'options'); ?>;
    }
    #sidebar-bottom-cta a {
      background-color: <?php the_field('bottom_of_form_button_color', 'options'); ?>;
      border-color: <?php the_field('bottom_of_form_button_border_color', 'options'); ?>;
      color: <?php the_field('bottom_of_form_button_text_color', 'options'); ?>;
    }

  </style>
<section id="inner-page-title-header" style="background-image:url('<?php
  if ( has_post_thumbnail() ) {
      echo the_post_thumbnail_url();
  }
  else {
      echo '/wp-content/themes/signa-theme-5/img/signa-banner.jpg';
  }
?>');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h1><?php the_title(); ?></h1>
        <a class="mb-2 pt-0 stylesheet-go-back-to-site text-white" href="/"> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.png">Go back to site preview</a>
      </div>
    </div>
  </div>
</section>





<section class="styleguide" style="">
<div class="container">
  <h2>Header with CTA</h2>
</div>
  <nav class="navbar" role="navigation" style="border-top: 2px #bcbcbc solid; border-bottom: 2px #bcbcbc solid;">
    <div class="container">
      <div class="row row-navbar m-0" style="display:flex; justify-content:space-between; align-items:center;">
        <div class="navbar-header">
          <a class="brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
          </a>
        </div>
        <div class="nav-open float-right">
          <button id="open-nav" type="button" class="btn btn-navbar btn-menu">
            <span class="lines-circle">
              <span class="line-1"></span>
              <span class="line-2"></span>
              <span class="line-3"></span>
            </span>
          </button>
        </div>
        <div class="nav-collapse collapse" style="width:auto;">
          <div class="nav-top">
            <?php
              $args = array(
                'menu' => 'main-menu',
                'menu_class' => 'nav',
                'menu_id' => 'navigation-top',
                'container' => false,
                'theme_location' => 'primary'
              );
              wp_nav_menu($args);
            ?>
          </div>
        </div>
        <!-- Free Estimate -->
        <div class="nav-cta">
          <div>
            <a class="p-2" href="tel:<?php echo get_field('navbar_phone_number', 'options'); ?>" alt="call for free estimate">
              <p>FREE ESTIMATE</p>
              <span><?php echo get_field('navbar_phone_number', 'options'); ?></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</section>

<section class="styleguide">
  <div class="container">
    <h2>Header without CTA</h2>
  </div>
  <nav class="navbar" role="navigation" style="border-top: 2px #bcbcbc solid; border-bottom: 2px #bcbcbc solid; min-height:107px;">
    <div class="container">
      <div class="row row-navbar m-0" style="display:flex; justify-content:space-between; align-items:center;">
        <div class="navbar-header">
          <a class="brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
          </a>
        </div>
        <div class="nav-open float-right">
          <button id="open-nav" type="button" class="btn btn-navbar btn-menu">
            <span class="lines-circle">
              <span class="line-1"></span>
              <span class="line-2"></span>
              <span class="line-3"></span>
            </span>
          </button>
        </div>
        <div class="nav-collapse collapse" style="width:auto;">
          <div class="nav-top">
            <?php
              $args = array(
                'menu' => 'main-menu',
                'menu_class' => 'nav',
                'menu_id' => 'navigation-top',
                'container' => false,
                'theme_location' => 'primary'
              );
              wp_nav_menu($args);
            ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
</section>




<section class="styleguide">
  <div class="container">
    <h2>Header with logo above menu</h2>
  </div>
  <nav class="navbar fullwidth" role="navigation" style="border-top: 2px #bcbcbc solid; border-bottom: 2px #bcbcbc solid; min-height:107px;">
    <div class="container">
      <div class="row row-navbar m-0" style="display:flex; justify-content:space-between; align-items:center;">
        <div class="navbar-header full-width">
          <a class="brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
          </a>
        </div>
        <div class="nav-open float-right">
          <button id="open-nav" type="button" class="btn btn-navbar btn-menu">
            <span class="lines-circle">
              <span class="line-1"></span>
              <span class="line-2"></span>
              <span class="line-3"></span>
            </span>
          </button>
        </div>
        <div class="nav-collapse collapse middle" style="width:auto;">
          <div class="nav-top">
            <?php
              $args = array(
                'menu' => 'main-menu',
                'menu_class' => 'nav',
                'menu_id' => 'navigation-top',
                'container' => false,
                'theme_location' => 'primary'
              );
              wp_nav_menu($args);
            ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
</section>

<section class="styleguide">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 no-gutter">
        <section class="mr-md-3 mr-lg-5 mt-4">
          <div class="container">
            <div class="row">
              <div class="col-12 p-0">
                <h2>Button Shapes</h2>
              </div>
              <div class="col-12 col-lg-4 p-0 mb-3">
                <button class="btn dark-blue">sharp button</button>
              </div>
              <div class="col-12 col-lg-4 p-0 mb-3">
                <button class="btn dark-blue circular">pill button</button>
              </div>
              <div class="col-12 col-lg-4 p-0 mb-3">
                <button class="btn dark-blue rounded">round button</button>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
</section>

<section class="styleguide">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 no-gutter">
        <section class="mr-md-3 mr-lg-5 mt-4">
          <div class="container">
            <div class="row">
              <div class="col-12 p-0">
                <h2>Button Background</h2>
              </div>
              <div class="col-12 col-lg-6 p-0 mb-3">
                <button class="btn dark-blue">No background button</button>
              </div>
              <div class="col-12 col-lg-6 p-0 mb-3">
                <button class="btn dark-blue-bg">Color background button</button>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
</section>

<section class="styleguide">
  <div class="container">
    <h2>CTA section with background image</h2>
  </div>
  <section id="view-gallery"
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/testimonial-background-image-1024x270.jpg');">
    <div class="container">
      <div class="row text-center py-5">
        <div class="col-12 align-items-center justify-content-center text-center">
          <a href="/gallery" class="btn white btn-xl" alt="cabinet gallery link">CTA Button</a>
        </div>
      </div>
    </div>
  </section>
</section>

<section >
  <div class="container">
    <h2>CTA section with background color</h2>
  </div>
  <section id="view-gallery" style="background-color:#454545;">
    <div class="container">
      <div class="row text-center py-5">
        <div class="col-12 align-items-center justify-content-center text-center">
          <a href="/gallery" class="btn white btn-xl" alt="cabinet gallery link">CTA Button</a>
        </div>
      </div>
    </div>
  </section>
</section>


</div>
</div>


<?php // get_sidebar(); ?>
<?php get_footer('stylesheet'); ?>