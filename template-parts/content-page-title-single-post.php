<?php
  //vars
  $page_title = get_field('page_title_content');
?>
<section id="inner-page-title-header" class="d-flex align-items-center page-title-bg page-title py-80" style="position:relative; background-image:url('<?php
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

            <h1 class="mt-0"><?php the_title(); ?></h1>
            <p class="mt-0 mb-0"></p>


              <div class="blog-text-meta">

                <div class="blog-author-name"><?php echo the_author_meta('display_name'); ?></div>
                <span> • </span>
                <div class="blog-post-date">
									<?php 
											$lastupdated = get_the_modified_time('F j, Y');
											echo $lastupdated;
									?>
                </div>
          </div>
          <div>
            <p class="reading-time"></p>
          </div>
        </div>
      </div>
</section>
