<?php wp_footer(); ?>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <div class="logo d-flex align-items-center">
          <span><?php echo get_bloginfo('name'); ?></span>
        </div>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis
          eu non diam phasellus.</p>
        <div class="social-links d-flex mt-4">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://www.linkedin.com/company/construct-technologies/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <?php
        wp_nav_menu(
          array(
            'menu' => 'footer',
            'container' => '',
            'theme_location' => 'footer',
            'items_wrap' => '<ul>%3$s</ul>'
          )
        );
        ?>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <?php
          $args = array(
            'post_type' => 'services',
            'orderby'    => 'date',
            'order'      => 'ASC',
          );
          $services = new WP_Query($args);
          while ($services->have_posts()) {
            $services->the_post();
          ?>
          <li><a href="#"><?php the_title(); ?></a></li>
          <?php }
          wp_reset_query();
          ?>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          Mangal Bazar, Lalitpur<br>
          <strong>Phone:</strong> +977 9803432632<br>
          <strong>Email:</strong> technologyconstruct@gmail.com<br>
        </p>

      </div>

    </div>
  </div>

  <div class="container mt-4">
    <div class="copyright">
      &copy; Copyright <strong><span><?php echo get_bloginfo('name'); ?></span></strong>. All Rights Reserved
    </div>
  </div>

</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

</body>

</html>