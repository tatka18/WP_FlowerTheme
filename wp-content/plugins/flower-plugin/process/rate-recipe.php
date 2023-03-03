<?php

function flowerRateRecipe()
{

    global $wpdb;

    $output = ['status' => 1];
    $post_ID = absint($_POST['rid']);
    $rating = round($_POST['rating'], 1);
    $user_IP = $_SERVER['REMOTE_ADDR'];


    $rating_count = $wpdb->get_var(
        "SELECT COUNT(*) FROM " . $wpdb->prefix . "flower_ratings WHERE recipe_id='" . $post_ID . "' AND user_ip='" . $user_IP . "'");

    if ($rating_count > 0) {
        wp_send_json($output);
    }

    $wpdb->insert(
        $wpdb->prefix . 'flower_ratings',
        [
            'recipe_id' => $post_ID,
            'rating' => $rating,
            'user_ip' => $user_IP
        ],
        ['%d', '%f', '%s']
    );

    $flower_data = get_post_meta($post_ID, 'flower_data', true);
    $flower_data['rating_count']++;
    $flower_data['rating'] = round(
        $wpdb->get_var(
            "SELECT AVG('rating') FROM " . $wpdb->prefix . "flower_ratings WHERE recipe_id='" . $post_ID . "'"
        ), 1);

    update_post_meta($post_ID, 'flower_data', $flower_data);

    $output['status'] = 2;
    wp_send_json($output);

}