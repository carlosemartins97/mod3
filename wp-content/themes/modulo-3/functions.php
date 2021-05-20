<?php 

function add_estilos() {
    wp_enqueue_style( 'global', get_template_directory_uri() . '/dist/css/styles.css');
}

add_action( 'wp_enqueue_scripts', 'add_estilos' );