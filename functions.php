<?php
/**
 * Child Theme Template
 *
 * This child theme template is the very least you need to start building a child theme.
 * Simply upload this theme to your site and edit the 'template' in style.css to the
 * folder name of the parent theme. Then activate this theme. More details on how to
 * use this theme can be found @link https://dave.pe/2014wctpa.
 *
 * @package    Child Theme Template
 * @subpackage Functions
 * @author     Dave Clements <dave@theukedge.com>
 * @copyright  Copyright (c) 2016 Dave Clements
 * @version    1.2
 * @since      1.0
 * @link       https://github.com/theukedge/child-theme-template
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Load parent theme css
 *
 * @since      2016-05-20
 * @author     Dave Clements <dave@theukedge.com>
 * @return     void
 */
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

/**
 * Load child theme css
 *
 * @since      2016-05-20
 * @author     Dave Clements <dave@theukedge.com>
 * @return     void
 */
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
