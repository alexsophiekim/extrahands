<?php
    /*
        Template Name: Service Template
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


<?php
    $args = array(
        'post_type' => 'item'
    );
    $allItems = new WP_Query($args);
 ?>

<?php if($allItems -> have_posts()): ?>

  <div class="content bg-white text-dark">
    <div class="container">
      <div class="row py-3">
         <?php while($allItems -> have_posts()): $allItems-> the_post(); ?>
           <div class="col col-lg-3 col-md-6 col-sm-12 d-flex py-2">
               <div class="bg-blue p-3 text-white shadow">
                   <h5 class="text-center text-warning font-weight-bold"><?php the_title(); ?></h5>
                   <div>
                       <?php if( !is_singular() ): ?>
                           <?php the_excerpt() ; ?>
                           <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                       <?php else: ?>
                           <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-warning float-right">Read More</a>
                       <?php endif; ?>
                   </div>

               </div>
              </div>
              <?php endwhile; ?>
          </div>
      </div>
  </div>
<?php endif; ?>


 <?php get_footer(); ?>
