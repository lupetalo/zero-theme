<?php
define('Z_VER',1.0);

add_action( 'after_setup_theme', function(){
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( [
		'primary' => 'Primary',
	]);
} );

add_action( 'wp_enqueue_scripts', function(){
  wp_enqueue_style('main-style',get_template_directory_uri() . '/style.css',[],Z_VER);
} );