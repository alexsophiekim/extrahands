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
    // $wp_customize->add_setting( 'extrahands_headerFooterColour' , array(
    //   'default'   => '#0275D8',
    //   'transport' => 'refresh',
    // ));
    // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'extrahands_headerfooterColourControl', array(
    //   'label'      => __( 'Header and Footer Colour', 'extrahandsCustom' ),
    //   'section'    => 'colors',
    //   'settings'   => 'extrahands_footerColour',
    // )));
    $wp_customize->add_section( 'extrahands_copyright' , array(
          'title'      => __('copyright','extrahandsCustom'),
          'priority'   => 30,
    ));
    $wp_customize->add_setting('extrahands_theme_copyright', array(
        'default'        => 'Copyright © 2019 Create by Sophie Kim',
        'transport'      => 'refresh',
    ));
    $wp_customize->add_control('extrahands_copyright', array(
       'label'      => __('copyright', 'extrahandsCustom'),
       'section'    => 'extrahands_copyright',
       'settings'   => 'extrahands_theme_copyright'
    ));
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
                 background-color: <?php echo get_theme_mod('extrahands_headerFooterColour', '#0275D8'); ?> !important;
             }

         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');
