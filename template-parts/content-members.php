<?php
//vars
?>


<section class=" team-members">
  <div class="container">
    <div class="row">
    <?php
    //Repeater
        if ( have_rows( 'team_members' ) ) : 
          while ( have_rows( 'team_members' ) ) : the_row();
    ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="team-member-wrapper">
          <img src="<?php echo the_sub_field('image'); ?>" alt="">
          <div class="team-member-title-wrapper">
            <p class="mb-0"><?php echo the_sub_field('name'); ?></p>
            <span><?php echo the_sub_field('job_title'); ?></span>
          </div>
        </div>
      </div>
      <?php      
          endwhile;
        endif;
      ?>
    </div>
  </div>
</section>