<?php 
    $page = "Home";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="home()"> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <main class="main-home">

        <section class="main-slider-container">
            <div class="main-slider-content">
                <div class="main-slider-slide" id="slide-1">
                    <div class="slider-info">
                        <img src="<?=get_template_directory_uri()?>/dist/img/home/pontilhado.png" alt="detalhe de fundo que reproduz um pontilhado com gradiente.">
                        <span>Bem-vindo ao <strong>grupo sartori</strong></span>
                        <h1>treinamento recrutamento e seleção</h1>
                    </div>
                    <div class="slider-links">
                        <span>Assertividade com retenção de talentos, é a nossa especialidade.</span>
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
                <div class="main-slider-slide" id="slide-2">
                    <div class="slider-info">
                        <span>Bem-vindo ao <strong>grupo sartori</strong></span>
                        <h1>Lorem ipsum dolor sit amet.</h1>
                    </div>
                    <div class="slider-links">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam?</span>
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
                    <label for="cargo">cargo:</label>
                    <input type="text" id="cargo" name="cargo">
                </div>

                <div class="input-vagas-container">
                    <label for="cidade">cidade:</label>
                    <input type="text" id="cidade" name="cidade">
                </div>

                <div class="input-vagas-container" id="estado-container">
                    <label for="estado">estado:</label>
                    <input type="text" id="estado" name="estado">
                </div>

                <button id="filtrar-button">filtrar</button>
            </form>
        </section>

        <?php 
            $especialidades = array(
                array("img"=>"/dist/img/home/slider-especialidades/icons/industria.png", "nome"=>"Indústria", "cor"=>"#C6565A"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/porto.png", "nome"=>"Porto", "cor"=>"#1D3E73"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/logistica.png", "nome"=>"Logistica", "cor"=>"#6B364F"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/agenciamento.png", "nome"=>"Agenciamento Marítmo", "cor"=>"#181818"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/servico.png", "nome"=>"Serviço", "cor"=>"#312626"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/energia.png", "nome"=>"Energia", "cor"=>"#FFB500"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/construcao.png", "nome"=>"Construção", "cor"=>"#654B2D"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/automotivo.png", "nome"=>"Automotivo", "cor"=>"#300141"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/tecnologia.png", "nome"=>"Tecnologia", "cor"=>"#21385D"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/quimico.png", "nome"=>"Químico e Petroquímico", "cor"=>"#B3050D"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/oleo.png", "nome"=>"Óleo e Gás", "cor"=>"#5F5F5F"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/farma.png", "nome"=>"Farma", "cor"=>"#05ACB7"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/transportes.png", "nome"=>"Transportes", "cor"=>"#21385D"),
                array("img"=>"/dist/img/home/slider-especialidades/icons/agro.png", "nome"=>"Agro", "cor"=>"#00A341")
            )
        ?>
        <section class="slider-especialidades">
            <div class="slider-especialidades-header">
                <div class="especialidades-header-wrapper">
                    <?php foreach($especialidades as $key => $especialidade) { ?>
                        <div class="especialidades-header-info">
                            <div class="especialidades-slide-headerinfo">
                                <div class="especialidades-texto">
                                    <img src="<?=get_template_directory_uri()?><?php echo $especialidade["img"]?>" alt="<?php echo $especialidade["nome"]?>">
                                    <h2><?php echo $especialidade["nome"]?></h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure sequi officiis rem voluptates repudiandae. Modi nam aperiam et blanditiis 
                                        animi rem facere voluptates magni, sit commodi incidunt alias sunt, enim ea quod sequi impedit ducimus neque, placeat quidem facilis 
                                    </p>
                                </div>
                            </div>
                            <div class="especialidades-img-wrapper">
                                <img class="especialidades-header-img" src="<?=get_template_directory_uri()?>/dist/img/home/slider-especialidades/industria.png" alt="<?php echo $especialidade["nome"]?>">
                            </div>
                        </div>
                    <?php } ?>
                </div>
                
            </div>
            <div class="slider-especialidades-slider">
                <div class="slider-especialidades-slides">
                    <?php foreach($especialidades as $key => $especialidade) { ?>
                        <div class="slider-especialidades-slide" style="background-color: <?=$especialidade["cor"]?>">
                            <img src="<?=get_template_directory_uri()?><?php echo $especialidade["img"]?>" alt="imagem de uma industria">
                            <span><?=$especialidade["nome"]?></span>
                        </div>
                    <?php } ?>
                </div>
                <div class="slider-especialidades-button">
                    <button id="slider-especialidades-prev"><img src="<?=get_template_directory_uri()?>/dist/img/home/slider-especialidades/setas/left.png" alt="seta pra esquerda"></button>
                    <button id="slider-especialidades-next"><img src="<?=get_template_directory_uri()?>/dist/img/home/slider-especialidades/setas/right.png" alt="seta pra direita"></button>
                </div>
            </div>
        </section>

        <section class="onde-chegamos">
            <div class="contagem-candidatos-contratados">
                <div class="contagem-info">
                    <h2>97%</h2>
                    <p>Dos candidatos contratados por nós,permanecem por pelo menos 15 meses na empresa.</p>
                </div>
                <div class="contagem-info">
                    <h2>+10MIL</h2>
                    <p>Posições realizadas por nós, somados todo Know How de nosso time.</p>
                </div>
                <div class="contagem-info">
                    <h2>+500</h2>
                    <p>Mais de 500 clientes atendidos em todo território nacional.</p>
                </div>
                <div class="contagem-info">
                    <h2>12</h2>
                    <p>Nossa operação está presente em 12 estados do país.</p>
                </div>
            </div>

            <?php $cidades = array(
                'São Paulo', 'Mato Grosso', 'Minas Gerais', 'Bahia', 'Goiás', 'Paraná', 'Rio Grande do Sul',
                'Santa Catarina', 'Pernambuco', 'Pará', 'Piauí', 'Espírito Santo', 'Mato Grosso do Sul',
                'Rio de Janeiro', 'Sergipe', 'Amapá'
            ) ?>
            <div class="mapa-container">
                <div class="mapa-content">
                    <img src="<?=get_template_directory_uri()?>/dist/img/home/slider-especialidades/mapa.png" alt="Mapa onde a empresa Grupo Sartori atua.">
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
            <div class="capilaridade">
                <span>Capilaridade nacional</span>
                <h2>Estamos presentes onde você precisa.</h2>
                <a href="#" class="capilaridade-button">fale com nosso time</a>
            </div>
        </section>

        <section class="nossos-servicos">
            <img id="nossos-servicos-logo" src="<?=get_template_directory_uri()?>/dist/img/min-logo.png" alt="Logo minimalista do grupo Sartori.">
            <div class="nossos-servicos-content">
                <h2>Nossos serviços</h2>

                <span>Somos especializados em contratação para o setor portuário</span>

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

                <a href="#">Saiba mais</a>
                <div id="servico-background"></div>
            </div>
        </section>

        <section class="saiu-na-midia">
            <div class="midia-content">
                <h2>Saiu na mídia</h2>

                <div class="midia-grid">
                    <a href="#" class="midia-post">
                        <p><span>02/09/2020 - </span> Conheça a consultoria mais tecnológica do seguimento de Porto.</p>
                    </a>
                    <a href="#" class="midia-post">
                        <p><span>02/09/2020 - </span> Conheça a consultoria mais tecnológica do seguimento de Porto.</p>
                    </a>
                    <a href="#" class="midia-post">
                        <p><span>02/09/2020 - </span> Conheça a consultoria mais tecnológica do seguimento de Porto.</p>
                    </a>
                    <a href="#" class="midia-post">
                        <p><span>02/09/2020 - </span> Conheça a consultoria mais tecnológica do seguimento de Porto.</p>
                    </a>
                    <a href="#" class="midia-post">
                        <p><span>02/09/2020 - </span> Conheça a consultoria mais tecnológica do seguimento de Porto.</p>
                    </a>
                    <a href="#" class="midia-post">
                        <p><span>02/09/2020 - </span> Conheça a consultoria mais tecnológica do seguimento de Porto.</p>
                    </a>
                </div>

                <a id="midia-veja-mais" href="#">veja outras notícias <img src="<?=get_template_directory_uri()?>/dist/img/home/seta-lista.png" alt="Seta pra direita"></a>
            </div>
        </section>

        <?php 
            $blog_posts = array(
                array("data"=>"27/01/2021", "titulo"=>"COMO MANDAR Bem NUMA ENTREVISTA", "descricao"=>"Cerca de 40% dos entrevistados, poderiam ser aprovados nas entrevistas, mas esbarram em coisas simples:"),
                array("data"=>"27/01/2021", "titulo"=>"O QUE FAZER PARA SE DESTACAR EM UM PROCESSO SELETIVO", "descricao"=>"Assim como qualquer momento crucial da sua vida, quando você encontra a vaga certa"),
                array("data"=>"27/01/2021", "titulo"=>"O QUE É PRECISO PARA TER SUCESSO E RECONHECIMENTO ", "descricao"=>"O tão sonhado reconhecimento profissional. Quem nunca trabalhou duro para receber um elogio."),
            )
        ?>
        <section class="ultimas-do-blog">
            <div class="ultimas-blog-content">
                <h2>últimas do blog</h2>

                <div class="ultimas-blog-grid">
                    <?php foreach($blog_posts as $key => $post) { ?>
                        <div class="ultimas-blog-post">
                            <div class="blog-post-header">
                                <span><?=$post["data"]?></span>
                                <h3><?=$post["titulo"]?></h3>
                                <p><?=$post["descricao"]?></p>
                            </div>
                            <div class="blog-post-link"><img src="<?=get_template_directory_uri()?>/dist/img/home/mais-icon.png" alt="Ícone de mais, dando a entender que seja um link."></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

    
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/slick.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>