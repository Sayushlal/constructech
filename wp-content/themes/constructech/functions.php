<?php
function constructech_setup()
{
  //Google Fonts
  //wp_enqueue_style('google-fonts-googleapis', 'https://fonts.googleapis.com', NULL, '', 'all');
  //wp_enqueue_style('google-fonts-gstatic', 'https://fonts.gstatic.com', NULL, '', 'all');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap', NULL, '1', 'all');

  ////Vendor CSS Files
  wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'), NULL, '5.2.0', 'all');
  wp_enqueue_style('bootstrap-icons', get_theme_file_uri('/assets/vendor/bootstrap-icons/bootstrap-icons.css'), NULL, '1.0', 'all');
  wp_enqueue_style('aos', get_theme_file_uri('/assets/vendor/aos/aos.css'), NULL, '1.0', 'all');
  wp_enqueue_style('glightbox', get_theme_file_uri('/assets/vendor/glightbox/css/glightbox.min.css'), NULL, '1.0', 'all');
  wp_enqueue_style('swiper', get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.css'), NULL, '1.0', 'all');

  ////Template Main CSS File
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, '1.0', 'all');

  //// Vendor JS Files
  wp_enqueue_script('bootstrap', get_theme_file_uri("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), NULL, '1', true);
  wp_enqueue_script('aos', get_theme_file_uri("assets/vendor/aos/aos.js"), NULL, '1', true);
  wp_enqueue_script('glightbox', get_theme_file_uri("assets/vendor/glightbox/js/glightbox.min.js"), NULL, '1', true);
  wp_enqueue_script('purecounter', get_theme_file_uri("assets/vendor/purecounter/purecounter_vanilla.js"), NULL, '1', true);
  wp_enqueue_script('swiper', get_theme_file_uri("assets/vendor/swiper/swiper-bundle.min.js"), NULL, '1', true);
  wp_enqueue_script('isotope', get_theme_file_uri("assets/vendor/isotope-layout/isotope.pkgd.min.js"), NULL, '1', true);
  wp_enqueue_script('validate', get_theme_file_uri("assets/vendor/php-email-form/validate.js"), NULL, '1', true);
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'constructech_setup');

function constructech_init()
{
  add_theme_support("post-thumbnails");
  add_theme_support("title-tag");
  add_theme_support("custom-logo");
}

add_action('after_setup_theme', 'constructech_init');

function constructech_menus()
{
  $locations = array(
    'primary' => "Top Menu",
    'footer' => "Footer Menu"
  );

  register_nav_menus($locations);
}

add_action('init', 'constructech_menus');