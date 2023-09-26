<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_script( 'script-name1', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name2', get_template_directory_uri() . '/js/core.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name3', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-name4', get_template_directory_uri() . '/js/pointer-events.min.js', array(), '1.0.0', true );	
}