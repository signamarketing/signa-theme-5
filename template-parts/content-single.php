<?php
/**
 * @package alpha
 */

?>
<?php
  if ( has_post_thumbnail() ) {
    $huge_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hero');
    $huge_image = $huge_image[0];
    $large_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
    $large_image = $large_image[0];
    $medium_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
    $medium_image = $medium_image[0];
  } else {
    $large_image = false;
    $medium_image = false;
  }
  if(!$huge_image){
    $huge_image = $large_image;
  }

  // Catagories
  $categories = get_the_category();
  $output = "";
  $separator = ", ";
  foreach($categories as $category){
    $output .= $category->cat_name . $separator;
  }

  // Author Stuff
  $authorName = get_the_author_meta('user_nicename');
  $user_email = get_the_author_meta('user_email');
  $twitterHandle = get_the_author_meta('twitter');
  $facebookPage = get_the_author_meta('facebook');
  $googlePlus = get_the_author_meta('gplus');
  $instagram = get_the_author_meta('instagram');
  $authorWebpage = get_the_author_meta('user_url'); // clean user url
  $http_pos = strpos($authorWebpage, 'http://');

  // website
  if($http_pos === 0){
    $authorWebpage_clean = substr($authorWebpage, 7);
  }

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
  <section class="py-5 ">
    <div class="container single-post blog-entry-content">

      <div class="row pb-5">
        <div class="col-12">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="row">
      <div class="col-12 col-sm-6 text-center">
        <?php $prevPost = get_previous_post(false);
          if ($prevPost) {?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

              <div class="blog-recent-post-featured-image mb-3 micro post-img-box">
                <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'medium');?>
                <?php previous_post_link('%link',"$prevthumbnail", false);  ?>
              </div>

              <!-- CATEGORY LINK -->
              <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class=" blog-recent-post" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" style="display:block;"><span style="display:block;" class="micro mb-2">' . esc_html( $categories[0]->name ) . '</span></a>';
                } else {
                  return false;
                }
              ?>
              
              <div class="blog-recent-post">
                <?php previous_post_link('%link',"<h4 class=\"font-weight-bold\">%title</h4>", false);  ?>
              </div>

          </article><?php } ?>
        </div>

        <div class="col-12 col-sm-6 text-center">
        <?php $nextPost = get_next_post(false);
          if ($nextPost) {?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

              <!-- IMAGE & LINK -->
              <div class="blog-recent-post-featured-image mb-3 micro post-img-box">
                <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'medium');?>
                <?php next_post_link('%link',"$nextthumbnail", false);  ?>
              </div>


              <!-- CATEGORY LINK -->
              <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class=" blog-recent-post" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" style="display:block;"><span style="display:block;" class="micro mb-2">' . esc_html( $categories[0]->name ) . '</span></a>';
                } else {
                  return false;
                }
              ?>

              <!-- TITLE & LINK -->
              <div class="blog-recent-post">
                <?php next_post_link('%link', "<h4 class=\"font-weight-bold\">%title</h4>", false);  ?>
              </div>
              <?php } ?>
              

          </article>
        </div>
      </div> <!--  END OF PREVIOUS AND NEXT BLOG POST  -->
    </div>
  </section>

</article><!-- #post-## -->