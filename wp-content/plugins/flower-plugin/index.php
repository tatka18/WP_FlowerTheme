<?php
/*
 * Plugin Name: Flower Plugin
 * Description: Plugin For Flower
 * Version: 1.0
 * Author URI: yasik.com
 * Text Domain: flower-plugin
 */

if (!function_exists('add_action')) {
    echo "Hi there Im just a plugin";
    exit;
}

define('FLOWER_PLUGIN_URL', __FILE__);

include('includes/activate.php');
include('includes/init.php');
include('process/save-post.php');

include('process/filter-content.php');
include('includes/front/enqueue.php');
include('process/rate-recipe.php');

include('includes/shortcodes/auth-form.php');
include('process/create-account.php');
include('process/login.php');

//include('blocks/enqueue.php');
//

register_activation_hook(FLOWER_PLUGIN_URL, 'activatePlugin');
add_action('init', 'flowerPluginInit');
add_action('save_post', 'flowerSavePostAdmin', 10, 3);
add_filter('the_content', 'flowerFilterPostContent');
add_action('wp_enqueue_scripts', 'flowerEnqueueScripts', 100);
add_action('wp_ajax_r_rate_recipe', 'flowerRateRecipe');
add_action('wp_ajax_nopriv_r_rate_recipe', 'flowerRateRecipe');
//add_action('enqueue_block_editor_assets', 'enqueueBlockEditor');для отображения рейтинга в  админке

add_action('wp_ajax_nopriv_flower_create_account', 'flowerCreateAccount');
add_action('wp_ajax_nopriv_flower_user_login', 'flowerUserLogin');

add_shortcode('flowers_auth_form', 'flowersAuthFormShortcode');
