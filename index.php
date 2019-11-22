<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="topInfo d-flex justify-content-between px-3">
      <p class="text-light">0800 535 355 &nbsp;&nbsp;&nbsp;&nbsp;info@anextrapairofhands.co.nz</p>
      <button class="btn btn-info" type="button" name="button">Get a quote</button>
    </div>
    <?php if (has_nav_menu('top_nav')): ?>
   <nav class="navbar navbar-expand-md navbar-dark bg-blue d-flex" role="navigation">
        <button class="navbar-toggler toggleBtn" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
           <a class="navbar-brand" href="#">AN EXTRA PAIR OF HANDS</a>
             <?php
                 wp_nav_menu( array(
                     'theme_location'    => 'top_nav',
                     'depth'             => 2,
                     'container'         => 'div',
                     'container_class'   => 'collapse navbar-collapse',
                     'container_id'      => 'top_nav',
                     'menu_class'        => 'nav navbar-nav',
                     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                     'walker'            => new WP_Bootstrap_Navwalker(),
                 ) );
             ?>
             </div>
         </nav>
         <?php endif; ?>



    <?php wp_footer(); ?>
  </body>
</html>
