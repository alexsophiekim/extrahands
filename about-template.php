<?php
    /*
        Template Name: About Template
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
    <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>



  <div class="sub-info bg-white d-flex text-center">
    <div class="col-4 py-5">
      <?php if(get_post('service-guarantee')): ?>

      <?php the_content(); ?>
      <h4 class="text-primary sub-text-bold"><?php the_title(); ?></h4>
      <?php endif; ?>
    </div>
  </div>

<div class="sub-info bg-white d-flex text-center">
  <?php
      $args = array(
          'post_type' => 'quality'
      );
      $allQualities = new WP_Query($args);
   ?>

  <?php if($allQualities -> have_posts()): ?>
    <?php while($allQualities -> have_posts()): $allQualities-> the_post(); ?>
  <div class="col-4 py-5">
      <?php the_content(); ?>
      <p class="text-primary sub-text-bold"><?php the_title(); ?></p>
  </div>
<?php endwhile; ?>
<?php endif; ?>
</div>


<div class="row d-flex text-center">
  <?php
      $args = array(
          'post_type' => 'quality'
      );
      $allQualities = new WP_Query($args);
   ?>

   <?php if ($allQualities -> have_posts()): ?>
     <?php while($allQualities -> have_posts()): $allQualities-> the_post(); ?>
  <div class="col-4 bg-info py-5 px-4">
    <h4 class="text-uppercase pb-2"><?php the_title(); ?></h4>
    <p class="text-align-left"><?php echo get_post_meta(get_the_ID(), 'quality_info', true); ?></p>
  </div>
<?php endwhile; ?>
<?php endif; ?>
</div>


 <?php get_footer(); ?>
