      <?php $contactform = get_field('sidebar_form', 'options'); ?>
      <div id="contact-form">
        <h3 class="font-weight-bold sidebar-title-size mt-2 mb-4 text-center"><?php echo the_field('sidebar_title', 'options'); ?></h3>
        <?php echo do_shortcode($contactform) ?>
      </div>
      <div id="content-below-sidebar-form" class="text-center">
        <?php echo the_field('sidebar_content_below_form', 'options'); ?>
            <a href="<?php echo get_field('bbb_url', 'options')?>" target="_blank" rel="noopener">
              <img id="bbb-footer-img" class="aligncenter" src="/wp-content/themes/Signa-Starter-v2/img/bbb-logo@2x.png" alt="accredited business" />
            </a>
            <a href="<?php echo get_field('angies_list_url', 'options')?>" target="_blank" rel="noopener">
              <img id="angieslist-sidebar" class="aligncenter" src="/wp-content/themes/Signa-Starter-v2/img/angies-list-logo-min.jpg" alt="angies list" />
            </a>
            <a href="<?php echo get_field('yelp_url', 'options')?>" target="_blank" rel="noopener">
              <img id="yelp-sidebar" src="/wp-content/themes/Signa-Starter-v2/img/yelp-logo-min.jpg" alt="yelp-logo" />
            </a>
            <a href="<?php echo get_field('facebook_url', 'options')?>" target="_blank" rel="noopener">
              <img id="yelp-sidebar" src="/wp-content/themes/Signa-Starter-v2/img/facebook-full-logo-small.jpg" alt="facebook logo" />
            </a>
        <div id="sidebar-bottom-cta"><a href="#contact-form" class="btn orange">Request An Estimate</a></div>
      </div>