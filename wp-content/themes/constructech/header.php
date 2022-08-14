<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Construct Technologies PVT. LTD.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri() ?>/img/favicon.png" rel="icon">

  <!--<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <?php wp_head(); ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">technologyconstruct@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+977 9803432632</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <!--<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>-->
        <!--<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>-->
        <!--<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>-->
        <a href="https://www.linkedin.com/company/construct-technologies/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Construct Technologies logo">
        <h1><?php echo get_bloginfo('name'); ?></h1>
      </a>

      <!-- .navbar -->
      <nav id="navbar" class="navbar">
        <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul>%3$s</ul>'
          )
        );
        ?>
      </nav>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header -->