<?php 

function add_estilos() {
    wp_enqueue_style( 'global', get_template_directory_uri() . '/dist/css/styles.css');
}


add_theme_support('post-thumbnails'); //habilitando as thumbnails

add_action( 'wp_enqueue_scripts', 'add_estilos' );//adicionando estilos na head

function wpdocs_my_search_form( $form ) {
    $form = '<form action="<?=$homeUrl?>/blog">
                <label for="pesquisa"><img src=<?=get_template_directory_uri()?>/dist/img/blog/icons/filter.png" alt="filtro de pesquisa"> O que você procura</label>
                <div class="pesquisa-wrapper">
                    <input id="s" name="s" type="text">
                    <button type="submit">OK</button>
                </div>
                <div class="select-wrapper">
                    <select name="cat" id="cat">
                        <option value="">Categoria</option>
                        <option value="2">Santos</option>
                        <option value="1">Brasil</option>
                    </select>
                </div>
            </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );


function my_post_type() {
    //Saiu na mídia
    $args = array (
        'labels'=> ['name'=>'Saiu na mídia'],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title']
    );

    register_post_type('saiu_midia', $args);

    //Nossos serviços
    $args2 = array (
        'labels'=> ['name'=>'Nossos serviços'],
        'public' => true,
        'supports' => ['title']
    );

    register_post_type('nossos_servicos', $args2);

    //Mapa - capilaridade nacional
    $args3 = array (
        'labels'=> ['name'=>'Mapa Home'],
        'public' => true,
        'supports' => ['title']
    );

    register_post_type('mapa_home', $args3);

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

    //Bloco padrão cadastre currículo
    $args7 = array (
        'labels'=> ['name'=>'Info Footer'],
        'public' => true,
        'supports' => ['']
    );

    register_post_type('info_footer', $args7);

    //Para profissionais grid
    $args8 = array (
        'labels'=> ['name'=>'Grid Para profissionais'],
        'public' => true,
        'supports' => ['title']
    );

    register_post_type('grid_profissionais', $args8);

    //Para profissionais Thumb
    $args9 = array (
        'labels'=> ['name'=>'Thumbnail Para profissionais'],
        'public' => true,
        'supports' => ['title']
    );
    register_post_type('thumb_profissionais', $args9);

    //Para profissionais Bloco 1
    $args10 = array (
        'labels'=> ['name'=>'Introdução Para profissionais'],
        'public' => true,
        'supports' => ['title', 'editor']
    );
    register_post_type('intro_profissionais', $args10);

    //Para profissionais Bloco 1
    $args12 = array (
        'labels'=> ['name'=>'Programas Para profissionais'],
        'public' => true,
        'supports' => ['title', 'editor']
    );
    register_post_type('prog_profissionais', $args12);

    $args13 = array (
        'labels'=> ['name'=>'Introdução Para Empresa'],
        'public' => true,
        'supports' => ['title', 'editor']
    );
    register_post_type('intro_empresa', $args13);

    $args14 = array (
        'labels'=> ['name'=>'Thumbnail Para Empresa'],
        'public' => true,
        'supports' => ['title']
    );
    register_post_type('thumb_empresa', $args14);

    $args15 = array (
        'labels'=> ['name'=>'Footer Para Empresa'],
        'public' => true,
        'supports' => ['']
    );
    register_post_type('footer_empresa', $args15);

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