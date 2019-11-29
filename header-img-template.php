<?php
    /*
        Template Name: Header Image Template
        Template Post Type: page, post
    */
 ?>


<?php get_header(); ?>
<?php if(has_post_thumbnail()): ?>
    <div class="container-fluid p-0 center">
      <div class="post-image">
          <img class="wp-post-image" src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%; height:auto;">
      </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="content ">
  <div class="container">
    <h1><?php the_post(); ?></h1>
    <?php the_content(); ?>
  </div>
</div>

<div class="sub-info bg-white d-flex text-center">
  <div class="col-4 py-5">
      <i class="material-icons text-primary" style="font-size:60px;">brightness_high</i>
      <p class="text-primary sub-text-bold">Service Guarantee</p>
  </div>
  <div class="col-4 py-5">
      <i class="material-icons text-primary" style="font-size:60px;">flip_camera_android</i>
      <p class="text-primary sub-text-bold">Quality Monitoring</p>
  </div>
  <div class="col-4 py-5">
      <i class="material-icons text-primary" style="font-size:60px;">verified_user</i>
      <p class="text-primary sub-text-bold">Security Privacy</p>
  </div>
</div>


<div class="row d-flex text-center">
  <div class="col-4 bg-info py-5 px-4">
    <h4 class="text-uppercase pb-2">Cleaning Products</h4>
    <p class="text-align-left">Our cleaning products have all-natural ingredients which made exclusively for us so we know exactly what the ingredients are. All ingredients are chosen with our goal to be sustainable. In addition to this we have found that they are much healthier for our team to use, and leave a lovely smell in your home.</p>
  </div>
  <div class="col-4 bg-secondary py-5 px-4">
    <h4 class="text-uppercase pb-2">Waste Reduction</h4>
    <p class="text-align-left">At An Extra Pair of Hands, all packaging, incoming mail and outgoing mail has been reduced. Our administration team is working towards receiving all incoming mail electronically. This has reduced our waste paper considerably.</p>
  </div>
  <div class="col-4 bg-info py-5 px-4">
    <h4 class="text-uppercase pb-2">Ideas from our team</h4>
    <p class="text-align-left">Our team is always coming up with new ideas. We thought it would be great to offer a service where we set up a composting system in our client’s garden to recycle the green waste from our gardening work and maintain that for them. We would love to hear your sustainable ideas and other feedback.</p>
  </div>
</div>


 <?php get_footer(); ?>
