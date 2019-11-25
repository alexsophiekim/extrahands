<?php get_header(); ?>
<div class="container text-center">
    <?php if(get_theme_mod('extrahands_main_intro')): ?>
        <h1 class="display-4 pt-5 mt-5"><?php echo get_theme_mod('extrahands_main_intro'); ?></h1>
    <?php endif; ?>
    <?php if(get_theme_mod('extrahands_sub_intro')): ?>
        <p class="spacing pb-5"><?php echo get_theme_mod('extrahands_sub_intro'); ?></p>
    <?php endif; ?>
  <button class="btn btn-lg btn-warning my-5" type="button" name="button">BOOK NOW</button>
</div>
<?php if(has_nav_menu('side_nav')): ?>
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
<?php endif; ?>

<div class="bg-white">
  <section class="testimonial">
    <h3 class="text-center py-3 text-dark">Testimonial</h3>
    <div class="row">
        <?php
        for ($i=1; $i <= 3 ; $i++) {
            if((get_theme_mod('extrahands_testimonial_img_'.$i)) ||(get_theme_mod('extrahands_testimonial_text_'.$i))){
                $firstSlide = $i;
                break;
            }
        }
        ?>
        <?php if(isset($firstSlide)): ?>
            <div class="container">
                <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                    <div class="carousel-inner">
                        <?php for ($i=1; $i <= 3 ; $i++) :?>
                            <?php if(get_theme_mod('extrahands_testimonial_img_'.$i)):?>
                                <div class="carousel-item <?php if($firstSlide === $i){echo 'active';} ?>">
                                    <img src="<?php echo get_theme_mod( 'extrahands_testimonial_img_' . $i ); ?>" class="d-block w-100" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                      <p><?php echo get_theme_mod('extrahands_testimonial_text_'.$i); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
  </section>
</div>


<?php get_footer(); ?>
