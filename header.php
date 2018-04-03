<!DOCTYPE HTML>
<html>
<head>
  <head>
  <meta charset="UTF-8" />
  <title>bHappy restaurant</title>

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=Yesteryear|Josefin+Sans|Robot" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <script href="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsiKiz9Fn_wm-XrMGNqGUhsjkpa81yPu0"></script>
  <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
    <header id="header">
      <div id="logo_box">
        <div class="logo_head">bHappy restaurant</div>
          <div class="social"><?php dynamic_sidebar( 'custom-widget-header' ); ?></div>
      </div>


      <nav id="head_menu">
              <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </nav>

    </header>
