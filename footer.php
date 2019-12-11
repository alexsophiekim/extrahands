<?php if(has_nav_menu('footer_nav')||get_theme_mod('extrahands_phone')||get_theme_mod('extrahands_footer_logo')): ?>
  <footer class="bg-light p-4">
    <div class="row">
        <div class="footerAlign col-lg-12 d-flex text-center nobull">
            <?php if(has_nav_menu('footer_nav')): ?>
                <div class="col">
                    <?php
                      wp_nav_menu(array( 'theme_location' => 'footer_nav',
                                         'container' => '',
                                         'menu_class' => 'footerNav'
                    ));
                     ?>
                </div>
            <?php endif; ?>
            <?php if(get_theme_mod('extrahands_phone')||get_theme_mod('extrahands_footer_logo')): ?>
                     <div class="row text-dark ">
                         <div class="col">
                             <p class="text-dark"><?php echo get_theme_mod('extrahands_phone'); ?></p>
                             <?php
                                $id= get_theme_mod('extrahands_footer_logo');
                                print_r(wp_get_attachment_image($id));
                              ?>
                         </div>
                     </div>
                </div>
            <?php endif; ?>
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
<script src="https://kit.fontawesome.com/59f042e417.js" crossorigin="anonymous"></script>
</body>
</html>
