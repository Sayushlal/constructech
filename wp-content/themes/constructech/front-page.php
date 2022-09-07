<?php get_header(); ?>

<section id="hero" class="hero">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Welcome to <span>Construct</span></h2>
        <p><?php echo get_bloginfo('description') ?></p>

      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="<?php echo get_template_directory_uri() ?>/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
      </div>
    </div>
  </div>

  <div class="icon-boxes position-relative">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-easel"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-gem"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-geo-alt"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-command"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

      </div>
    </div>
  </div>

  </div>
</section>
<!-- End Hero Section -->

<main id="main">

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>About Us</h2>
        <!--<p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>-->
      </div>

      <div class="row gy-4">
        <div class="col-lg-6">
          <!--<h3>Voluptatem dignissimos provident quasi corporis</h3>-->
          <img src="<?php echo get_template_directory_uri() ?>/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">

        </div>
        <div class="col-lg-6">
          <div class="content ps-0 ps-lg-5">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End About Us Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-out">

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <?php
          $args = array(
            'post_type' => 'clients',
            'orderby'    => 'date',
            'order'      => 'ASC',
          );
          $client = new WP_Query($args);
          while ($client->have_posts()) {
            $client->the_post();
          ?>
          <div class="swiper-slide"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-fluid" alt="<?php the_title(); ?>">
          </div>
          <?php }
          wp_reset_query();
          ?>
        </div>
      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Our Services Section ======= -->
  <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Services</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
      </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

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
        <div class="col-lg-3 col-md-6">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="<?php echo get_field('service_icon'); ?>"></i>
            </div>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <?php }
        wp_reset_query();
        ?>

      </div>

    </div>
  </section>
  <!-- End Our Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Testimonials</h2>
        <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <?php
          $args = array(
            'post_type' => 'testimonials',
            'orderby'    => 'date',
            'order'      => 'ASC',
          );
          $testimonials = new WP_Query($args);
          while ($testimonials->have_posts()) {
            $testimonials->the_post();
          ?>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <div class="d-flex align-items-center">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="testimonial-img flex-shrink-0"
                    alt="<?php the_title(); ?>">
                  <div>
                    <h3><?php the_title(); ?></h3>
                    <h4><?php echo get_field('designation'); ?></h4>
                    <div class="stars">
                      <?php echo str_repeat('<i <i class="bi bi-star-fill" aria-hidden="true"></i>', get_field('rating')); ?>
                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i><?php the_content(); ?><i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

          <?php }
          wp_reset_query();
          ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Portfolio</h2>
        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up"
        data-aos-delay="100">

        <div>
          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-website">Website</li>
          </ul><!-- End Portfolio Filters -->
        </div>

        <div class="row gy-4 portfolio-container">

          <?php
          $args = array(
            'post_type' => 'products',
            'orderby'    => 'date',
            'order'      => 'ASC',
          );
          $products = new WP_Query($args);
          while ($products->have_posts()) {
            $products->the_post();
          ?>
          <div class="col-xl-4 col-md-6 portfolio-item filter-<?php echo strtolower(get_field('product_type')); ?>">
            <div class="portfolio-wrap">
              <a href="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details"><?php the_title(); ?></a></h4>
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </div>
          <?php }
          wp_reset_query();
          ?>

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Team</h2>
        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
      </div>

      <div class="row gy-4">

        <?php
        $args = array(
          'post_type' => 'team',
          'orderby'    => 'date',
          'order'      => 'ASC',
        );
        $team = new WP_Query($args);
        while ($team->have_posts()) {
          $team->the_post();
        ?>
        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-fluid" alt="">
            <h4><?php the_title(); ?></h4>
            <span><?php echo get_field('designation'); ?></span>
            <div class="social">
              <?php if (get_field('twitter_link') !== '') { ?>
              <a href="<?php echo get_field('twitter_link') ?>"><i class="bi bi-twitter"></i></a>
              <?php } ?>
              <?php if (get_field('facebook_link') !== '') { ?>
              <a href="<?php echo get_field('facebook_link') ?>"><i class="bi bi-facebook"></i></a>
              <?php } ?>
              <?php if (get_field('insta_link') !== '') { ?>
              <a href="<?php echo get_field('insta_link') ?>"><i class="bi bi-instagram"></i></a>
              <?php } ?>
              <?php if (get_field('linkedin_link') !== '') { ?>
              <a href="<?php echo get_field('linkedin_link') ?>"><i class="bi bi-linkedin"></i></a>
              <?php } ?>
            </div>
          </div>
        </div>

        <?php }
        wp_reset_query();
        ?>

      </div>

    </div>
  </section><!-- End Our Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Contact</h2>
        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
      </div>

      <div class="row gx-lg-0 gy-4">

        <div class="col-lg-4">

          <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p><?php echo get_option('company_address', ''); ?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p><?php echo get_option('company_email', ''); ?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p><?php echo get_option('company_phone', ''); ?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h4>Open Hours:</h4>
                <p><?php echo get_option('opening_hours', ''); ?></p>
              </div>
            </div><!-- End Info Item -->
          </div>

        </div>

        <div class="col-lg-8">
          <?php Ninja_Forms()->display(2) ?>
          <!--<form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>-->
          <!-- End Contact Form -->

        </div>

      </div>
  </section><!-- End Contact Section -->
</main>

<?php get_footer(); ?>