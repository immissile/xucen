<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title><?php missile_title()?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" 
    href="<?php missile_css('animate')?>" type="text/css" />
  <link rel="stylesheet" 
    href="<?php bloginfo('stylesheet_url')?>" type="text/css" />
  <link rel="alternate" 
    type="application/rss+xml" 
    title="<?php bloginfo();?> RSS Feed" 
    href="" />
  <link rel="pingback" href="xmlrpc.php" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

</head>
<body id="" class="<?php body_class();?>">
  <div class="wrapper">
  <header>
    <div class="moon fadeInDown animated">
      <img src="<?php missile_img('moon.png')?>">
    </div>
    <div class="top-bar">
      <img src="<?php missile_img('angle.png');?>">
    </div>
    <?php missile_menu();?>
  </header>

  <div class="banner container">
    <?php header_images();?>
  </div>
