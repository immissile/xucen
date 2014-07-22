<?php
/**
 * template for xucen
 *
 * Author: missile
 *
 * @immissile
 */

  include('function.php');
  get_header();

  if(have_posts()){
    #get_template_part( 'loop', 'index' );
  }

  #echo bloginfo();
  #bloginfo('stylesheet_directory');

  get_footer();
?>
