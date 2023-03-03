<?php

define('Y_DEV_MODE', true);

include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/custom-nav-walker.php'));
include(get_theme_file_path('/includes/widgets.php'));
include(get_theme_file_path('/includes/theme-customizer.php'));
include(get_theme_file_path('/includes/customizer/socialMediaCustomizer.php'));
include(get_theme_file_path('/includes/customizer/misc.php'));

//include(get_theme_file_path('/includes/auth-form .php'));
//include(get_theme_file_path('/includes/process/create-account.php'));
//include(get_theme_file_path('/includes/process/login.php'));


add_action('wp_enqueue_scripts', 'yEnqueue');
add_action('after_setup_theme', 'ySetupTheme');
add_action('widgets_init', 'yWidgets');
add_action('customize_register', 'yCustomizeRegister');

//add_action('wp_ajax_nopriv_flowers_auth_form', 'yFlowersAuthForm');
//add_action('wp_ajax_nopriv_flower_create_account', 'flowerCreateAccount');
//add_action('wp_ajax_nopriv_flower_user_login', 'yFlowerUserLogin');

function excerpt_length()
{
    return 20;
}

add_filter('excerpt_length', 'excerpt_length');
