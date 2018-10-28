<?php
function the_parenting_place_2018_customizer_register( $wp_customize ) {

    $wp_customize->add_section(
        'social_section',
            array(
            'priority' => 80,
            'title' => __('Social Info','the_parenting_place_2018'),
            'description' => 'Customize your Social Info',
            'panel' => 'theme_option'
        )
    );

    $wp_customize->add_setting(
        'facebook_textbox',
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '#',
        )
    );

    $wp_customize->add_control(
        'facebook_textbox',
        array(
            'label' => __('Facebook','the_parenting_place_2018'),
            'section' => 'social_section',
            'settings' => 'facebook_textbox',
            'type' => 'text',
            'default' =>'#'
        )
    );

    $wp_customize->add_setting(
        'twitter_textbox',
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '#',
        )
    );

    $wp_customize->add_control(
        'twitter_textbox',
        array(
            'label' => __('Twitter','the_parenting_place_2018'),
            'section' => 'social_section',
            'settings' => 'twitter_textbox',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'linkedin_textbox',
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'linkedin_textbox',
        array(
            'label' => __('Linkedin','the_parenting_place_2018'),
            'section' => 'social_section',
            'settings' => 'linkedin_textbox',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'pinterest_textbox',
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
        )
    );
    
    $wp_customize->add_control(
        'pinterest_textbox',
        array(
            'label' => __('Pinterest','the_parenting_place_2018'),
            'section' => 'social_section',
            'settings' => 'pinterest_textbox',
            'type' => 'text',
        )
    );
     
}
add_action( 'customize_register', 'the_parenting_place_2018_customizer_register' );