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
      <!-- <?php if (get_theme_mod('extrahands_phone') && (get_theme_mod('extrahands_email'))): ?> -->
          <p class="text-light pb-0 mb-0">
              <?php echo get_theme_mod('extrahands_phone'); ?> &nbsp;&nbsp;&nbsp;&nbsp;
              <?php echo get_theme_mod('extrahands_email'); ?>
          </p>
      <!-- <?php endif; ?> -->
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
