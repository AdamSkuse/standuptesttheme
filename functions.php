<?php

function standupTestTheme_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer', false ); 
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/app.js', array(), '1.0', true);
  wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5cfe35cd23.js', array(), '1.0', true);
}
 
add_action('wp_enqueue_scripts', 'standupTestTheme_resources');
