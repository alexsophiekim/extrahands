<?php
function addLinks_extrahands() {
  wp_enqueue_style('bootstrapCSS_extrahands', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSS_extrahands', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.2', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJS_extrahands', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('fontawesome');
    wp_enqueue_script('customJS_extrahands', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.1', true);
    wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Amiko:400,600,700|Anton|Bangers&display=swap');
};
add_action('wp_enqueue_scripts', 'addLinks_extrahands');

add_theme_support('wp-block-styles');
add_theme_support('title_tag');
add_theme_support('post-thumbnails',  array( 'post', 'page') );
add_theme_support('post-formats', array('video', 'audio', 'image', 'gallery'));

function addCustomMenus_extrahands(){
  add_theme_support('menus');
  register_nav_menus( array(
    'top_nav' => __('Top Menu'),
    'service_nav' => __('Service Menu'),
    'quick_nav' => __('Quick Menu'),
    'branches_nav' => __('Branches Menu'),
    'company_nav' => __('Company Menu'),
    'contact_nav' => __('Contact Menu')
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

function add_service_post_types(){
    $args = array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
        ),
        'hierarchical' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-smiley',
        'delete_with_user' => false,
        'public' => true,
        'supports' => array('thumbnail','editor','title','excerpt')
    );
    register_post_type('service', $args);
}
add_action('init', 'add_service_post_types');

function add_quality_post_types(){
    $args = array(
        'labels' => array(
            'name' => 'Qualities',
            'singular_name' => 'Quality',
        ),
        'hierarchical' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-nametag',
        'delete_with_user' => false,
        'public' => true,
        'supports' => array('thumbnail','editor','title')
    );
    register_post_type('quality', $args);
}
add_action('init', 'add_quality_post_types');


function add_items_post_types(){
    $args = array(
        'labels' => array(
            'name' => 'Items',
            'singular_name' => 'Item',
        ),
        'hierarchical' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => false,
        'menu_position' =>8,
        'menu_icon' => 'dashicons-editor-ul',
        'delete_with_user' => false,
        'public' => true,
        'supports' => array('thumbnail','editor','title')
    );
    register_post_type('item', $args);
}
add_action('init', 'add_items_post_types');

function add_values_post_types(){
    $args = array(
        'labels' => array(
            'name' => 'Values',
            'singular_name' => 'Value',
        ),
        'hierarchical' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => false,
        'menu_position' =>8,
        'menu_icon' => 'dashicons-thumbs-up',
        'delete_with_user' => false,
        'public' => true,
        'supports' => array('thumbnail','editor','title')
    );
    register_post_type('value', $args);
}
add_action('init', 'add_values_post_types');



require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/custom_fields.php';


 ?>
