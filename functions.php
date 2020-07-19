<?php

function enqueue_scripts() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
