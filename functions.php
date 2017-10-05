<?php

function standupTestTheme_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/app.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'standupTestTheme_resources');
