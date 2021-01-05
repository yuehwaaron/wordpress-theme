<?php

/**
 * Theme Name: Wordpress customizer settings
 * 
 */

 //WP_Customize_Control

function fn_customizer_settings($wp_customizer){
    //add a customize setting
    //include new section
    $wp_customizer -> add_section('header',array(
        'title' => __('Header Setting','Daily'),
        'priority' => 70
    ));

    $wp_customizer -> add_setting('header_image',array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer,'header_image',array(
        'label' => __('Header Image','Daily'),
        'section' => 'header'
    )));

    $wp_customizer -> add_setting('header_text_field',array(
        'capability' => 'edit_theme_options',
        'default' => 'My Blog'
    ));

    $wp_customizer -> add_control('header_text_control',array(
        'label' => __('Header Text','Daily'),
        'description' => 'Change Header Text',
        'section' => 'header',
        'settings' => 'header_text_field'
    ));

    $wp_customizer -> add_setting('header_description_field',array(
        'capability' => 'edit_theme_options',
        'default' => 'Welcome to My Blog'
    ));

    $wp_customizer -> add_control('header_description_control',array(
        'label' => __('Header Description','Daily'),
        'description' => 'Change Header Description',
        'section' => 'header',
        'settings' => 'header_description_field'
    ));

}

add_action('customize_register','fn_customizer_settings');


?>