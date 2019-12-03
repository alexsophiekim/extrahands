
  <footer class="bg-light py-4">
    <div class="row">
        <div class="footerAlign col-lg-12 d-flex">
            <?php if(has_nav_menu('service_nav')): ?>
                <div class="col">
                    <?php
                      wp_nav_menu(array( 'theme_location' => 'service_nav',
                                         'container' => '',
                                         'menu_class' => 'serviceNav footerNav'
                    ));
                     ?>
                </div>
            <?php endif; ?>
            <?php if(has_nav_menu('quick_nav')): ?>
                <div class="col">
                    <?php
                      wp_nav_menu(array( 'theme_location' => 'quick_nav',
                                         'container' => '',
                                         'menu_class' => 'quickNav footerNav'
                    ));
                     ?>
                </div>
            <?php endif; ?>
            <?php if(has_nav_menu('branches_nav')): ?>
                <div class="col">
                    <?php
                      wp_nav_menu(array( 'theme_location' => 'branches_nav',
                                         'container' => '',
                                         'menu_class' => 'branchesNav footerNav'
                    ));
                     ?>
                </div>
            <?php endif; ?>
            <?php if(has_nav_menu('company_nav')): ?>
                <div class="col">
                    <?php
                      wp_nav_menu(array( 'theme_location' => 'company_nav',
                                         'container' => '',
                                         'menu_class' => 'companyNav footerNav'
                    ));
                     ?>
                </div>
            <?php endif; ?>
            <?php if(has_nav_menu('contact_nav')): ?>
                <div class="col">
                    <?php
                      wp_nav_menu(array( 'theme_location' => 'contact_nav',
                                         'container' => '',
                                         'menu_class' => 'contactNav footerNav'
                    ));
                     ?>
                     <div class="row text-dark">
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
<?php if (get_theme_mod('extrahands_copyright_setting')): ?>
  <div class="copyright bg-blue text-center">
    <p class="text-center mb-0"><?php echo get_theme_mod('extrahands_copyright_setting');?></p>
  </div>
<?php endif; ?>

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/59f042e417.js" crossorigin="anonymous"></script>
</body>
</html>
