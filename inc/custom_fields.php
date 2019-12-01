<?php

    function add_custom_meta_boxes(){
        add_meta_box( 'serviceInfo', 'Service Title', 'serviceInfoCallback','service','normal','default', null);
        add_meta_box( 'serviceInfo', 'Service Info', 'serviceInfoCallback', 'service','normal',
        'default', null);
    }

    add_action('add_meta_boxes','add_custom_meta_boxes');

    function serviceInfoCallback($post){
        require_once get_template_directory() . '/inc/serviceInfo.php';
    }
    function save_serviceInfo_meta_boxes($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    $fields = [
        'service_title',
        'service_info',
    ];
    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
}
add_action('save_post','save_serviceInfo_meta_boxes');

 ?>

 <?php

     function add_quality_custom_meta_boxes(){
        add_meta_box( 'qualityInfo', 'Quality Info', 'qualityInfoCallback','quality','normal','default', null);
     }
     add_action('add_meta_boxes','add_quality_custom_meta_boxes');

     function qualityInfoCallback($post){
         require_once get_template_directory() . '/inc/qualityInfo.php';
     }
     function save_qualityInfo_meta_boxes($post_id){
     if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
         return;
     }
     $fields = [
         'quality_info',
     ];
     foreach ($fields as $field) {
         if (array_key_exists($field, $_POST)) {
             update_post_meta($post_id, $field, $_POST[$field]);
         }
     }
 }
 add_action('save_post','save_qualityInfo_meta_boxes');

  ?>
