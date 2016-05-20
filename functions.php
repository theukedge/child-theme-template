<?php

// For more information on how to use this template, go to https://www.doitwithwp.com/putting-things-where-they-belong/

function load_parent_theme_css() {
	$parentcss = get_template_directory() . '/style.css';
	wp_enqueue_style(
		'parent-theme',
		get_template_directory_uri() . '/style.css',
		array(),
		filemtime( $parentcss )
	);
}

add_action( 'wp_enqueue_scripts', 'load_parent_theme_css', 11 );


function load_child_theme_css() {
	$childcss = get_stylesheet_directory() . '/css/style.css';
	wp_enqueue_style(
		'child-theme',
		get_stylesheet_directory_uri() . '/css/style.css',
		array(),
		filemtime( $childcss )
	);
}

add_action( 'wp_enqueue_scripts', 'load_child_theme_css', 12 );
