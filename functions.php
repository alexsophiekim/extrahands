<?php
function addLinks_extrahands() {
  wp_enqueue_style('bootstrapCSS_extrahands', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSS_extrahands', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.2', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJS_extrahands', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('customJS_extrahands', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.1', true);
    wp_enqueue_style('MaterialIcons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
};
add_action('wp_enqueue_scripts', 'addLinks_extrahands');

function addCustomMenus_extrahands(){
  add_theme_support('menus');
  register_nav_menus( array(
    'top_nav' => __('Top Menu'),
    'footer_nav' => __('Footer Menu'),
    'side_nav' => __('Side Menu')
  ));
}
add_action('after_setup_theme', 'addCustomMenus_extrahands');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function extrahands_logo() {
    $defaults = array(
        'height'        => 40,
        'width'         => 150,
        'flex-height'   => false,
        'flex-width'    => false
    );
  add_theme_support('custom-logo',$defaults);
};
add_action('after_setup_theme', 'extrahands_logo');

require( get_template_directory() . '/inc/customizer.php' );
require( get_template_directory() . '/inc/footerNav.php' );

 ?>
