<header class="site-header fixed <?php if(is_front_page()){ echo 'home-page'; } ?>">

      <div id="orange-top-bar" ></div>
      <div id="top-nav" class="top-nav">
        <nav class="navbar" role="navigation" >

          <div class="container">
            <div class="row row-navbar m-0" style="display:flex; justify-content:space-between; align-items:center;">

              <div class="navbar-header">
                <a class="brand" href="<?php echo home_url(); ?>">
                  <img src="<?php echo get_field( 'company_logo', 'options' ) ?>">
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

              <div class="nav-collapse collapse" style="">
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
                <!-- Adds click to call function to href link below.
                href="tel:<?php // echo get_field('navbar_phone_number', 'options'); ?>" -->
                  <a class="p-2" href="/contact" alt="call for free estimate">
                    <p>FREE ESTIMATE</p>
                    <span><?php echo get_field('navbar_phone_number', 'options'); ?></span>
                  </a>
                </div>
              </div>

            </div>

          </div>

        </nav>
      </div>
    </header>