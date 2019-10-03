<?php $instagram_username = get_field('instagram_username', 'instagram'); ?>
<section class="py-80 pb-60" style="background-color: <?php echo $section_bg_color; ?>;">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12">
        <h3 class="trusted-company-title h3 mb-0 mt-0 title-margin">Follow us on Instagram <a class="instagram-home-link" href="https://instagram.com/<?php echo $instagram_username; ?>" rel="noopener" target="_block">@<?php echo $instagram_username; ?></a></h3>
      </div>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col">
        <!-- Feed Container -->
        <div id="instafetch"></div>
      </div>
    </div>

    <div class="row justify-content-center text-center">
      <div class="col-xs-12">
        <a href="https://www.instagram.com/<?php echo $instagram_username; ?>" class="btn blue">Follow us</a>
      </div>
    </div>
  </div>
</section>