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
      <div class="row justify-content-between py-4 text-white">
        <?php
          if( have_rows('footer_2','options') ):
            while( have_rows('footer_2','options') ): the_row();
        ?>
        <div class="col-md-8 mb-3 mb-md-0 text-center text-md-left">
          <h3 class="mt-0"><?php the_sub_field('footer_title','options'); ?></h3>
          <p><?php the_sub_field('footer_text','options'); ?></p>
            <a class="btn blue" href="<?php the_sub_field('footer_button_link','options'); ?>"><?php the_sub_field('footer_button_text','options'); ?></a>

        </div>
        <?php
            endwhile;
          endif;
        ?>
        <div class="col-md-4 mb-3 mb-md-0 text-center text-md-left">
          <h3 class="mt-0">Contact Us</h3>
          <p class="mb-2"><b>Email Address:</b> <?php echo get_field('company_email_address', 'options');?></p>
          <p class="mb-2"><b>Phone:</b> <?php echo get_field('company_phone_number', 'options');?></p>
          <p class="mb-3"><b>Location:</b><br><?php echo get_field('company_address', 'options');?></p>
        </div>

      </div>
    </div>
  </section>

  <section class="bg-footer-bottom">
    <div class="container">
      <div class="row align-items-center py-2">
        <div class="col-12 text-center">
          <p class="mb-0">Copyright © <?php echo date("Y"); ?> <?php echo get_field('copyright_text', 'options'); ?></p>
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

<?php if(is_single()): ?>
  <script type="text/javascript">
    // Progress bar when scrolling down blog single page
    if(document.querySelector(".progress-container")) {
      window.onscroll = function() {blogScroll()};
    }

    function blogScroll() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;

      document.querySelector(".progress-bar").style.width = scrolled + "%";
    }
  </script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/countable/3.0.1/Countable.min.js"></script>
  <script type="text/javascript">
    // Calculate reading time to element with ".reading-time"
    // where content is surrounded by ".blog-entry-content"
    // https://github.com/RadLikeWhoa/Countable
    var blogContent = document.querySelector('.blog-entry-content');
    if(blogContent) {
      Countable.on(blogContent, readTime);

      function readTime(counter) {
        var wpm = 200,
          estimatedRaw = counter.words / wpm,
          minutes = Math.round(estimatedRaw);
        
        var effectiveTime = (minutes < 1) ? "a couple of seconds" : minutes + " minute read";

        //console.log(effectiveTime);
        document.querySelector('.reading-time').append(effectiveTime);
      }
    }
  </script>
<?php endif; ?>

</body>

</html>