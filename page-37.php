<?php
  include('function.php');
  get_header();
  get_banner('photo');


  if(have_posts()){
    #get_template_part( 'loop', 'index' );
  }

  get_footer();
?>
