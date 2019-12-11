<?php get_header(); ?>
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
                                           <div class="carousel-caption d-md-block">
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


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form class="contact" method="post">
          <a class="text-dark close" data-dismiss="modal" href="_blank"><i class="fas fa-times fa-lg"></i></a>
          <h1 class="text-dark text-center pt-5 bookFormTitle">BOOK NOW</h1>
          <p class="text-dark text-center px-4">Our administration centre covers all our service areas around the country. When you get in touch with our office team, you’re not contacting a call centre. You’ll receive relevant information immediately. They can help with a new enquiry, quote request, or check your existing booking.</p>
         <div class="row mx-2">
             <div class="col-12 pt-4 text-dark">
                 <label for="inputName">Location</label>
                 <select class="form-control">
                  <option>Wellignton</option>
                  <option>Kapiti Coast</option>
                  <option>Hutt Valley</option>
                  <option>Palmerstion North</option>
                  <option>Christchurch</option>
                  <option>Feilding</option>
                </select>
                <label for="inputName">Service</label>
                <select class="form-control">
                 <option>Home Cleaning</option>
                 <option>Gardening</option>
                 <option>Commercial Cleaning</option>
               </select>
               <label for="inputName">Option</label>
               <select class="form-control">
                <option>3 Bedroom / 2 Bathroom</option>
              </select>
             </div>
         </div>
        <div class="row mx-2">
          <div class="col-6 py-3 text-dark">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" placeholder="Name">
            <label for="inputPhone">Phone</label>
            <input type="Number" class="form-control" placeholder="Phone">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="col-6 py-5 text-dark">
            <label for="inputMessage">Message</label>
            <textarea name="Message" rows="7" cols="40" placeholder="message" class="w-100"></textarea>
          </div>
        </div>
        <div class="col-12 d-flex justify-content-center pb-5">
          <button type="submit" class="btn btn-warning my-4">Submit</button>
        </div>
      </form>
    </div>

  </div>
</div>

<?php get_footer(); ?>
