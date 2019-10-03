
      
      <div class="col-md-6 mb-4 col-lg-4 col-xl-3 blog-recent-post text-center">
        <!-- IMAGE & LINK -->
        <a class="font-weight-bold  text-center" href="<?php the_permalink() ?>">
          <div class="blog-recent-featured-image post-img-box mb-3 micro">
            <img src="<?php get_post_thumbnail_by_size("medium"); ?>" alt="<?php get_post_thumbnail_alt() ?>">
          </div>
        </a>
        <!-- CATEGORY & LINK -->
        <?php
          $categories = get_the_category();
          if ( ! empty( $categories ) ) {
              echo '<a class=" blog-recent-post" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" style="display:block;"><span style="display:block;" class="micro mb-2">' . esc_html( $categories[0]->name ) . '</span></a>';
          } else {
            return false;
          }
        ?>
        <!-- TITLE & LINK -->
        <a class="font-weight-bold  text-center" href="<?php the_permalink() ?>">
          <h4 class="font-weight-bold"><?php the_title(); ?></h4>
        </a>
      </div>