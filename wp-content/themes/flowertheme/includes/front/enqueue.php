<?php

function yEnqueue(){
    $styleUri = get_theme_file_uri();
    $ver = Y_DEV_MODE ? time() : false;

//    wp_register_style('yHeader', $styleUri . '/assets/css/header-style.css', [], $ver);
    wp_register_style('yIcon', "https://cdn.linearicons.com/free/1.0.0/icon-font.min.css", [], $ver);
    wp_register_style('yStyle', $styleUri . '/assets/css/admin.css', [], $ver);
    wp_register_style('yGoogleFont', "https://fonts.googleapis.com/css2?family=Catamaran&display=swap", [], $ver);
    wp_register_style('yGoogleFontCaveat', "https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Lavishly+Yours&display=swap", [], $ver);
    wp_register_style('yMedia',$styleUri . '/assets/css/media.css', [], $ver, 'all and (max-width: 900px)');

    wp_enqueue_style('yIcon');
    wp_enqueue_style('yStyle');
    wp_enqueue_style('yGoogleFont');
    wp_enqueue_style('yGoogleFontCaveat');
    wp_enqueue_style('yMedia');

    wp_register_script('flowerPlugins', 'https://code.jquery.com/jquery-3.6.0.min.js', [], false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('flowerPlugins');

//    wp_register_script(
//        'flowers_main',
//        plugins_url('/assets/js/main.js', FLOWER_PLUGIN_URL),
//        ['jquery'],
//        '1.0.0',
//        true
//    );
//
//    wp_localize_script(
//        'flowers_main',
//        'flowers_obj',
//        [
//            'ajax_url' => admin_url('admin-ajax.php'),
//            'home_url' => home_url('/')
//        ]
//    );
//
//    wp_enqueue_script('flowers_main');
}