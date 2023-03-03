<?php

function flowerSavePostAdmin($post_id, $post, $update){
    $flower_data = get_post_meta($post_id, 'flower_data', true);
    $flower_data = empty($flower_data) ? [] : $flower_data;
    $flower_data['rating'] = isset($flower_data['rating']) ? absint($flower_data['rating']) : 0;
    $flower_data['rating_count'] = isset($flower_data['rating_count']) ? absint($flower_data['rating_count']) : 0;

    update_post_meta($post_id, 'flower_data', $flower_data);
}

