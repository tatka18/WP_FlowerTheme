<?php

function yMiscCustomizerSection($wp_customize)
{

    $wp_customize->add_setting('yCart',
        ['default' => 'yes']);

    $wp_customize->add_setting('yFooterCopyrightText',
        ['default' => 'Copyrights &copy; 2022']);

    $wp_customize->add_setting('yFooterTosPage',
        ['default' => 0]);

    $wp_customize->add_setting('yFooterPrivacyPage',
        ['default' => 0]);

    $wp_customize->add_section('yMiscSection',
        ['title' => __('Yasik Misc Section', 'yasik'),
            'priority' => 30
        ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'yCartInput',
        [
            'label' => __('Show Cart Button In Header', 'yasik'),
            'section' => 'yMiscSection',
            'settings' => 'yCart',
            'type' => 'checkbox',
            'choices' => [
                'yes' => 'yes'
            ]
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'yFooterCopyrightTextInput',
        [
            'label' => __('Copyright Text', 'yasik'),
            'section' => 'yMiscSection',
            'settings' => 'yFooterCopyrightText'
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'yFooterTosInput',
        [
            'label' => __('Footer TOS Page', 'yasik'),
            'section' => 'yMiscSection',
            'settings' => 'yFooterTosPage',
            'type' => 'dropdown-pages',
        ]
    ));


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'yPrivacyPolicePageInput',
        [
            'label' => __('Footer Privacy Police Page', 'yasik'),
            'section' => 'yMiscSection',
            'settings' => 'yFooterPrivacyPage',
            'type' => 'dropdown-pages',
        ]
    ));
}
