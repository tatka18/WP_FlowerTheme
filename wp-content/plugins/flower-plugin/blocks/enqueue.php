<?php

function enqueueBlockEditor()
{
    wp_register_script('yBlocksBundle',
        plugins_url('blocks/dist/bundle.js', FLOWER_PLUGIN_URL),
        ['wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor', 'wp-api'],
        filemtime(plugin_dir_path(FLOWER_PLUGIN_URL) . '/blocks/dist/bundle.js')
    );

    wp_enqueue_script('yBlocksBundle');
}
