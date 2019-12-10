<?php
    /*
        Template Name: Contact Template
        Template Post Type: page, post
    */
 ?>

<?php get_header(); ?>

<?php if(has_post_thumbnail()): ?>
    <div class="container-fluid p-0 center bg-white text-dark">
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

<div class="content">
  <div class="container">
    <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>



 <?php get_footer(); ?>
