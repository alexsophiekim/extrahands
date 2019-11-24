<?php if(has_nav_menu('footer_nav')): ?>
  <footer class="bg-white">
    <div class="row">

        <?php
          wp_nav_menu(array( 'theme_location' => 'footer_nav',
                             'container' => '',
                             'menu_class' => 'footerNav'
        ));
         ?>

    </div>
  </footer>
<?php endif; ?>
<?php if (get_theme_mod('extrahands_copyright')): ?>
  <div class="copyright bg-blue text-center">
    <p class="text-center"><?php echo get_theme_mod('extrahands_copyright') ?></p>
  </div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
