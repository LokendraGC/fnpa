<?php 

//classic editor enable
add_filter('use_block_editor_for_post', '__return_false', 10);

// allowed to upload svg file
function upload_svg_files( $allowed ) {
    if ( !current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter( 'upload_mimes', 'upload_svg_files');


// remove default class and id from menu
add_filter('nav_menu_item_id', 'filter_menu_id');
function filter_menu_id(){
    return; 
}

// Contact Form 7: Disable automatic paragraph tags
add_filter('wpcf7_autop_or_not', '__return_false');


add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});