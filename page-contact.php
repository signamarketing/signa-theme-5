<?php
/**
 * The template for displaying contact page
 * Template Name: Contact Page
 *
 * @package start-theme
 */

get_header(); ?>

  <!-- Page Title Section-->
  <?php get_template_part( 'template-parts/content-page-title-2' ); ?>




<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="py-80 contact-information">
      <div class="container">
        <div class="row justify-space-between">
          <div class="col-md-6 mb-5 mb-md-0">
            <?php
              //vars
              $contact_form_message = get_field('contact_form');
              echo $contact_form_message['message_above_contact_form'];
              $gravity_id = $contact_form_message ['gravity_form_id'];
            ?>
            
            <?php gravity_form( $gravity_id, false ); ?>
          </div>
          <div class="offset-md-1 col-md-5 text-center text-md-left">
            <h2 class="">Contact Information</h2>
            <div class="social-links">
              <a href="<?php echo get_field('facebook_url', 'options');?>" target="_blank" alt="company facebook link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABfSURBVHgB7dLBCYAwDEbhv07mZs7oBHWT2IOHoIIklorwPui5LyESAOAFM1vaq+ZolOPzC41ynvyLAG9WUlGSn7Y0SpoUdLdqt4mqoHDAg01BvQNWBf3vBnojgAACAOypPW9BFtUERwAAAABJRU5ErkJggg==" alt="facebook logo">
              </a>
              <a href="<?php echo get_field('twitter_url', 'options');?>" target="_blank" alt="company twitter link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGASURBVHgB7VXdbYMwELYJPCLCBKUbdIOSCZpOkHSCqhu0EzQbpBtUnSDNBGk3YAMQ8MZfv0NBohI+mzzlwZ9kGenu/H2+Ox9CWFhYWFwz0jRdGvhEZVm+F0WRYnVYB6yYbLTDdsfFS47c87xTVVWrMAwTFTl8Dl3XRRPmDCup65riMxWPI9SI6GDXdU95nm8ngx1nqyAnLKWUvY9gwAlIRgftkcr9kNqRgHsmXkDcVxAEO85HckYQfmJb/wuQMsH23TTNLwQ84DtWxSP9IZd+VgDVl9K3WCw2TJpZ+L4vdT4uY8sg4Bnk2pegwI+Jk7IHKHVt276JC4HYo4mfNkXog1dkYYPaR2IGUP9b1fMdw9E5gPxGzATEfpiQGwlAt88qAwQnGF7GMVoBdBOIWOHgJ6FpLPhk8H00vb2RgDMypJVKEQk1eS8U5EbdP0D5DDF+1zRocDD9TPgfCmqOpnvRDZ3JWM5IwwiDKAZBP4yGl0C3PU/EI4h3lxBbWFhYDPgD/OK/KVCl97IAAAAASUVORK5CYII=" alt="twitter logo">
              </a>
              <a href="<?php echo get_field('instagram_url', 'options');?>" target="_blank" alt="company instagram link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFWSURBVHgB7ZbLbYNAEIYHFG48lA6cDpIS0kE6iFNBcAXQQeIKQgnpwCXE6YASzOMGgvxjQWQhWDyAzGU/aeXFOzuvnWEh0mg0K2OMCeR5/l5VlW8YxoZkHOu63ruuG9FUB9I03cLwF80Azu88z/ukKQ4g+h9E8UgCHMf515llWY0AYtu2H4bkTZUyqfEBHRvVutKBW3BHC8Npl8hPygDSesJ4K8vyns+c5/j7REvD0VxGhPmBn1Gcflc2SZKwkT8M7e9DlIG2oIqiiLpraLdzq0nfF6sXocgBRHc8bzLNbXfNsqxX/kUmfkmAtAv2GC9wIMCZs7GoNY7jCRvnQlqKviLCc1tsfSMc299FXANouxDt94TpN6KOefAc45nXaEmuiWDu/rG7IG4UBSQ3HlzqGEJ5G6LQfBTVB82A35KqbwJlBvgeZwVjUQwYjtG2u7EPEo1Gszp/Xw3nxIvJF/IAAAAASUVORK5CYII=" href="<?php echo get_field('instagram_url', 'options');?>" alt="instagram logo">
              </a>
            </div>
            <p class="mb-2"><b>Email Address:</b> <?php echo get_field('company_email_address', 'options');?></p>
            <p class="mb-2"><b>Phone:</b> <?php echo get_field('company_phone_number', 'options');?></p>
            <p class="mb-3"><b>Location:</b><br><?php echo get_field('company_address', 'options');?></p>
            <?php
              echo get_field('google_map_embed','options');
            ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Social Feed -->
    <?php signa_select_social(); ?>

  </article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>