<?php
function socialCustomizer($wp_customize)
{
    $wp_customize->add_setting(
        'yInstagramHandle',
        [
            'default' => ''
        ]
    );

    $wp_customize->add_setting(
        'yFacebookHandle',
        [
            'default' => ''
        ]
    );

    $wp_customize->add_section(
        'ySocialSection',
        [
            'title' => __('Yasik Social Section', 'yasik'),
            'priority' => 30
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'yInstagramController',
            array(
                'label' => __('Instagram Field', 'yasik'),
                'section' => 'ySocialSection',
                'settings' => 'yInstagramHandle',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'yFacebookController',
            array(
                'label' => __('Facebook Field', 'yasik'),
                'section' => 'ySocialSection',
                'settings' => 'yFacebookHandle',
            )
        )
    );
}
