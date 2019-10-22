<?php
  //vars
  $cta_1 = get_field('cta_1'); 
?>

<section class="py-80 bg-blue">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h3 class="h2 font-weight-bold mt-0 mb-4 mb-md-5"><?php echo $cta_1['call_to_action_text']; ?></h3>
        <a href="<?php echo $cta_1['call_to_action_button_link'];; ?>" class="btn blue"><?php echo $cta_1['call_to_action_button_text']; ?></a>
      </div>
    </div>
  </div>
</section>