<?php

// check if the flexible content field has rows of data
if( have_rows('main_content_copy') ):
?>

<?php

     // loop through the rows of data
    while ( have_rows('main_content_copy') ) : the_row();

        if( get_row_layout() == 'text_row' ):
        ?>
          <?php
            if (get_sub_field('add_space_below') == 'No'){
              $paddingClass="pb-0";
            }
          ?>
          <section class="py-80 <?php echo $paddingClass; ?>">
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
                  
                    <div class="col-md-6 col-lg-4 mb-3">
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
                <div class="col-lg-12 text-center mb-3">
                  <h3 class="h2 mt-0"><?php the_sub_field('cta_text'); ?></h3>
                </div>
                <div class="col-lg-12 text-center">
                  <a class="btn blue sharp btn-cta" href="<?php the_sub_field('cta_button_link'); ?>"><img class="phone-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAACZUlEQVRIicWXPWtUQRSG33NZlhQhLCEESSGyhcUWkmIRq6CSMqIEe1PGNNrY5B9IGkEwP0AkRapgEfwFYUFIsAl+ENtEMAoKSzB5H4u919zc3aib3CVnujkz85xz3zMzdwKhi7DkQqingTGJ0BimITQ0CHClB3QiIh5JmpRUk7Qi6VnpZPINasA6cGAbANvbtpuo3JbkIqhIWpB0U1I1IiRJEVGX9EBopMyE8xrXgTtSl6bViJiR1DwRaInga5LqxQGAgMuSHkoaLh0MXIqI0SJUkiIikXQfmCodLMk9gMq0Bj5FxG7p4Ij4Imk/A+YN2IqIJ5K2ygL/KW/bDdutbBtlZnsDmAQqA9lOEfEhIt5GxGE+sIh4qdCWQofdYZ/djjXuLLwm6WdayZnnllCtTKikrpNrCGhx0r4Cc2WfXN1dMAu0U31JNd+0fQNIBgmuAWuFAjsCVmyPDxKc2J4G3ufApBfHUlnV3bsbKrbnbe8V9P4BLAHjPT97Z17T9oztkb9Jc3pMUAUWbR8UMm8Dr2xfL0KBe7Y/pmNXgdu2R/oDdxYbtr2ch6d2BGwCc0AtHTuZ9uXHfLb9vNd9/k8tbE8Ay0ARnm21VWAB2OjhJ523DTy2PfTf4CxzYBHYKx6pOQk4zZf2t4BGf+BO5lXb8+SqvU97A4z1Dc4KyPa07TWgncumK+OC78D2U9vJ2cAdeGK7BszabgHfgF9FYA7aBtZtT+TXCXSOl0Tnn3tK0l1JTeCKpNGIELAvaUfS64h4odD3/NTzgY8DqABXI6IhaRxIImIXeCdpJ5LoulLLAZ/BLuzt9Btc4+h3n/OAUAAAAABJRU5ErkJggg=="><?php the_sub_field('cta_button_text'); ?></a>
                </div>
              </div>
            </div>
          </section>
        <?php
            endwhile;
          endif;
        ?>

        <?php
        elseif( get_row_layout() == 'testimonials_layout' ): 
        ?>
          <?php
            $bg_img = get_sub_field('background_image');
          ?>
          <section id="testimonials" class="testimonial-bg py-80" style="background-image:url('<?php echo $bg_img; ?>');">
            <div class="testimonial-bg-filter"></div>
            <div class="container">

              <div class="row">
                <div class="col-12 text-center d-flex justify-content-center testimonials-title align-items-center">
                  <h2 class="text-white text-uppercase"><?php the_sub_field('title'); ?></h2>
                </div>
              </div>
              <?php
                if( have_rows('testimonial') ):
                  $count = 0;
              ?>
              <div class="row text-center"><!-- Start of Row -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="0">
                  <div class="carousel-inner text-white">
                    <?php
                      while ( have_rows('testimonial') ) : the_row();
                    ?>
                    <div class="carousel-item <?php if ($count==0) {echo "active"; } ?>">
                      <div class="">
                        <p class="card-text">“<?php the_sub_field('testimonial_text'); ?>”</p>
                        <h4 class="card-title font-weight-normal mb-0">- <?php the_sub_field('name'); ?></h4>
                      </div>
                    </div>
                    <?php
                      $count++;
                      endwhile;
                    ?>
                    <!-- Check for more than one testimonial to display controls -->
                    <span class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </span>
                    <span class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </span>
                    
                  </div> <!-- end of carousel inner -->
                </div> <!-- end of carousel-->
              </div> <!-- end of row -->

              <?php 
                endif;
              ?>
            </div> <!-- end of container -->
          </section>
        <?php
          elseif( get_row_layout() == 'service_area_layout' ): 
        ?>
          <?php
            $bg_img = get_sub_field('background_image');
          ?>
            <section id="service-area" class="bg-img py-80" style="background-image:url('<?php echo $bg_img; ?>');">
                <div class="container">
                  <div class="bg-filter"></div>
                  <div class="row text-white">
                    <div class="col-12 text-center d-flex justify-content-center testimonials-title align-items-center">
                      <h2 class=" text-uppercase text-white"><?php the_sub_field('title'); ?></h2>
                    </div>

                    <?php
                      if( have_rows('column_1') ):
                    ?>
                      <div class="col-md-3 text-center text-md-left">
                        <?php
                          while ( have_rows('column_1') ) : the_row();
                        ?>   
                        <?php
                          if( have_rows('city') ):
                            while ( have_rows('city') ) : the_row();
                        ?>
                          <?php
                            $city_page_link = get_sub_field('link');
                            $city_name = get_sub_field('city_name');
                            if (get_sub_field('link')) :
                              echo '<a href="'.$city_page_link.'" alt="link to '.$city_name.' page">'.$city_name.'</a>';
                            else :
                              echo '<p>'.$city_name.'</p>';
                            endif;
                          ?>
                        <?php
                            endwhile;
                          endif;
                        ?>
                      
                    <?php
                        endwhile;
                    ?>
                    </div>
                    <?php
                      endif;
                    ?>

