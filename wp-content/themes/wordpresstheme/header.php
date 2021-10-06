<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  <?php wp_head(); ?>
</head>

<body <?php body_class('site'); ?>>

  <?php wp_body_open(); ?>




  <header class="site__header">
    <a href="<?php echo home_url('/'); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
    </a>



    <nav class="navbar navbar fixed-top navbar-light bg-light">
      <div class="container-fluid">

        <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

          <span class="navbar-toggler-icon"></span>
          <div class="collapse navbar-collapse" id="navbarNav">


            <ul class="navbar-nav">
              <?php
              $itemsArray = wp_get_nav_menu_items('Menu Principal');

              foreach ($itemsArray as $items) {
                echo ' <li class="nav-item">
      <a class = "nav-link active" aria-current="page" href="' . $items->url . '">' . $items->title . '
      </li>';
              }
              ?>
            </ul>
          </div>

  </header>