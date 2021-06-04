<?php 

function add_estilos() {
    wp_enqueue_style( 'global', get_template_directory_uri() . '/dist/css/styles.css');
}


add_theme_support('post-thumbnails'); //habilitando as thumbnails

add_action( 'wp_enqueue_scripts', 'add_estilos' );//adicionando estilos na head

function my_post_type() {
    $args = array (
        'labels'=> ['name'=>'Saiu na mídia'],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title']
    );

    register_post_type('saiu_midia', $args);
}

add_action('init', 'my_post_type');