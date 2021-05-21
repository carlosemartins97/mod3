<?php 
    $page = "Home";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="home()"> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <section class="main-slider-container">
        <div class="main-slider-content">
            <div class="main-slider-slide" id="slide-1">
                <div class="slider-info">
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

    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/slick.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>