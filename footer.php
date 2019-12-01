
  <footer class="bg-light py-4">
    <div class="row d-flex">
    <?php if(has_nav_menu('service_nav')): ?>
        <div class="col">
            <?php
              wp_nav_menu(array( 'theme_location' => 'service_nav',
                                 'container' => '',
                                 'menu_class' => 'serviceNav'
            ));
             ?>
        </div>
    <?php endif; ?>
    <?php if(has_nav_menu('quick_nav')): ?>
        <div class="col">
            <?php
              wp_nav_menu(array( 'theme_location' => 'quick_nav',
                                 'container' => '',
                                 'menu_class' => 'quickNav'
            ));
             ?>
        </div>
    <?php endif; ?>
    <?php if(has_nav_menu('branches_nav')): ?>
        <div class="col">
            <?php
              wp_nav_menu(array( 'theme_location' => 'branches_nav',
                                 'container' => '',
                                 'menu_class' => 'branchesNav'
            ));
             ?>
        </div>
    <?php endif; ?>
    <?php if(has_nav_menu('company_nav')): ?>
        <div class="col">
            <?php
              wp_nav_menu(array( 'theme_location' => 'company_nav',
                                 'container' => '',
                                 'menu_class' => 'companyNav'
            ));
             ?>
        </div>
    <?php endif; ?>
    <?php if(has_nav_menu('contact_nav')): ?>
        <div class="col">
            <?php
              wp_nav_menu(array( 'theme_location' => 'contact_nav',
                                 'container' => '',
                                 'menu_class' => 'contactNav'
            ));
             ?>
        </div>
    <?php endif; ?>

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
