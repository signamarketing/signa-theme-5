<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package start-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			//vars
			$page_title = get_field('page_title_content');
		?>
			<section id="inner-page-title-header" class="d-flex align-items-center page-title-bg page-title" style="position:relative; background-image:url('<?php 
				echo '/signa-theme-5/wp-content/uploads/2019/08/city-bg.jpg'; ?>')
			;">
				<div id="bg-filter"></div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col text-center">
									<h1 class="mt-0 mb-0">News & Events</h1>
									<p class="mt-0 mb-0">lorem ipsum dolor sit amet consecteur ipsum lorem dolor sit amet consecteur ipsum</p>
								</div>
							</div>
						</div>
			</section>

			<section class="py-80 pb-60">
				<div class="container">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
					?>

								<div class="row">
					<?php
						while ( have_posts() ) : the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('template-parts/content-blog-posts');
							
						endwhile;
					?>
						</div>
						<div class="row justify-content-center">
					<?php
						the_posts_navigation();
					?>
						</div>
					<?php
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
			</section>


			<?php 
          wp_reset_postdata();
          $twitter_feed = get_field('twitter_feed','options');
          if($twitter_feed) {
            get_template_part('template-parts/content-twitter', 'content-twitter');
          }
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
