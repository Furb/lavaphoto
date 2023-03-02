<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>
    <?php wp_title(); ?>
  </title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />


</head>

<body>
  <div class="p-4">


      <header class="flex justify-between items-center py-6 inner_wrap">
      <a href="<?php echo get_home_url(); ?>"><h5>Lars V. Andersen</h5></a><!-- /.logo -->


      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'main-menu',
          'container' => 'false',
          'menu_class' => 'main_nav flex',

        )
      );
      ?>

   </header>

  