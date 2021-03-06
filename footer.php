
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

                     <div class="row text-dark ">
                         <div class="col">
                             <p class="text-dark"><?php echo get_theme_mod('extrahands_phone','0800535355'); ?></p>
                             <?php
                                $id= get_theme_mod('extrahands_footer_logo');
                                print_r(wp_get_attachment_image($id));
                              ?>
                         </div>
                     </div>
                </div>
            
        </div>
    </div>
  </footer>



  <div class="copyright bg-blue text-center">
    <p class="text-center mb-0"><?php echo get_theme_mod('extrahands_copyright_setting','Copyright © 2019 Create by Sophie Kim');?></p>
  </div>


<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/59f042e417.js" crossorigin="anonymous"></script>
</body>
</html>
