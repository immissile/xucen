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
  get_banner('index');

  // get index content
  get_template_part( 'index', 'content' );

  if(have_posts()){
    #get_template_part( 'loop', 'index' );
  }

  #echo bloginfo();
  #bloginfo('stylesheet_directory');

  get_footer();
?>
