<?php

function yWidgets()
{
    register_sidebar([
        'name' => __('Flowers Blog Sidebar', 'yasik'),
        'id' => 'sidebar-yasik',
        'description' => __('Yasik Sidebar', 'yasik'),
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}
