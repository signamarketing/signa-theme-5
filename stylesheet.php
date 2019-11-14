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
        <a class="mb-2 pt-0 stylesheet-go-back-to-site text-white" href="<?php echo get_site_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.png">Go back to site preview</a>
      </div>
    </div>
  </div>
</section>




<style>
ul#navigation-top li {
    padding: 0 3%;
}
li#menu-item-469 a {
    color: #fff !important;
}
li#menu-item-469 {
    background-color: #0088c5;
    /* color: #fff !important; */
    padding: 10px 15px;
    border-radius: 50px !important;
}
</style>
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
                <button class="btn sharp blue">sharp button</button>
              </div>
              <div class="col-12 col-lg-4 p-0 mb-3">
                <button class="btn blue circular" style="border-radius: 110px;">pill button</button>
              </div>
              <div class="col-12 col-lg-4 p-0 mb-3">
                <button class="btn blue rounded">round button</button>
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
                <button class="btn blue" style="background-color:unset; border: 1px solid #0088c5; color: #0088c5 !important;">No background button</button>
              </div>
              <div class="col-12 col-lg-6 p-0 mb-3">
                <button class="btn blue">Color background button</button>
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

  <section class="py-80 mid-page-cta" style="position:relative; background-image:url('<?php echo get_template_directory_uri(); ?>/img/testimonial-background-image-1024x270.jpg'); background-size:cover; background-repeat:no-repeat;"><div id="bg-filter"></div><div class="container"><div class="row"><div class="col-lg-12 text-center mb-3 text-white white"><h3 class="h2 mt-0">Mid Page CTA Goes Here</h3></div><div class="col-lg-12 text-center"> <a class="btn blue sharp btn-cta" href="https://signamarketing.net/signa-theme-5/contact-us/"><img class="phone-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAACZUlEQVRIicWXPWtUQRSG33NZlhQhLCEESSGyhcUWkmIRq6CSMqIEe1PGNNrY5B9IGkEwP0AkRapgEfwFYUFIsAl+ENtEMAoKSzB5H4u919zc3aib3CVnujkz85xz3zMzdwKhi7DkQqingTGJ0BimITQ0CHClB3QiIh5JmpRUk7Qi6VnpZPINasA6cGAbANvbtpuo3JbkIqhIWpB0U1I1IiRJEVGX9EBopMyE8xrXgTtSl6bViJiR1DwRaInga5LqxQGAgMuSHkoaLh0MXIqI0SJUkiIikXQfmCodLMk9gMq0Bj5FxG7p4Ij4Imk/A+YN2IqIJ5K2ygL/KW/bDdutbBtlZnsDmAQqA9lOEfEhIt5GxGE+sIh4qdCWQofdYZ/djjXuLLwm6WdayZnnllCtTKikrpNrCGhx0r4Cc2WfXN1dMAu0U31JNd+0fQNIBgmuAWuFAjsCVmyPDxKc2J4G3ufApBfHUlnV3bsbKrbnbe8V9P4BLAHjPT97Z17T9oztkb9Jc3pMUAUWbR8UMm8Dr2xfL0KBe7Y/pmNXgdu2R/oDdxYbtr2ch6d2BGwCc0AtHTuZ9uXHfLb9vNd9/k8tbE8Ay0ARnm21VWAB2OjhJ523DTy2PfTf4CxzYBHYKx6pOQk4zZf2t4BGf+BO5lXb8+SqvU97A4z1Dc4KyPa07TWgncumK+OC78D2U9vJ2cAdeGK7BszabgHfgF9FYA7aBtZtT+TXCXSOl0Tnn3tK0l1JTeCKpNGIELAvaUfS64h4odD3/NTzgY8DqABXI6IhaRxIImIXeCdpJ5LoulLLAZ/BLuzt9Btc4+h3n/OAUAAAAABJRU5ErkJggg==">123-456-7890</a></div></div></div></section>
</section>

<section >
  <div class="container">
    <h2>CTA section with background color</h2>
  </div>
  <section class="py-80 two-column-cta theme-color"><div class="container"><div class="row d-flex align-items-center"><div class="col-12 text-center mb-3"><h3 class="h2 mt-0">Ask Us About Our Specials!</h3></div><div class="col-12 text-center"> <a class="btn white sharp btn-cta" href="tel:123-456-7890"><img class="phone-icon" src="data:image/png;base64,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">Call (123) 456-7890</a></div></div></div></section>
</section>


</div>
</div>


<?php // get_sidebar(); ?>
<?php get_footer('stylesheet'); ?>