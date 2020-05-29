<?php
/**
 *
 *	My Theme functions and definitions
 *
 *
 */
function aig_setup() {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 128, 138, true );
}
add_action( 'after_setup_theme', 'aig_setup' );

function aig_register_nav_menu() {
	register_nav_menu('primary', __('Main navigation on top', 'aig'));
}
add_action('after_theme_setup', 'aig_regster_nav_menu');

function aig_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'aig' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the right.', 'aig' ),
		'before_widget' => '<aside id="%1$s" class="widget styled-container %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'aig' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears in the footer section of the site.', 'aig' ),
		'before_widget' => '<aside id="%1$s" class="col--sidebar-footer widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title footer-sidebar__title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init', 'aig_widgets_init');

function aig_enque_styles() {
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array());
	wp_enqueue_style('layout', get_template_directory_uri() . '/css/layout.css', array());
	wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css', array());
	wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css', array());
	wp_enqueue_style('modules', get_template_directory_uri() . '/css/modules.css', array());
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array());
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array());
	wp_enqueue_style('main', get_stylesheet_uri(), array('normalize', 'layout', 'base', 'modules',  'font-awesome' ,'bootstrap'));
}
add_action('wp_enqueue_scripts', 'aig_enque_styles');

function aig_enque_scripts() {
	wp_enqueue_script('my-jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '3.1.1', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('my-jquery'), '3.1.1', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('my-jquery', 'bootstrap'), null, true);
}
add_action('wp_enqueue_scripts', 'aig_enque_scripts');