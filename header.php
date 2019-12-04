<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo get_bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="bg-blue topbar d-flex justify-content-between align-items-center px-3 sticky-top">
      <?php if (get_theme_mod('extrahands_phone') && (get_theme_mod('extrahands_email'))): ?>
          <p class="text-light pb-0 mb-0">
              <?php echo get_theme_mod('extrahands_phone'); ?> &nbsp;&nbsp;&nbsp;&nbsp;
              <?php echo get_theme_mod('extrahands_email'); ?>
          </p>
      <?php endif; ?>
    <button class="quoteBtn my-1 px-3" data-toggle="modal" data-target="#myModal">Get a quote</button>
  </div>
  <?php if (has_nav_menu('top_nav')): ?>
    <nav class="navbar navbar-expand-md navbar-dark d-flex" role="navigation">
      <button class="navbar-toggler toggleBtn" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php if(has_custom_logo()): ?>
          <?php  the_custom_logo('extrahands_logo'); ?>
      <?php  else:  ?>
        <a class="navbar-brand" href=" <?php echo get_option("siteurl"); ?> "><?php echo get_bloginfo('name'); ?></a>
     <?php endif;  ?>
      <?php
          wp_nav_menu( array(
            'theme_location'    => 'top_nav',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse rightNav',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ));
      ?>
      </div>
    </nav>
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
