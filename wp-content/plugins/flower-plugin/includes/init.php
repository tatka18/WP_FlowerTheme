<?php

function flowerPluginInit()
{
    $labels = array(
        'name'                  => _x( 'Flower-Plugin', 'Post type general name', 'flower-plugin' ),
        'singular_name'         => _x( 'Flower-Plugins', 'Post type singular name', 'flower-plugin' ),
        'menu_name'             => _x( 'Flower-Plugins', 'Admin Menu text', 'flower-plugin' ),
        'name_admin_bar'        => _x( 'Flower-Plugins', 'Add New on Toolbar', 'flower-plugin' ),
        'add_new'               => __( 'Add New', 'flower-plugin' ),
        'add_new_item'          => __( 'Add New Flower-Plugins', 'flower-plugin' ),
        'new_item'              => __( 'New Flower-Plugins', 'flower-plugin' ),
        'edit_item'             => __( 'Edit Flower-Plugins', 'flower-plugin' ),
        'view_item'             => __( 'View Flower-Plugins', 'flower-plugin' ),
        'all_items'             => __( 'All Flower-Plugins', 'flower-plugin' ),
        'search_items'          => __( 'Search Flower-Plugins', 'flower-plugin' ),
        'parent_item_colon'     => __( 'Parent Flower-Plugins:', 'flower-plugin' ),
        'not_found'             => __( 'No Flower-Plugins found.', 'flower-plugin' ),
        'not_found_in_trash'    => __( 'No Flower-Plugins found in Trash.', 'flower-plugin' ),
        'featured_image'        => _x( 'Flower-Plugins Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'flower-plugin' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'flower-plugin' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'flower-plugin' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'flower-plugin' ),
        'archives'              => _x( 'Flower-Plugins archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'flower-plugin' ),
        'insert_into_item'      => _x( 'Insert into Flower_Plugins', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'flower-plugin' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Flower-Plugins', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'flower-plugin' ),
        'filter_items_list'     => _x( 'Filter Flower-Plugins list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'flower-plugin' ),
        'items_list_navigation' => _x( 'Flower-Plugins list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'flower-plugin' ),
        'items_list'            => _x( 'Flower-Plugins list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'flower-plugin' ),
    );

    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for flower-plugin',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'flower-plugin' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );

    register_post_type( 'flower-plugin', $args );
}
