<?php
  //vars
  $page_title = get_field('page_title_content');
?>
<section id="inner-page-title-header" class="d-flex align-items-center page-title-bg page-title" style="position:relative; background-image:url('<?php
  if ( has_post_thumbnail() ) {
      echo the_post_thumbnail_url();
  }
  else {
      echo '/wp-content/themes/Signa-Starter-v2/img/signa-banner.jpg';
  }
  ?>');">
  <div id="bg-filter"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col text-center">
            <h1 class="mt-0 mb-0"><?php echo $page_title['title']; ?></h1>
            <p class="mb-0" style="margin-top:23px;"><?php echo $page_title['page_sub_title_text']; ?></p>
          </div>
        </div>
      </div>
</section>