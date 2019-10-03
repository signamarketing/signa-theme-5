<?php
  //vars
  $page_title = get_field('page_title');
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
            <h1 class="mt-0 mb-0"><?php echo $page_title['page_title']; ?></h1>
            <?php if( $page_title['intro_paragraph'] ): ?>
            <p class=" mb-0" style="margin-top:23px;"><?php echo $page_title['intro_paragraph']; ?></p>
            <?php endif; ?>
            <?php if( $page_title['button_text'] ): ?>
            <a class="btn white mt-4" href="<?php echo $page_title['button_link']; ?>"><?php echo $page_title['button_text']; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
</section>