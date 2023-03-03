<?php

function flowerFilterPostContent($content)
{

    if (!is_singular('flower-plugin')) {
        return $content;
    }

    global $post, $wpdb;
    $flower_data = get_post_meta($post->ID, 'flower_data', true);

    $flowers_html = file_get_contents('recipe-template.php', true);
    $flowers_html = str_replace('RATE_I18N', __('Rating Of Flower', 'flower-plugin'), $flowers_html);
    $flowers_html = str_replace('RECIPE_ID', $post->ID, $flowers_html);
    $flowers_html = str_replace('RECIPE_RATING', $flower_data['rating'], $flowers_html);

    $user_IP = $_SERVER['REMOTE_ADDR'];


    $rating_count = $wpdb->get_var(
        "SELECT COUNT(*) FROM " . $wpdb->prefix . "flower_ratings WHERE recipe_id='" . $post->ID . "' AND user_ip='" . $user_IP ."'");


    if ($rating_count > 0){
        $flowers_html = str_replace('READONLY_PLACEHOLDER', 'data-rateit-READONLY="true"', $flowers_html
        );
    }else{
        $flowers_html = str_replace('READONLY_PLACEHOLDER', '', $flowers_html);
    }

    return $flowers_html . $content;
}