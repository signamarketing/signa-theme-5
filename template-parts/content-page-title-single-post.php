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

            <h1 class="mt-0"><?php the_title(); ?></h1>
            <p class="mt-0 mb-0"></p>
            <div class="blog-photo-meta">
                <?php 
                  function my_display_gravatar() { 
                    // Get User Email Address
                    $getuseremail = get_the_author_meta('user_email');
              
                    // Convert email into md5 hash and set image size to 200 px
                    $usergravatar = 'https://www.gravatar.com/avatar/' . md5($getuseremail) . '?s=90';
                    echo '<img src="' . $usergravatar . '" class="wpb_gravatar blog-gravatar" />';
                  } 
                  echo my_display_gravatar();
                ?>
              </div>

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
        </div>
      </div>
</section>
