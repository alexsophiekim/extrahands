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

<?php if(is_page('contact')): ?>
<div class="bg-white">
  <div class="branchSet d-flex pt-4">
  <?php if(has_nav_menu('branches_nav')): ?>
      <div class="col-lg-12">
          <?php
            wp_nav_menu(array( 'theme_location' => 'branches_nav',
                               'container' => '',
                               'menu_class' => 'branchesNav'

          ));
           ?>
      </div>
    </div>
  <?php endif; ?>

</div>

<div class="bg-white text-dark">
    <?php if(is_page('contact')): ?>
        <div class="container">
          <h2 class="text-center"><?php the_title(); ?></h2>
          <form class="contact" action="index.html" method="post">
            <div class="row">
              <div class="col-lg-6 col-sm-12">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" placeholder="Name">
                <label for="inputPhone">Phone</label>
                <input type="Number" class="form-control" placeholder="Phone">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="col-lg-6 col-sm-12">
                <label for="inputMessage">Message</label><br/>
                <textarea name="Message" rows="10" cols="40"></textarea>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center pb-5">
              <button type="submit" class="btn btn-warning my-4">Submit</button>
            </div>
          </form>

        </div>
    <?php endif; ?>
</div>


<?php endif; ?>

 <?php get_footer(); ?>
