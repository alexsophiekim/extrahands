<?php
    /*
        Template Name: Contact Template
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


<?php if(is_page('contact')): ?>
<div class="bg-white">
  <div class="btnSet d-flex justify-content-center pt-4">
  <?php if(has_nav_menu('branches_nav')): ?>
      <div class="col">
          <?php
            wp_nav_menu(array( 'theme_location' => 'branches_nav',
                               'container' => '',
                               'menu_class' => 'branchesNav'
          ));
           ?>
      </div>
    </div>
  <?php endif; ?>

    <button class="btn btn-outline-primary mx-2" type="button" name="button">Wellingtion</button>
    <button class="btn btn-outline-primary mx-2" type="button" name="button">Palmerston North</button>
    <button class="btn btn-outline-primary mx-2" type="button" name="button">Kapiti Coast</button>
    <button class="btn btn-outline-primary mx-2" type="button" name="button">Hutt Valley</button>
    <button class="btn btn-outline-primary mx-2" type="button" name="button">Christchurch</button>
    <button class="btn btn-outline-primary mx-2" type="button" name="button">Feilding</button>

</div>

<div class="container">
  <div class="row">
    <div class="col-8">
      <p>map</p>
    </div>
    <div class="col-4 bg-info">
      <p>Wellington</p>
      <p>04 589 3245</p>
      <p>Whitby<br/>Porirua<br/>Tawa<br/>Johnsonville<br/>Wellington CBD<br/>Wellington suburbs</p>
    </div>
  </div>
</div>

<div class="container">
  <h2 class="text-center"><?php the_title(); ?></h2>
  <form class="contact" action="index.html" method="post">
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

<?php endif; ?>

 <?php get_footer(); ?>
