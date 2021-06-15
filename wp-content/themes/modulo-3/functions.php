<?php 

function add_estilos() {
    wp_enqueue_style( 'global', get_template_directory_uri() . '/dist/css/styles.css');
}


add_theme_support('post-thumbnails'); //habilitando as thumbnails

add_action( 'wp_enqueue_scripts', 'add_estilos' );//adicionando estilos na head

function my_post_type() {
    //Saiu na mídia
    $args = array (
        'labels'=> ['name'=>'Saiu na mídia'],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title']
    );

    register_post_type('saiu_midia', $args);

    //Contagem de números - HOME
    $args4 = array (
        'labels'=> ['name'=>'Números Home'],
        'public' => true,
        'supports' => ['']
    );

    register_post_type('numeros_home', $args4);

    //Slider de setores - HOME
    $args5 = array (
        'labels'=> ['name'=>'Setores Home'],
        'public' => true,
        'supports' => ['title']
    );

    register_post_type('setores', $args5);

    //Slider Principal - HOME
    $args6 = array (
        'labels'=> ['name'=>'Slider Principal'],
        'public' => true,
        'supports' => ['title']
    );

    register_post_type('slider_principal', $args6);

    //Para profissionais grid
    $args8 = array (
        'labels'=> ['name'=>'Grid Para profissionais'],
        'public' => true,
        'supports' => ['title']
    );

    register_post_type('grid_profissionais', $args8);

    //Para profissionais Bloco 1
    $args12 = array (
        'labels'=> ['name'=>'Programas Para profissionais'],
        'public' => true,
        'supports' => ['title', 'editor']
    );
    register_post_type('prog_profissionais', $args12);

    $args16 = array (
        'labels'=> ['name'=>'Programas Para Empresa'],
        'public' => true,
        'supports' => ['title', 'editor']
    );
    register_post_type('prog_empresa', $args16);

    $args17 = array (
        'labels'=> ['name'=>'Numeros Para Empresa'],
        'public' => true,
        'supports' => ['title']
    );
    register_post_type('numeros_empresa', $args17);

    $args18 = array (
        'labels'=> ['name'=>'Treinamentos Para Empresa'],
        'public' => true,
        'supports' => ['title', 'editor']
    );
    register_post_type('treinamentos_empresa', $args18);
}

add_action('init', 'my_post_type');