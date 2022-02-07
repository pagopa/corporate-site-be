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

function add_file_types_to_uploads($file_types) {
    $newFileTypes = [];
    $newFileTypes['svg'] = 'image/svg+xml';
    $new_filetypes['svgz'] = 'image/svg+xml';
    $newFileTypes['webp'] = 'image/webp';
    $file_types = array_merge($file_types, $newFileTypes);
    return $file_types;
}

add_action('upload_mimes', 'add_file_types_to_uploads');

add_filter('jpeg_quality', function ($arg) { return 100; });

add_filter('acf/fields/wysiwyg/toolbars', 'my_toolbars');
function my_toolbars($toolbars) {
    array_unshift($toolbars['Basic'][1], 'removeformat');
    array_unshift($toolbars['Basic'][1], 'hr');
    array_unshift($toolbars['Basic'][1], 'formatselect');
    return $toolbars;
}

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
    echo '<style>
    .acf-fields.-border {
      background: transparent !important;
    }
    .acf-flexible-content .layout {
      margin: 50px 0 0 !important;
      border: 1px solid #506375 !important;
      border-radius: 6px;
    }
    .acf-flexible-content .layout .acf-fc-layout-order {
      width: 40px !important;
      background: #506375 !important;
      color: #FFF !important;
      font-weight: 700;
    }
    </style>';
}

function hide_menu() {
    remove_menu_page( 'edit-comments.php' ); //Comments
}
add_action('admin_head', 'hide_menu');

add_filter('acf/settings/save_json', function (): string {
    return get_stylesheet_directory().'/core/fields';
}, 10000);
add_filter('acf/settings/load_json', function (array $paths): array {
    return array_merge($paths, [
        get_stylesheet_directory().'/core/fields'
    ]);
}, 10000);

function custom_menu_locations() {
    register_nav_menus(
        array(
            'intro-menu-1' => __( 'Intro Menu 1' ),
            'intro-menu-2' => __( 'Intro Menu 2' ),
            'intro-menu-3' => __( 'Intro Menu 3' ),
            'intro-menu-4' => __( 'Intro Menu 4' ),
            'intro-menu-5' => __( 'Intro Menu 5' )
        )
    );
}
add_action( 'init', 'custom_menu_locations' );