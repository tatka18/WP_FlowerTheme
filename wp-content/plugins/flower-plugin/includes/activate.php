<?php

function activatePlugin()
{
    // 5.8 < 5.0
    if ( version_compare( get_bloginfo( 'version' ), '5.0', '<' ) ) {
        wp_die( __( "You must update WordPress to use this plugin.", 'flower-plugin' ) );
    }
}
