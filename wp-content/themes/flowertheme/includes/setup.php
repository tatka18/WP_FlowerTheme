<?php

function ySetupTheme()
{
    add_theme_support( 'post-thumbnails' );
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    register_nav_menu('primary', __('Primary Menu', 'yasik'));
    register_nav_menu('secondary', __('Secondary Menu', 'yasik'));
    register_nav_menu('authentication', __('Authentication Menu', 'yasik'));

    if (function_exists('quads_register_ad')) {
        quads_register_ad(array('location' => 'yasik_custom', 'description' => 'Yasik Custom position'));
    }
}
