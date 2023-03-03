<?php

function flowerEnqueueScripts()
{

    wp_register_style('flower_rateit', plugins_url('/assets/rateit/rateit.css', FLOWER_PLUGIN_URL));
    wp_enqueue_style('flower_rateit');

    wp_register_script(
        'flower_rateit',
        plugins_url('/assets/rateit/jquery.rateit.min.js', FLOWER_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );

    wp_register_script(
        'flowers_main',
        plugins_url('/assets/js/main.js', FLOWER_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );


    wp_localize_script(
        'flowers_main',
        'flowers_obj',
        [
            'ajax_url' => admin_url('admin-ajax.php'),
            'home_url' => home_url('/')
        ]
    );

    wp_enqueue_script('flower_rateit');
    wp_enqueue_script('flowers_main');
}

