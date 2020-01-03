<section class="py-80 pb-60">
  <div class="container">
    <div class="div row">

    <div class="col-12 text-center">
      <h3 class="mt-0 mb-80 h2">News & Events</h3>
    </div>
      <!-- // Define our WP Query Parameters -->
      <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
      
      <!-- // Start our WP Query -->
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      
      <div class="col-md-4 mb-4 mb-md-0 blog-recent-post text-center">
        <a class="font-weight-bold  text-center" href="<?php the_permalink() ?>">
          <div class="blog-recent-post-featured-image post-img-box mb-3 micro">
            <img src="<?php get_post_thumbnail_by_size("large"); ?>" alt="<?php get_post_thumbnail_alt(); ?>">
          </div>
        </a>
<!-- CATEGORY LINK -->
<?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class=" blog-recent-post" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" style="display:block;"><span style="display:block;" class="micro mb-2">' . esc_html( $categories[0]->name ) . '</span></a>';
                } else {
                  return false;
                }
              ?>
          <a class="font-weight-bold  text-center" href="<?php the_permalink() ?>">
            <h4 class="font-weight-bold"><?php the_title(); ?></h4>
          </a>
      </div>

      <?php 
      endwhile;
      wp_reset_postdata();
      ?>
      <div class="col-12 text-center">
        <a href="/signa-theme-5/blog/" class="btn blue mt-3">View All</a>
      </div>
    </div>
  </div>
</section>
