<?php
    /*
        Template Name: Card Template
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

<div class="content bg-white text-dark">
  <div class="container">
    <div class="row py-3">
      <?php if (have_posts()): ?>
         <?php while(have_posts()): the_post(); ?>
           <div class="col col-lg-3 col-md-5 col-sm-12 m-1">
              <div class="card bg-transparent" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo the_title(); ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo the_title(); ?></h6>
                  <p class="card-text"><?php the_excerpt(); ?></p>
                  <a class="btn btn-light" href="<?php the_permalink(); ?>" class="card-link">Learn More</a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </div>
</div>


 <?php get_footer(); ?>
