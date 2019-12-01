<?php get_header(); ?>
<div class="container text-center">
    <?php if(get_theme_mod('extrahands_main_intro')): ?>
        <h1 class="display-4 pt-5 mt-5"><?php echo get_theme_mod('extrahands_main_intro'); ?></h1>
    <?php endif; ?>
    <?php if(get_theme_mod('extrahands_sub_intro')): ?>
        <p class="spacing pb-5"><?php echo get_theme_mod('extrahands_sub_intro'); ?></p>
    <?php endif; ?>
    <?php if (get_theme_mod('extrahands_booknow_checkbox')): ?>
      <button class="btn btn-lg btn-warning my-5 booknowBtn" type="button" name="button">BOOK NOW</button>
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
        <button class="btn btn-outline-light btn-sm svc-btn" type="button" name="button">
            <a class="learnMore" href="<?php the_permalink(); ?>">Learn More</a>
        </button>
      </div>
    <?php endwhile; ?>
    </div>
  </section>
</div>
<?php endif; ?>



<?php get_footer(); ?>
