<?php

// For more information on how to use this template, go to https://www.doitwithwp.com/putting-things-where-they-belong/

function load_parent_theme_css() {
    wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'load_parent_theme_css', 11 );


function load_child_theme_css() {
    wp_enqueue_style(
        'child-theme',
        get_stylesheet_directory_uri() . '/css/style.css',
        array(),
        filemtime( get_stylesheet_directory() . '/css/style.css' )
    );
}

add_action( 'wp_enqueue_scripts', 'load_child_theme_css', 12 );
