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
  <section class="services">
    <h3 class="text-center py-3">Services</h3>
    <div class="row">
     <?php while($allServices -> have_posts()): $allServices-> the_post(); ?>
      <div class="col col-12 d-flex">
            <?php the_content(); ?>
        <p class="px-5"><?php echo get_post_meta(get_the_ID(), 'service_info', true); ?></p>
        <button class="btn btn-outline-light btn-sm svc-btn" type="button" name="button" >
            <a class="learnMore" href="services">Learn More</a>
        </button>
      </div>
    <?php endwhile; ?>
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
        <div class="row">
          <div class="col-6">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" placeholder="Name">
            <label for="inputPhone">Phone</label>
            <input type="Number" class="form-control" placeholder="Phone">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="col-6">
            <label for="inputMessage">Message</label>
            <textarea name="Message" rows="10" cols="46"></textarea>
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
