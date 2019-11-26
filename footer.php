<?php if(has_nav_menu('footer_nav')): ?>
  <footer class="bg-secondary">
    <div class="row">
        <div class="col">
            <?php
              wp_nav_menu(array( 'theme_location' => 'footer_nav',
                                 'container' => '',
                                 'menu_class' => 'footerNav'
            ));
             ?>
        </div>

    </div>
  </footer>
<?php endif; ?>
<?php if (get_theme_mod('extrahands_copyright_setting')): ?>
  <div class="copyright bg-blue text-center">
    <p class="text-center mb-0"><?php echo get_theme_mod('extrahands_copyright_setting');?></p>
  </div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
