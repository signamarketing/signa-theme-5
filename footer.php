<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start-theme
 */

?>
</div><!-- #content -->

<footer id="footer" class="site-footer bg-gray" role="contentinfo">

  <section>
    <div class="container">
      <div class="row justify-content-between py-4">
        <div class="col-md-4 col-lg-4 col-xl-3 mb-3 mb-md-0 text-center text-md-left">
          <h5 class="mt-0"><?php echo get_field('footer_column_1_title', 'options'); ?></h5>
          <p class="mb-2"><b>Email Address:</b> <?php echo get_field('company_email_address', 'options');?></p>
          <p class="mb-2"><b>Phone:</b> <?php echo get_field('company_phone_number', 'options');?></p>
          <p class="mb-3"><b>Location:</b><br><?php echo get_field('company_address', 'options');?></p>
        </div>

        <div class="col-md-4 col-lg-4 col-xl-3 mb-3 mb-md-0 text-center text-md-left" style="">
          <h5 class="mt-0">Navigation</h5>
          <?php echo wp_nav_menu( array('footer1','Footer Column 1')); ?>
        </div>

        <div class="col-md-4 col-lg-4 col-xl-3 mb-3 mb-md-0 text-center text-md-left">
          <h5 class="mt-0">Blog Posts</h5>
          <ul class="menu">
            <?php $the_query = new WP_Query( 'posts_per_page=4' );
              // Recent blog posts loop
              while ($the_query -> have_posts()) : $the_query -> the_post();
            ?>
            <li><a href="<?php the_permalink() ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            <?php 
              endwhile;
              wp_reset_postdata();
            ?>
            <li><a href="/blog">View All Blog Posts</a></li>
          </ul>
          <?php //echo wp_nav_menu( array('footer2','Footer Column 2')); ?>
        </div>

        <div class="col-md-4 col-lg-4 col-xl-3 mb-3 mb-md-0 text-center text-md-left">
          <h5 class="mt-0">Connect With Us</h5>
          <div class="social-links">
            <a href="<?php echo get_field('facebook_url', 'options');?>" target="_blank" alt="company facebook link">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABfSURBVHgB7dLBCYAwDEbhv07mZs7oBHWT2IOHoIIklorwPui5LyESAOAFM1vaq+ZolOPzC41ynvyLAG9WUlGSn7Y0SpoUdLdqt4mqoHDAg01BvQNWBf3vBnojgAACAOypPW9BFtUERwAAAABJRU5ErkJggg=="
                alt="facebook logo">
            </a>
            <a href="<?php echo get_field('twitter_url', 'options');?>" target="_blank" alt="company twitter link">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGASURBVHgB7VXdbYMwELYJPCLCBKUbdIOSCZpOkHSCqhu0EzQbpBtUnSDNBGk3YAMQ8MZfv0NBohI+mzzlwZ9kGenu/H2+Ox9CWFhYWFwz0jRdGvhEZVm+F0WRYnVYB6yYbLTDdsfFS47c87xTVVWrMAwTFTl8Dl3XRRPmDCup65riMxWPI9SI6GDXdU95nm8ngx1nqyAnLKWUvY9gwAlIRgftkcr9kNqRgHsmXkDcVxAEO85HckYQfmJb/wuQMsH23TTNLwQ84DtWxSP9IZd+VgDVl9K3WCw2TJpZ+L4vdT4uY8sg4Bnk2pegwI+Jk7IHKHVt276JC4HYo4mfNkXog1dkYYPaR2IGUP9b1fMdw9E5gPxGzATEfpiQGwlAt88qAwQnGF7GMVoBdBOIWOHgJ6FpLPhk8H00vb2RgDMypJVKEQk1eS8U5EbdP0D5DDF+1zRocDD9TPgfCmqOpnvRDZ3JWM5IwwiDKAZBP4yGl0C3PU/EI4h3lxBbWFhYDPgD/OK/KVCl97IAAAAASUVORK5CYII="
                alt="twitter logo">
            </a>
            <a href="<?php echo get_field('instagram_url', 'options');?>" target="_blank" alt="company instagram link">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFWSURBVHgB7ZbLbYNAEIYHFG48lA6cDpIS0kE6iFNBcAXQQeIKQgnpwCXE6YASzOMGgvxjQWQhWDyAzGU/aeXFOzuvnWEh0mg0K2OMCeR5/l5VlW8YxoZkHOu63ruuG9FUB9I03cLwF80Azu88z/ukKQ4g+h9E8UgCHMf515llWY0AYtu2H4bkTZUyqfEBHRvVutKBW3BHC8Npl8hPygDSesJ4K8vyns+c5/j7REvD0VxGhPmBn1Gcflc2SZKwkT8M7e9DlIG2oIqiiLpraLdzq0nfF6sXocgBRHc8bzLNbXfNsqxX/kUmfkmAtAv2GC9wIMCZs7GoNY7jCRvnQlqKviLCc1tsfSMc299FXANouxDt94TpN6KOefAc45nXaEmuiWDu/rG7IG4UBSQ3HlzqGEJ5G6LQfBTVB82A35KqbwJlBvgeZwVjUQwYjtG2u7EPEo1Gszp/Xw3nxIvJF/IAAAAASUVORK5CYII=" alt="instagram logo">
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="bg-footer-bottom">
    <div class="container">
      <div class="row align-items-center py-2">
        <div class="col-12 text-center">
          <p class="mb-0"><?php echo get_field('copyright_text', 'options'); ?></p>
        </div>
      </div>
    </div>
  </section>

</footer><!-- #colophon -->
</div><!-- #page -->


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/instafetch.js/1.5.0/instafetch.min.js"></script>
<script defer>
  //instagram setup
  var my_access_token = '<?php echo get_field('access_token', 'instagram'); ?>';
  instafetch.init({
    accessToken: my_access_token,
    target: 'instafetch',
    numOfPics: 4,
    caption: false
  });
</script>

<?php wp_footer(); ?>

<!-- CDN -->

<!-- Bootstrap JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <script>
  $(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function () {

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
</script> -->
<!-- <script type="application/ld+json">
<?php
$schema = get_field('schema','options');
?>
  {
    "@context": "http://schema.org",
    "@type": "<?php echo $schema['business_type']; ?>",
    "image": "<?php echo $schema['business_logo']; ?>",
    "name": "<?php echo $schema['business_name']; ?>",
    "telephone": "<?php echo $schema['phone_number']; ?>",
    "description": "<?php echo $schema['business_description']; ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "<?php echo $schema['city']; ?>",
      "addressRegion": "<?php echo $schema['state']; ?>",
      "postalCode": "<?php echo $schema['area_code']; ?>",
      "streetAddress": "<?php echo $schema['street_address']; ?>"
    }
    "priceRange": "<?php echo $schema['price_range']; ?>",

  }
</script> -->

<!-- 
add this to schema in future
    "openingHours": "Mo,Tu,We,Th,Fr 09:00-20:00",
    "sameAs": [
      "https://www.facebook.com/MUG.GilbertRoad/",
      "https://plus.google.com/118048240953855032469",
      "https://www.yelp.com/biz/mens-ultimate-grooming-mug-chandler",
      "https://www.instagram.com/mughaircuts.gilbert/"
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.3",
      "bestRating": "5",
      "worstRating": "1",
      "ratingCount": "53"
    }
 -->
</body>

</html>