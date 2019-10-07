<?php

// check if the flexible content field has rows of data
if( have_rows('main_content') ):
?>


    

<?php

     // loop through the rows of data
    while ( have_rows('main_content') ) : the_row();

        if( get_row_layout() == 'text_row' ):
        ?>
          <section class="py-80">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <p class="h3 text-blue mt-0 mb-0 font-weight-normal text-center"><?php the_sub_field('text'); ?></p>
                </div>
              </div>
            </div>
          </section>
        <?php
        elseif( get_row_layout() == 'service_boxes' ): 

          if( have_rows('service_box') ):
          ?>
            <section class="py-80 pt-0">
              <div class="container">
                <div class="row">

                  <?php
                  while ( have_rows('service_box') ) : the_row();
                  ?>
                  
                    <div class="col-md-4">
                      <div class="service-box text-white text-center" style="background-image:url('<?php the_sub_field('background_image'); ?>');">
                        <div class="service-box-bg-filter"></div>
                        <h2 class="h3 mt-0"><?php the_sub_field('title'); ?></h2>
                        <p><?php the_sub_field('paragraph_text'); ?></p>
                        <a class="btn white sharp btn-small" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
                      </div>
                    </div>

                  <?php
                  endwhile;
                  ?>
                </div>
              </div>
            </section>
            <?php
          endif;
        elseif( get_row_layout() == 'mid_page_cta' ): 
          if( have_rows('cta') ):
            while ( have_rows('cta') ) : the_row();
        ?>
        
          <section class="py-80 pt-0 mid-page-cta">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h3 class="h2"><?php the_sub_field('cta_text'); ?></h3>
                </div>
                <div class="col-md-12 text-center">
                  <a class="btn blue sharp btn-cta" href="<?php the_sub_field('cta_button_link'); ?>"><img class="phone-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAACZUlEQVRIicWXPWtUQRSG33NZlhQhLCEESSGyhcUWkmIRq6CSMqIEe1PGNNrY5B9IGkEwP0AkRapgEfwFYUFIsAl+ENtEMAoKSzB5H4u919zc3aib3CVnujkz85xz3zMzdwKhi7DkQqingTGJ0BimITQ0CHClB3QiIh5JmpRUk7Qi6VnpZPINasA6cGAbANvbtpuo3JbkIqhIWpB0U1I1IiRJEVGX9EBopMyE8xrXgTtSl6bViJiR1DwRaInga5LqxQGAgMuSHkoaLh0MXIqI0SJUkiIikXQfmCodLMk9gMq0Bj5FxG7p4Ij4Imk/A+YN2IqIJ5K2ygL/KW/bDdutbBtlZnsDmAQqA9lOEfEhIt5GxGE+sIh4qdCWQofdYZ/djjXuLLwm6WdayZnnllCtTKikrpNrCGhx0r4Cc2WfXN1dMAu0U31JNd+0fQNIBgmuAWuFAjsCVmyPDxKc2J4G3ufApBfHUlnV3bsbKrbnbe8V9P4BLAHjPT97Z17T9oztkb9Jc3pMUAUWbR8UMm8Dr2xfL0KBe7Y/pmNXgdu2R/oDdxYbtr2ch6d2BGwCc0AtHTuZ9uXHfLb9vNd9/k8tbE8Ay0ARnm21VWAB2OjhJ523DTy2PfTf4CxzYBHYKx6pOQk4zZf2t4BGf+BO5lXb8+SqvU97A4z1Dc4KyPa07TWgncumK+OC78D2U9vJ2cAdeGK7BszabgHfgF9FYA7aBtZtT+TXCXSOl0Tnn3tK0l1JTeCKpNGIELAvaUfS64h4odD3/NTzgY8DqABXI6IhaRxIImIXeCdpJ5LoulLLAZ/BLuzt9Btc4+h3n/OAUAAAAABJRU5ErkJggg=="><?php the_sub_field('cta_button_text'); ?></a>
                </div>
              </div>
            </div>
          <section>
        <?
            endwhile;
          endif;
        endif;
    endwhile;

else :

    // no layouts found

endif;

?>