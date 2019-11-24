<?php get_header(); ?>
<div class="container text-center">
  <h1 class="display-4 pt-5 mt-5">Professional Cleaning and Gardening Company</h1>
  <p class="spacing pb-5">WE TAKE CARE OF THE LITTLE THINGS</p>
  <button class="btn btn-lg btn-warning my-5" type="button" name="button">BOOK NOW</button>
</div>

<div class="container mt-5">
  <section class="services">
    <h3 class="text-center py-3">Services</h3>
    <div class="row">
      <div class="col col-12 d-flex">
        <i class="material-icons svc-icons">home</i>
        <p class="px-5">Regular home cleaning is our most sought-after offering. We provide a spring-clean service to give your residence a thorough refresh for important occasions.</p>
        <button class="btn btn-light btn-sm svc-btn" type="button" name="button">Learn More</button>
      </div>
      <div class="col col-12 d-flex">
        <i class="material-icons svc-icons">local_florist</i>
        <p class="px-5">Our qualified gardening teams will keep your garden looking at its best throughout the seasons. Services include weeding, pruning, planting and spraying. </p>
        <button class="btn btn-light btn-sm svc-btn" type="button" name="button">Learn More</button>
      </div>
      <div class="col col-12 d-flex">
        <i class="material-icons svc-icons">business</i>
        <p class="px-5">Office cleaning is a reliable service provided by our security-checked team. If you have green areas around your office, our gardening team can take care of those.</p>
        <button class="btn btn-light btn-sm svc-btn" type="button" name="button">Learn More</button>
      </div>
    </div>
  </section>
</div>
<?php if (have_posts()): ?>
<div class="container bg-white">
  <section class="testimonial">
    <h3 class="text-center py-3 text-dark">Testimonial</h3>
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo esc_url(get_theme_mod('extrahands_contentImg_1')); ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo esc_url(get_theme_mod('extrahands_contentImg_2')); ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo esc_url(get_theme_mod('extrahands_contentImg_3')); ?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
</div>
<?php endif; ?>


    <?php if(has_nav_menu('footer_nav')): ?>
      <footer class="bg-white">
        <div class="row">

            <?php
              wp_nav_menu(array( 'theme_location' => 'footer_nav',
                                 'container' => '',
                                 'menu_class' => 'footerNav'
            ));
             ?>

        </div>
      </footer>
    <?php endif; ?>
    <?php if (get_theme_mod('extrahands_copyright')): ?>
      <div class="copyright bg-blue text-center">
        <p class="text-center"><?php echo get_theme_mod('extrahands_copyright') ?></p>
      </div>
    <?php endif; ?>

    <?php wp_footer(); ?>
  </body>
</html>
