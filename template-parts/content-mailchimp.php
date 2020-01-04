<!-- Begin Mailchimp Signup Form -->
<!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->

<!-- Modal -->
<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div id="mc_embed_signup">
        <?php $newsletter_options = get_field('newsletter_options'); ?>
        <form action="<?php echo $newsletter_options['mailchimp_action_url']; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">

            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Subscribe</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="mc-field-group">
                <!-- <label for="mce-FNAME">First Name </label> -->
                <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
              </div>

              <div class="mc-field-group">
                <!-- <label for="mce-EMAIL">Email Address </label> -->
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
              </div>

              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    
              
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ee3cc551e70a3f5db1944a153_d03b5ead4d" tabindex="-1" value=""></div>
            </div>

            <!-- Footer -->
            <div class="modal-footer">
              <div class="clear">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-global btn-global-color">
              </div>
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Javascript & Validation -->
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[4]='PHONE';ftypes[4]='phone';fnames[6]='COMPANY';ftypes[6]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->