



<?php

if( have_rows('top_bar', 'option') ): ?>
  <section class="" id="top-bar">
    <div class="container">
      <div class="row py-3 d-block d-md-flex justify-content-center justify-content-md-between">
        <?php while( have_rows('top_bar', 'option') ): the_row(); ?>
          <div class="topbar-col d-md-flex align-items-center">
            <p class="topbar-tagline text-white mb-md-0 text-center text-md-left"><?php echo the_sub_field('tagline_text', 'option'); ?></p>
          </div>
        <?php endwhile; ?>
        <div class="topbar-col d-block d-md-flex align-items-center justify-content-end text-center">
        <?php while( have_rows('top_bar', 'option') ): the_row(); ?>
          <p class="top-bar-cta text-white mb-0 text-center text-md-left"><?php echo the_sub_field('cta_text', 'option'); ?></p>
        <?php endwhile; ?>
          <a href="tel:<?php echo the_field('compnay_phone_number', 'option'); ?>" class="text-white font-weight-bold d-flex align-items-center justify-content-center">
          <img class="phone-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAACZUlEQVRIicWXPWtUQRSG33NZlhQhLCEESSGyhcUWkmIRq6CSMqIEe1PGNNrY5B9IGkEwP0AkRapgEfwFYUFIsAl+ENtEMAoKSzB5H4u919zc3aib3CVnujkz85xz3zMzdwKhi7DkQqingTGJ0BimITQ0CHClB3QiIh5JmpRUk7Qi6VnpZPINasA6cGAbANvbtpuo3JbkIqhIWpB0U1I1IiRJEVGX9EBopMyE8xrXgTtSl6bViJiR1DwRaInga5LqxQGAgMuSHkoaLh0MXIqI0SJUkiIikXQfmCodLMk9gMq0Bj5FxG7p4Ij4Imk/A+YN2IqIJ5K2ygL/KW/bDdutbBtlZnsDmAQqA9lOEfEhIt5GxGE+sIh4qdCWQofdYZ/djjXuLLwm6WdayZnnllCtTKikrpNrCGhx0r4Cc2WfXN1dMAu0U31JNd+0fQNIBgmuAWuFAjsCVmyPDxKc2J4G3ufApBfHUlnV3bsbKrbnbe8V9P4BLAHjPT97Z17T9oztkb9Jc3pMUAUWbR8UMm8Dr2xfL0KBe7Y/pmNXgdu2R/oDdxYbtr2ch6d2BGwCc0AtHTuZ9uXHfLb9vNd9/k8tbE8Ay0ARnm21VWAB2OjhJ523DTy2PfTf4CxzYBHYKx6pOQk4zZf2t4BGf+BO5lXb8+SqvU97A4z1Dc4KyPa07TWgncumK+OC78D2U9vJ2cAdeGK7BszabgHfgF9FYA7aBtZtT+TXCXSOl0Tnn3tK0l1JTeCKpNGIELAvaUfS64h4odD3/NTzgY8DqABXI6IhaRxIImIXeCdpJ5LoulLLAZ/BLuzt9Btc4+h3n/OAUAAAAABJRU5ErkJggg=="><?php echo the_field('compnay_phone_number', 'option'); ?></a>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
