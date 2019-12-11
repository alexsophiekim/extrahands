<?php get_header(); ?>

        <?php if( have_posts() ): the_post(); ?>
            <div class="container">
                <?php while( have_posts() ): the_post(); ?>
                        <h4 class="text-dark text-center"><?php the_title(); ?></h4>
                        <p class="text-dark text-center"><?php the_excerpt(); ?></p>
                <?php endwhile; ?>
            </div>
        <?php elseif( get_theme_mod('extrahands_main_intro')||get_theme_mod('extrahands_sub_intro')||get_theme_mod('extrahands_booknow_checkbox')): ?>

            <div class="container text-center">
                <?php if(get_theme_mod('extrahands_main_intro')): ?>
                    <h1 class="display-4 pt-5 mt-5"><?php echo get_theme_mod('extrahands_main_intro'); ?></h1>
                <?php endif; ?>
                <?php if(get_theme_mod('extrahands_sub_intro')): ?>
                    <p class="spacing pb-5"><?php echo get_theme_mod('extrahands_sub_intro'); ?></p>
                <?php endif; ?>
                <?php if (get_theme_mod('extrahands_booknow_checkbox')): ?>
                  <button class="btn btn-lg btn-warning my-5 booknowBtn" type="button" name="button" data-toggle="modal" data-target="#myModal">BOOK NOW</button>
                <?php endif; ?>
            </div>

        <?php endif; ?>


<div class="container text-center">
    <?php if(get_theme_mod('extrahands_main_intro')): ?>
        <h1 class="display-4 pt-5 mt-5"><?php echo get_theme_mod('extrahands_main_intro'); ?></h1>
    <?php endif; ?>
    <?php if(get_theme_mod('extrahands_sub_intro')): ?>
        <p class="spacing pb-5"><?php echo get_theme_mod('extrahands_sub_intro'); ?></p>
    <?php endif; ?>
    <?php if (get_theme_mod('extrahands_booknow_checkbox')): ?>
      <button class="btn btn-lg btn-warning my-5 booknowBtn" type="button" name="button" data-toggle="modal" data-target="#myModal">BOOK NOW</button>
    <?php endif; ?>
</div>

<?php
    $args = array(
        'post_type' => 'service'
    );
    $allServices = new WP_Query($args);
 ?>

<?php if($allServices -> have_posts()): ?>
<div class="container mt-5">
  <section class="services mb-4">
    <h3 class="text-center py-3">Services</h3>
    <div class="row">
     <?php while($allServices -> have_posts()): $allServices-> the_post(); ?>
      <div class="col col-12 d-flex serviceAlign">
        <?php the_content(); ?>
        <p class="px-5"><?php echo get_post_meta(get_the_ID(), 'service_info', true); ?></p>
        <button class="btn btn-outline-warning btn-sm svc-btn" type="button" name="button">
            <a class="learnMore" href="index.php/services">Learn More</a>
        </button>
      </div>
    <?php endwhile; ?>
    </div>
  </section>
</div>
<?php endif; ?>

<?php
for ($i=1; $i <= 5 ; $i++) {
    if((get_theme_mod('extrahands_testimonial_img_'.$i))||(get_theme_mod('extrahands_testimonial_text_'.$i))){
        $firstSlide = $i;
        break;
    }
}
?>

<?php if((get_theme_mod('extrahands_testimonial_img_'.$i)) ||(get_theme_mod('extrahands_testimonial_text_'.$i))): ?>
  <div class="bg-white">
    <section class="testimonial">
      <h3 class="text-center py-3 text-dark">Testimonial</h3>
      <div class="row m-0">

          <?php if(isset($firstSlide)): ?>
              <div class="container">
                  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <?php for ($i=1; $i <= 5 ; $i++) : ?>
                              <?php if(get_theme_mod('extrahands_testimonial_img_'.$i)): ?>
                            <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i-1; ?>" class="<?php if($firstSlide === $i){ echo 'active';} ?>"></li>
                          <?php endif; ?>
                          <?php endfor; ?>
                      </ol>
                         <?php if(isset($firstSlide)): ?>
                             <div class="carousel-inner">
                                <?php for ($i=1; $i <= 5 ; $i++): ?>
                                    <?php if(get_theme_mod('extrahands_testimonial_img_'.$i)): ?>
                                       <div class="carousel-item <?php if($firstSlide === $i){ echo 'active';} ?>">
                                           <img src="<?php echo get_theme_mod( 'extrahands_testimonial_img_' . $i ); ?>" class="d-block carouselImg mx-auto" alt="testimonialImg">
                                           <div class="carousel-caption d-none d-md-block">
                                             <p class="carouselText text-dark font-weight-bold"><?php echo get_theme_mod('extrahands_testimonial_text_' .$i); ?></p>
                                         </div>
                                       </div>
                                    <?php endif; ?>
                                <?php endfor; ?>
                             </div>
                         <?php endif; ?>

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
      <?php endif; ?>
      </div>
    </section>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
