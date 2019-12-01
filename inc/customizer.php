<?php
  function mytheme_customize_register( $wp_customize){
    $wp_customize -> add_setting('extrahands_BGColour', array(
        'default' =>'#2F80ED',
        'transport' => 'refresh'
    ));
    $wp_customize -> add_control(new WP_customize_Color_Control($wp_customize, 'extrahands_BGColour', array(
      'label'   => __('Background Colour', 'extrahandsCustom'),
      'section' => 'colors',
      'setting' => 'extrahands_BGColour'
    )));
    $wp_customize -> add_setting('extrahands_textColour', array(
        'default' =>'#fff',
        'transport' => 'refresh'
    ));
    $wp_customize -> add_control(new WP_customize_Color_Control($wp_customize, 'extrahands_textColour', array(
      'label'   => __('Text Colour', 'extrahandsCustom'),
      'section' => 'colors',
      'setting' => 'extrahands_textColour'
    )));
    $wp_customize->add_setting( 'extrahands_barColour' , array(
      'default'   => '#0275D8',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'extrahands_barColourControl', array(
      'label'      => __( 'Top and Bottom Bar Colour', 'extrahandsCustom' ),
      'section'    => 'colors',
      'settings'   => 'extrahands_barColour',
    )));
    $wp_customize->add_section( 'extrahands_copyright' , array(
          'title'      => __('Copyright','extrahands'),
          'priority'   => 30,
    ));
    $wp_customize->add_setting('extrahands_copyright_setting', array(
        'default'        => 'Copyright © 2019 Create by Sophie Kim',
        'transport'      => 'refresh',
    ));
    $wp_customize->add_control('extrahands_copyright_control', array(
       'label'      => __('Copyright', 'extrahandsCustom'),
       'section'    => 'extrahands_copyright',
       'settings'   => 'extrahands_copyright_setting'
    ));

    $wp_customize->add_section('extrahands_header', array(
       'title'           => __('Company Info', 'extrahands'),
       'priority'        => 70
   ));
   $wp_customize->add_setting('extrahands_footer_logo', array(
       'transport'      => 'refresh'
   ));
   $wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'extrahands_footer_logo', array(
       'label'             => __('Footer Logo', 'extrahands'),
       'section'           => 'extrahands_header',
       'setting'           => 'extrahands_footer_logo',
       'height' => 80,
       'width' => 100,
       'flex_width ' => false,
       'flex_height ' => false,
   )));
   $wp_customize->add_setting('extrahands_phone', array(
       'default'        => '0800535355',
       'transport'      => 'refresh',
   ));
   $wp_customize->add_control('extrahands_phone_control', array(
      'label'      => __('Phone Number', 'extrahands'),
      'section'    => 'extrahands_header',
      'settings'   => 'extrahands_phone'
   ));
   $wp_customize->add_setting('extrahands_email', array(
       'default'        => 'info@anextrapairofhands.co.nz',
       'transport'      => 'refresh',
   ));
   $wp_customize->add_control('extrahands_email_control', array(
      'label'      => __('Email', 'extrahands'),
      'section'    => 'extrahands_header',
      'settings'   => 'extrahands_email'
   ));
    $wp_customize->add_setting('extrahands_main_intro', array(
        'default'        => 'Professional Cleaning and Gardening Company',
        'transport'      => 'refresh',
    ));
    $wp_customize->add_control('extrahands_main_intro_control', array(
       'label'      => __('Main Intro', 'extrahands'),
       'section'    => 'extrahands_header',
       'settings'   => 'extrahands_main_intro'
    ));
    $wp_customize->add_setting('extrahands_sub_intro', array(
        'default'        => 'WE TAKE CARE OF THE LITTLE THINGS',
        'transport'      => 'refresh',
    ) );
    $wp_customize->add_control('extrahands_sub_intro_control', array(
       'label'      => __('Sub Intro', 'extrahands'),
       'section'    => 'extrahands_header',
       'settings'   => 'extrahands_sub_intro'
    ));
    $wp_customize->add_setting('extrahands_booknow_checkbox', array(
        'default'        => true,
        'transport'      => 'refresh'
    ));
    $wp_customize->add_control('extrahands_booknow_checkbox_control', array(
      'label' => __( 'Booking button display', 'extrahands' ),
      'section'  => 'extrahands_header',
      'settings'   => 'extrahands_booknow_checkbox',
      'type'=> 'checkbox',
    ));
    $wp_customize->add_section('extrahands_testimonial', array(
           'title'            => __('Testimonial', 'extrahands'),
           'priority'         => 80,
    ));
        for ($i=1; $i <=3 ; $i++) {
            $wp_customize->add_setting('extrahands_testimonial_img_' .$i, array(
                   'transport'        => 'refresh',
                   'height'           => 250,
            ));
            $wp_customize->add_setting('extrahands_testimonial_text_' .$i, array(
                    'default'        => 'Testimonial'.$i,
                    'transport'      => 'refresh',
            ));
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'extrahands_testimonial_img_control'.$i, array(
                   'label'            => __('Slider Image #'.$i, 'extrahands'),
                   'section'          => 'extrahands_testimonial',
                   'settings'         => 'extrahands_testimonial_img_'.$i,
            )));
            $wp_customize->add_control('extrahands_testimonial_text_control'.$i, array(
                   'label'            => __('Slider Text #'.$i, 'extrahands'),
                   'section'          => 'extrahands_testimonial',
                   'settings'         => 'extrahands_testimonial_text_'.$i,
            ));
        }

  }

  add_action('customize_register', 'mytheme_customize_register');
    function mytheme_customize_css(){
      ?>
      <style type="text/css">
             body {
                 background-color: <?php echo get_theme_mod('extrahands_BGColour', '#2F80ED'); ?>;
                 color: <?php echo get_theme_mod('extrahands_textColour', '#fff');?>
             }
             .bg-blue{
                 background-color: <?php echo get_theme_mod('extrahands_barColour', '#0275D8'); ?> !important;
             }

         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');
