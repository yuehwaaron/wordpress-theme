<?php

    // add customizers.php
    require_once('templates/helpers/customizer.php');

    function fn_theme_scripts () {
        wp_enqueue_style('fontawesome',get_template_directory_uri( ).'./vendor/css/all.min.css');
        wp_enqueue_style('custom-style',get_stylesheet_uri());

        //@media query responsive css file
        wp_enqueue_style('media_responsive',get_template_directory_uri().'/assets/css/_media.css');
    }
    add_action('wp_enqueue_scripts','fn_theme_scripts');

    //add features to wordpress
    function fn_theme_supports () {
        add_theme_support( 'title-tag' );
        add_theme_support('post-thumbnails');
        add_theme_support('html5',array('search-form'));
        add_theme_support('custom-logo');
    }
    add_action('after_setup_theme','fn_theme_supports');

    //register navigation menu
    function fn_nav_menu() {
        register_nav_menus( array(
            'primary-menu' => __('Primary Menu','text_domain'),
            'footer-menu' => __('Footer Menu','text_domain')
        ));
    }
    add_action('init','fn_nav_menu');

    function add_link_atts($atts){
        $atts['class'] = 'link text-light';
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_link_atts');

?>