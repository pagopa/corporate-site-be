<?php

/*==========*/
/* AUTOLOAD */
/*==========*/
$autoload = require(__DIR__ . '/../../../../vendor/autoload.php');
$autoload->addPsr4('PagoPA\\', __DIR__ . '/core');

/*===========*/
/* BOOTSTRAP */
/*===========*/
add_action('after_setup_theme', '\PagoPA\Theme::init');

function add_file_types_to_uploads($file_types){
    $newFileTypes = [];
    $newFileTypes['svg'] = 'image/svg+xml';
    $new_filetypes['svgz'] = 'image/svg+xml';
    $newFileTypes['webp'] = 'image/webp';
    $file_types = array_merge($file_types, $newFileTypes);
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

add_filter('jpeg_quality', function($arg){ return 100; });