<?php
                      if( have_rows('column_2') ):
                    ?>
                      <div class="col-md-3 text-center text-md-left">
                        <?php
                          while ( have_rows('column_2') ) : the_row();
                        ?>   
                        <?php
                          if( have_rows('city') ):
                            while ( have_rows('city') ) : the_row();
                        ?>
                          <?php
                            $city_page_link = get_sub_field('link');
                            $city_name = get_sub_field('city_name');
                            if (get_sub_field('link')) :
                              echo '<a href="'.$city_page_link.'" alt="link to '.$city_name.' page">'.$city_name.'</a>';
                            else :
                              echo '<p>'.$city_name.'</p>';
                            endif;
                          ?>
                        <?php
                            endwhile;
                          endif;
                        ?>
                      
                    <?php
                        endwhile;
                    ?>
                    </div>
                    <?php
                      endif;
                    ?>

<?php
                      if( have_rows('column_3') ):
                    ?>
                      <div class="col-md-3 text-center text-md-left">
                        <?php
                          while ( have_rows('column_3') ) : the_row();
                        ?>   
                        <?php
                          if( have_rows('city') ):
                            while ( have_rows('city') ) : the_row();
                        ?>
                          <?php
                            $city_page_link = get_sub_field('link');
                            $city_name = get_sub_field('city_name');
                            if (get_sub_field('link')) :
                              echo '<a href="'.$city_page_link.'" alt="link to '.$city_name.' page">'.$city_name.'</a>';
                            else :
                              echo '<p>'.$city_name.'</p>';
                            endif;
                          ?>
                        <?php
                            endwhile;
                          endif;
                        ?>
                      
                    <?php
                        endwhile;
                    ?>
                    </div>
                    <?php
                      endif;
                    ?>


                    <?php
                      if( have_rows('column_4') ):
                    ?>
                      <div class="col-md-3 text-center text-md-left">
                        <?php
                          while ( have_rows('column_4') ) : the_row();
                        ?>   
                        <?php
                          if( have_rows('city') ):
                            while ( have_rows('city') ) : the_row();
                        ?>
                          <?php
                            $city_page_link = get_sub_field('link');
                            $city_name = get_sub_field('city_name');
                            if (get_sub_field('link')) :
                              echo '<a href="'.$city_page_link.'" alt="link to '.$city_name.' page">'.$city_name.'</a>';
                            else :
                              echo "<p>".$city_name."</p>";
                            endif;
                          ?>
                        <?php
                            endwhile;
                          endif;
                        ?>
                      
                    <?php
                        endwhile;
                    ?>
                    </div>
                    <?php
                      endif;
                    ?>

                  </div><!-- END OF ROW -->

                </div>
              </div>
            </section>
        <?php
          elseif( get_row_layout() == '5050_text_image_layout' ): 
        ?>
          <section class="py-80">
            <div class="container alternating-page-layout">
              <?php
              // Reverse layout class added to both div.row elements
              if (get_sub_field('reverse_layout_2') == 'Yes'){
                $reverse_row_2 = "flex-row-reverse";
              }
              //Child Group
              if( have_rows('row') ):
                while( have_rows('row') ): the_row();
                  // Align Images for div.col elements
                  if (get_sub_field('align_image') == 'Left'){
                    $align_image = "text-md-left";
                  }
                  elseif (get_sub_field('align_image') == 'Center'){
                    $align_image = "text-md-center";
                  }
                  elseif (get_sub_field('align_image') == 'Right'){
                    $align_image = "text-md-right";
                  }

                  // This counts the EVEN and ODD rows for alternating layouts. This is the SECOND ROW
                  if( get_row_index() % 2 == 0 ){
              ?>
                  <div class="row <?php echo $reverse_row_2; ?> ">
                      <div class="col-md-6 text-center <?php echo $align_image; ?> mb-4 mb-md-0">
                        <?php
                          $image = get_sub_field('image');
                          $url = $image['url'];
                          $alt = $image['alt'];
                        ?>
                        <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                      </div>
                      <div class="col-md-6">
                        <?php echo the_sub_field('text'); ?>
                      </div>
                    </div>
                  <?php    
                    } else{
                    // this is an odd row aka the FIRST ROW
                  ?>
                  <div class="row <?php echo $reverse_row_2; ?>">
                    <div class="col-md-6 order-2 order-md-1">
                      <?php echo the_sub_field('text'); ?>
                    </div>
                    <div class="col-md-6 text-center <?php echo $align_image; ?> order-1 order-md-2 mb-4 mb-md-0">
                    <?php
                          $image = get_sub_field('image');
                          $url = $image['url'];
                          $alt = $image['alt'];
                        ?>
                        <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                    </div>
                  </div>
              <?php
                  } //end IF ELSE STATEMENT FOR ALTERNATING ROWS
                endwhile;
              endif;
              ?>
            </div>
          </section>
        <?php
          elseif( get_row_layout() == 'two_column_cta' ): 
        ?>
        <?php
          if(get_sub_field('background_color') == 'White'){
            $bgColor = "white";
            $phoneColor = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAACZUlEQVRIicWXPWtUQRSG33NZlhQhLCEESSGyhcUWkmIRq6CSMqIEe1PGNNrY5B9IGkEwP0AkRapgEfwFYUFIsAl+ENtEMAoKSzB5H4u919zc3aib3CVnujkz85xz3zMzdwKhi7DkQqingTGJ0BimITQ0CHClB3QiIh5JmpRUk7Qi6VnpZPINasA6cGAbANvbtpuo3JbkIqhIWpB0U1I1IiRJEVGX9EBopMyE8xrXgTtSl6bViJiR1DwRaInga5LqxQGAgMuSHkoaLh0MXIqI0SJUkiIikXQfmCodLMk9gMq0Bj5FxG7p4Ij4Imk/A+YN2IqIJ5K2ygL/KW/bDdutbBtlZnsDmAQqA9lOEfEhIt5GxGE+sIh4qdCWQofdYZ/djjXuLLwm6WdayZnnllCtTKikrpNrCGhx0r4Cc2WfXN1dMAu0U31JNd+0fQNIBgmuAWuFAjsCVmyPDxKc2J4G3ufApBfHUlnV3bsbKrbnbe8V9P4BLAHjPT97Z17T9oztkb9Jc3pMUAUWbR8UMm8Dr2xfL0KBe7Y/pmNXgdu2R/oDdxYbtr2ch6d2BGwCc0AtHTuZ9uXHfLb9vNd9/k8tbE8Ay0ARnm21VWAB2OjhJ523DTy2PfTf4CxzYBHYKx6pOQk4zZf2t4BGf+BO5lXb8+SqvU97A4z1Dc4KyPa07TWgncumK+OC78D2U9vJ2cAdeGK7BszabgHfgF9FYA7aBtZtT+TXCXSOl0Tnn3tK0l1JTeCKpNGIELAvaUfS64h4odD3/NTzgY8DqABXI6IhaRxIImIXeCdpJ5LoulLLAZ/BLuzt9Btc4+h3n/OAUAAAAABJRU5ErkJggg==";
          }
          else {
            $bgColor = "theme-color";
            $phoneColor = "data:image/png;base64,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";
          }
          
          if( have_rows('cta') ):
            while ( have_rows('cta') ) : the_row();
        ?>
        
          <section class="py-80 two-column-cta <?php echo $bgColor; ?>">
            <div class="container">
              <div class="row d-flex align-items-center">

                <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                  <h3 class="h2 mt-0 my-lg-0"><?php the_sub_field('cta_text'); ?></h3>
                </div>

                <div class="col-lg-6 text-center">
                  <a class="btn white sharp btn-cta" href="<?php the_sub_field('cta_button_link'); ?>"><img class="phone-icon" src="<?php echo $phoneColor; ?>"><?php the_sub_field('cta_button_text'); ?></a>
                </div>

              </div>
            </div>
          </section>
        <?php
            endwhile;
          endif;
        ?>

        <?php
          elseif( get_row_layout() == 'company_logos_section' ): 
        ?>
            <section class="py-80 company-logos-section">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center">
                    <p class="company-logo-title h2 mt-0 title-margin"><?php the_sub_field('title'); ?></p>
                  </div>
                  <?php
                    if( have_rows('logos') ):
                      while( have_rows('logos') ): the_row();
                  ?>
                    <div class="trusted-company-img" style="margin:auto;">
                      <?php
                        $image = get_sub_field('image');
                        $url = $image['url'];
                        $alt = $image['alt'];
                      ?>
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                    </div>
                  <?php      
                      endwhile;
                    endif;
                  ?>
                </div>
              </div>
            </section>
          <?php
            elseif( get_row_layout() == 'coupons_layout' ): 
          ?>
            <?php
              $coupon_cta_text = get_sub_field('coupon_cta');
              $image = get_sub_field('coupon_logo');
              $url = $image['url'];
              $alt = $image['alt'];
            ?>
            <section class="py-80 coupons-section">
              <div class="container">
                <div class="row">
                  <?php
                    if( have_rows('coupon') ):
                      while( have_rows('coupon') ): the_row();
                  ?>
                    <div class="col-md-6 col-lg-4 text-center">
                      <div class="coupon">
                        <div class="coupon-text">
                          <p class="title mb-0"><?php the_sub_field('title'); ?></p>
                          <?php
                            if(get_sub_field('subtitle')):
                              echo '<p class="subtitle mb-0">'.get_sub_field('subtitle')."</p>";
                            endif;
                          ?>
                        </div>
                        <?php
                          if( get_sub_field('coupon_discount_type') == 'Percent' ):
                        ?>
                          <div class="coupon-discount d-flex justify-content-center">
                            <p class="number"><?php the_sub_field('coupon_discount'); ?></p>
                            <span class="percent-sign">%</span>
                            <span class="percent-text"><?php the_sub_field('coupon_discount_text'); ?></span>
                            <!-- <p class="text"></p> -->
                          </div>
                        <?php
                          
                        ?>
                        <?php
                          endif;
                          if( get_sub_field('coupon_discount_type') == 'Flat Discount' ):
                        ?>
                          <div class="coupon-discount d-flex justify-content-center">
                            <span class="dollar-sign">$</span>
                            <p class="number"><?php the_sub_field('coupon_discount'); ?></p>
                            <p class="text"><?php the_sub_field('coupon_discount_text'); ?></p>
                          </div>
                        <?php
                          endif;
                        ?>

                        <div class="coupon-cta d-flex justify-content-between align-items-center">
                          <p class="coupon-cta-text text-white"><?php echo $coupon_cta_text; ?></p>
                          <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                        </div>
                      </div>
                    </div>
                  <?php      
                      endwhile;
                    endif;
                  ?>
                </div>
              </div>
            </section>
          <?php
            elseif( get_row_layout() == '5050_text_and_image_layout_with_background_image_and_wave_options' ): 
          ?>
          <?php
            $bg_img = get_sub_field('background_image');
          ?>
            <section class="wave-row py-80 bg-img" style="background-image:url('<?php echo $bg_img; ?>');">
              <?php
                if (get_sub_field('add_wave_above') == 'Yes'){
                  echo '<img class="top-wave" alt="top-wave" src="http://signa-theme-5.local/wp-content/uploads/2019/10/inner-page-wave@2x-2.png">';
                }
              ?>
              <div class="bg-filter"></div>
              <div class="container alternating-page-layout">
                <?php
                  if (get_sub_field('reverse_layout') == 'Yes'){
                    $reverse_row = "flex-row-reverse";
                  }
                ?>
                <div class="row <?php echo $reverse_row; ?>">
                  <?php
                    if( have_rows('content') ):
                      while( have_rows('content') ): the_row();
                  ?>
                    <div class="col-md-6 order-2 order-md-1 text-white">
                      <?php echo the_sub_field('text'); ?>
                    </div>
                    <?php
                        $image = get_sub_field('image');
                        $url = $image['url'];
                        $alt = $image['alt'];
                        if (get_sub_field('align_image') == 'Left'){
                          $align_image = "text-md-left";
                        }
                        elseif (get_sub_field('align_image') == 'Center'){
                          $align_image = "text-md-center";
                        }
                        elseif (get_sub_field('align_image') == 'Right'){
                          $align_image = "text-md-right";
                        }
                      ?>
                    <div class="col-md-6 text-center <?php echo $align_image; ?> order-1 order-md-2 mb-4 mb-md-0">
                      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                    </div>
                  <?php
                      endwhile;
                    endif;
                  ?>
                </div>
              </div>
              <?php
                if (get_sub_field('add_wave_below') == 'Yes'){
                  echo '<img class="bottom-wave" alt="top-wave" src="http://signa-theme-5.local/wp-content/uploads/2019/10/inner-page-wave@2x-2.png">';
                }
              ?>
            </section>

          <?php
            elseif( get_row_layout() == 'full_width_text_layout' ): 
          ?>
            <section class="py-80 <?php
              if (get_sub_field('add_space_above_full_width') == 'No'){
                echo "pt-0";
              }
              if (get_sub_field('add_space_below_full_width') == 'No'){
                echo "pb-0";
              }
            ?>">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <p class="h3 text-blue mt-0 mb-0 font-weight-normal text-center"><?php the_sub_field('text'); ?></p>
                  </div>
                </div>
              </div>
            </section>

          <?php
            elseif( get_row_layout() == 'contact_form_&_contact_info' ): 
          ?>
            <section class="contact-form-row py-80 pt-0">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 contact-form">
                    <div class="col-form-container text-center">
                      <h2 class="mt-0"><?php the_sub_field('contact_form_title'); ?></h2>
                    <?php
                      gravity_form( 1, false, false, false, '', false );
                    ?>
                    </div>

                  </div>

                  <div class="col-md-5">
                  <h2 class="mt-5 mt-md-0">Contact Information</h2>
                    <p class="mb-2"><b>Email Address:</b> <?php echo get_field('company_email_address', 'options');?></p>
                    <p class="mb-2"><b>Phone:</b> <?php echo get_field('company_phone_number', 'options');?></p>
                    <p class="mb-3"><b>Location:</b><br><?php echo get_field('company_address', 'options');?></p>
                  <?php
                    if( have_rows('images') ):
                      while( have_rows('images') ): the_row();
                  ?>
                      <div class="image-with-text">
                        <div class="bg-filter"></div>
                          <img src="<?php the_sub_field('image'); ?>" alt="">
                          <p><?php the_sub_field('text'); ?></p>
                      </div>
                  <?php
                      endwhile;
                    endif;
                  ?>
                  </div>
                </div>
              </div>
            </section>

 



<?php
// END OF FLEX LAYOUT ALL NEW LAYOUTS MUST BE ADDED ABOVE THIS LINE
        endif;
    endwhile;

else :

    // no layouts found

endif;

?>