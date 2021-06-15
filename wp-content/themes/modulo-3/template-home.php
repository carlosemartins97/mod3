<?php 
    /* 
        Template Name: Home
    */
    $page = "Home";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="home()"> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <main class="main-home">

        <?php 
            $args = array(
                'post_type' => 'slider_principal',
                'posts_per_page'=> 3,
            );
            
            $sliderQuery = new WP_Query($args);

            
        ?>

        <section class="main-slider-container">
            <div class="main-slider-content">
                <?php if($sliderQuery->have_posts()): while($sliderQuery->have_posts()): $sliderQuery->the_post(); ?>
                    <?php 
                    $background_image = get_field('imagem');
                    if( !empty( $background_image ) ): ?>
                        <div class="main-slider-slide slide-1" style="background-image: url('<?= esc_url($background_image['url'])?>;');">
                        
                            <div class="slider-info">
                                <img src="<?=get_template_directory_uri()?>/dist/img/home/pontilhado.png" alt="detalhe de fundo que reproduz um pontilhado com gradiente.">
                                <span>Bem-vindo ao <strong>grupo sartori</strong></span>
                                <h1><?=get_the_title()?></h1>
                            </div>
                            <div class="slider-links">
                                <span><?=get_field('descricao')?></span>
                                <div class="slider-links-flex">
                                    <a class="first-slider-link" href="#">para profissionais</a>
                                    <a class="second-slider-link" href="#">para sua empresa</a>
                                </div>
                            </div>
                            <div class="slider-buttons">
                                <button type="button" class="main-slider-prev"><img src="<?= get_template_directory_uri()?>/dist/img/home/slider-buttons/left.png" alt="seta pra esquerda"></button>
                                <button type="button" class="main-slider-next"><img src="<?= get_template_directory_uri()?>/dist/img/home/slider-buttons/right.png" alt="seta pra direita"></button>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; endif; ?>
            </div>
            <div id="left-background"><span>Desenvolvimento Humano e Organizacional</span></div>
        </section>

        <section class="encontre-vagas">
            <div class="encontre-vagas-header">
                <img src="<?=get_template_directory_uri()?>/dist/img/home/lupa.png" alt="Imagem de uma lupa, referenciando um formulário para buscar informações.">
                <span>Encontre vagas por área de especialidade</span>
            </div>
            <form class="encontre-vagas-form">
                <div class="input-vagas-container">
                    <label id="cargo-label" for="cargo">CARGO:</label>
                    <input 
                        type="text" id="cargo" name="cargo" 
                        
                    >
                </div>

                <div class="input-vagas-container">
                    <label id="cidade-label" for="cidade">CIDADE:</label>
                    <input 
                        type="text" id="cidade" name="cidade"
                    >
                </div>

                <div class="input-vagas-container" id="estado-container">
                    <label id="estado-label" for="estado">ESTADO:</label>
                    <select 
                        name="estado" id="estado"
                        
                    >
                    <option value=""></option>
                    </select>
                </div>

                <button id="filtrar-button">filtrar</button>
            </form>
        </section>

        <?php 
            $args = array(
                'post_type' => 'setores',
                'posts_per_page'=> 20,
            );
            
            $setoresQuery = new WP_Query($args);
        ?>
        <section class="slider-especialidades">
            <div class="slider-especialidades-header">
                <div class="especialidades-header-wrapper">
                    <?php if($setoresQuery->have_posts()): while($setoresQuery->have_posts()): $setoresQuery->the_post(); ?>
                        <div class="especialidades-header-info">
                            <div class="especialidades-slide-headerinfo">
                                <div class="especialidades-texto">
                                    
                                <?php 
                                    $image = get_field('icone');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>

                                    <h2><?=get_the_title()?></h2>
                                    <p>
                                        <?=get_field('descricao')?>
                                    </p>
                                </div>
                            </div>
                            <div class="especialidades-img-wrapper">
                                <?php 
                                    $image = get_field('imagem');
                                    if( !empty( $image ) ): ?>
                                        <img class="especialidades-header-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                
            </div>
            <div class="slider-especialidades-slider">
                <div class="slider-especialidades-slides">
                    <?php if($setoresQuery->have_posts()): while($setoresQuery->have_posts()): $setoresQuery->the_post(); ?>
                        <div class="slider-especialidades-slide" style="background-color: <?=get_field('cor')?>">
                            <?php 
                                $image = get_field('icone');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                            <span><?=get_the_title()?></span>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="slider-especialidades-button">
                    <button id="slider-especialidades-prev"><img src="<?=get_template_directory_uri()?>/dist/img/home/slider-especialidades/setas/left.png" alt="seta pra esquerda"></button>
                    <button id="slider-especialidades-next"><img src="<?=get_template_directory_uri()?>/dist/img/home/slider-especialidades/setas/right.png" alt="seta pra direita"></button>
                </div>
            </div>
        </section>

        <?php 
            $args = array(
                'post_type' => 'numeros_home',
                'posts_per_page'=> 4,
            );
            
            $numerosQuery = new WP_Query($args);
        ?>
        <section class="onde-chegamos">
            <div class="contagem-candidatos-contratados">
                <div class="contagem-content">
                    <?php if($numerosQuery->have_posts()): while($numerosQuery->have_posts()): $numerosQuery->the_post(); ?>
                        <div class="contagem-info">
                            <h2><?=get_field('titulo')?></h2>
                            <p><?=get_field('descricao')?></p>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>

            <?php $cidades = array(
                'São Paulo', 'Mato Grosso', 'Minas Gerais', 'Bahia', 'Goiás', 'Paraná', 'Rio Grande do Sul',
                'Santa Catarina', 'Pernambuco', 'Pará', 'Piauí', 'Espírito Santo', 'Mato Grosso do Sul',
                'Rio de Janeiro', 'Sergipe', 'Amapá'
            ) ?>
            <div class="mapa-container">
                <div class="mapa-content">
                    <img id="mapa" src="<?=get_template_directory_uri()?>/dist/img/home/slider-especialidades/mapa.png" alt="Mapa onde a empresa Grupo Sartori atua.">
                    <img src="<?=get_template_directory_uri()?>/dist/img/home/pontilhado.png" alt="detalhe de fundo que reproduz um pontilhado com gradiente.">
                </div>
                <div class="mapa-legenda">
                    <h3>Onde chegamos:</h3>
                    <ul>
                        <?php foreach($cidades as $key => $cidade) {?>
                            <li><?=$cidade?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <?php 
                $args = array(
                    'post_type' => 'mapa_home',
                    'posts_per_page'=> 1,
                );
                
                $mapaQuery = new WP_Query($args);
            ?>
            <div class="capilaridade">
                <?php if($mapaQuery->have_posts()): while($mapaQuery->have_posts()): $mapaQuery->the_post(); ?>
                    <span>Capilaridade nacional</span>
                    <h2><?=get_the_title()?></h2>
                    <a href="<?=get_field('link_botao')?>" class="capilaridade-button">fale com nosso time</a>
                <?php endwhile; endif; ?>
            </div>
        </section>

        <?php 
            $args = array(
                'post_type' => 'nossos_servicos',
                'posts_per_page'=> 1,
            );
            
            $servicosQuery = new WP_Query($args);
        ?>
        <section class="nossos-servicos">
            <img id="nossos-servicos-logo" src="<?=get_template_directory_uri()?>/dist/img/min-logo.png" alt="Logo minimalista do grupo Sartori.">
            <div class="nossos-servicos-content">
                <?php if($servicosQuery->have_posts()): while($servicosQuery->have_posts()): $servicosQuery->the_post(); ?>
                <h2><?php echo get_the_title()?></h2>

                <span><?=get_field('descricao')?></span>

                <ul>
                    <li><a href="#">Recrutamento e Seleção</a></li>
                    <li><a href="#">Desenvolvimento de Liderança</a></li>
                    <li><a href="#">Desenvolvimento Organizacional</a></li>

                    <li><a href="#">Formação Atendimento ao Cliente</a></li>
                    <li><a href="#">Desenvolvimentos de Equipe</a></li>
                    <li><a href="#">TreinamentosTreinamentos</a></li>

                    <li><a href="#">Comunicação Intercultural</a></li>
                    <li><a href="#">Comunicação e habilidades Interpessoais</a></li>
                    <li><a href="#">Gestão de Talentos</a></li>
                </ul>

                <a href="<?=get_field('link_botao')?>">Saiba mais</a>

                <?php endwhile; endif; ?>
                <div id="servico-background"></div>
            </div>
        </section>


        <?php 
            $args = array(
                'post_type' => 'saiu_midia',
                'posts_per_page'=> 6,
            );
            
            $midiaQuery = new WP_Query($args);
        ?>
        <section class="saiu-na-midia">
            <div class="midia-content">
                <h2>Saiu na mídia</h2>

                <div class="midia-grid">
                    <?php if($midiaQuery->have_posts()): while($midiaQuery->have_posts()): $midiaQuery->the_post(); ?>
                        <a href="<?=get_field('link')?>" class="midia-post">
                            <p><span><?=get_field('data')?> - </span> <?=get_the_title()?></p>
                        </a>
                    <?php endwhile; endif; ?>
                </div>

                <a id="midia-veja-mais" href="<?=$homeUrl?>/saiu_midia">veja outras notícias <img src="<?=get_template_directory_uri()?>/dist/img/home/seta-lista.png" alt="Seta pra direita"></a>
            </div>
        </section>

        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page'=> 3,
            );
            
            $blogQuery = new WP_Query($args);
        ?>
        <section class="ultimas-do-blog">
            <div class="ultimas-blog-content">
                <h2>últimas do blog</h2>

                <div class="ultimas-blog-grid">
                    
                    <?php if($blogQuery->have_posts()): while($blogQuery->have_posts()): $blogQuery->the_post(); ?>
                        <div class="ultimas-blog-post">
                            <div class="blog-post-header">
                                <span><?=get_the_date()?></span>
                                <h3><?=get_the_title()?></h3>
                                <p><?=get_the_excerpt()?></p>
                            </div>
                            <a href="<?=get_permalink()?>" class="blog-post-link"><img src="<?=get_template_directory_uri()?>/dist/img/home/mais-icon.png" alt="Ícone de mais, dando a entender que seja um link."></a>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>

    
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/slick.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>