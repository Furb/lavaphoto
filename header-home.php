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




      <header class="flex justify-between items-center py-6 bg-dark text-white inner_wrap">
      <a href="<?php echo get_home_url(); ?>" class="w-8"><img src="/wp-content/uploads/2023/03/logo.svg" alt=""></a><!-- /.logo -->


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

  