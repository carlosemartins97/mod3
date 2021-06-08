<?php 
    /* 
        Template Name: Para Profissionais
    */
    $page = "Para Profissionais";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="profissionais()">
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>

    <main class="profissionais">

        <section class="profissionais-header">
            <?php include_once get_template_directory() . '/assets/views/includes/header-navigation.php' ?>
            
            <div class="profissionais-header-content">
                <div class="profissionais-header-wrapper">
                    <img src="<?=get_template_directory_uri()?>/dist/img/min-logo.png" alt="Logo simples da empresa Grupo Sartori">
                    <h1>Para Profissionais</h1>
                </div>
            </div>
        </section>

        <section class="profissionais-carreira">
            <div class="profissionais-carreira-content">
                <h2>Programa de Carreira e Performance</h2>

                <p>
                    Não sabe como procurar um novo emprego ou desenhar seu currículo?
                    Você acabou de encontrar o programa certo pra você. Nosso objetivo é alinhar as suas
                    expectativas as necessidades do mercado e te preparar para que você conquiste a sua
                    recolocação.
                </p>

                <p>
                    O melhor de tudo é que nós, ainda enviamos o seu material a nossa base de clientes,
                    para contratações, sem custo adicional para a empresa... que incentivo a contratação,
                    hein?
                </p>
            </div>
        </section>

        <section class="profissionais-thumb">
            <img src="<?=get_template_directory_uri()?>/dist/img/profissionais/thumb.png" alt="Imagem de um grupo de pessoas">
        </section>

        <section class="profissionais-grid">
            <div class="profissionais-grid-content">
                <h2>O programa é estruturado em 6 etapas, sendo:</h2>
                <div class="grid-wrapper">
                    <div class="profissionais-grid-post">
                        <div class="grid-post-header">
                            <span class="numero">1</span>
                            <span class="etapa">Autoconhecimento</span>
                        </div>
                        <img src="<?=get_template_directory_uri()?>/dist/img/profissionais/pontilhado.png" alt="pontilhado">
                    </div>
                    <div class="profissionais-grid-post">
                        <div class="grid-post-header">
                            <span class="numero">1</span>
                            <span class="etapa">Autoconhecimento</span>
                        </div>
                        <img src="<?=get_template_directory_uri()?>/dist/img/profissionais/pontilhado.png" alt="pontilhado">
                    </div>
                    <div class="profissionais-grid-post">
                        <div class="grid-post-header">
                            <span class="numero">1</span>
                            <span class="etapa">Autoconhecimento</span>
                        </div>
                        <img src="<?=get_template_directory_uri()?>/dist/img/profissionais/pontilhado.png" alt="pontilhado">
                    </div>
                    <div class="profissionais-grid-post">
                        <div class="grid-post-header">
                            <span class="numero">1</span>
                            <span class="etapa">Autoconhecimento</span>
                        </div>
                        <img src="<?=get_template_directory_uri()?>/dist/img/profissionais/pontilhado.png" alt="pontilhado">
                    </div>
                    <div class="profissionais-grid-post">
                        <div class="grid-post-header">
                            <span class="numero">1</span>
                            <span class="etapa">Autoconhecimento de teste de bla bla pora teste</span>
                        </div>
                        <img src="<?=get_template_directory_uri()?>/dist/img/profissionais/pontilhado.png" alt="pontilhado">
                    </div>
                    <div class="profissionais-grid-post">
                        <div class="grid-post-header">
                            <span class="numero">1</span>
                            <span class="etapa">Autoconhecimento</span>
                        </div>
                        <img src="<?=get_template_directory_uri()?>/dist/img/profissionais/pontilhado.png" alt="pontilhado">
                    </div>
                </div>

                <a href="#" class="link-leia-mais">Consulte-nos <img src="<?=get_template_directory_uri()?>/dist/img/curriculo/seta.png" alt="Seta pra direita"></a>
                
            </div>
        </section>

        <section class="profissionais-programa">
            <div class="profissionais-programa-content">
                <div class="opcoes-programa">
                    <div class="opcoes"><h2>Programa de Desenvolvimento de Liderança</h2></div>
                    <div class="opcoes"><h2>Programa de reposicionamento de carreira</h2></div>
                </div>
                <div class="info-programa">
                    <div class="info">
                        <p>
                            O programa pra quem gosta de exclusividade.
                            Nosso programa é desenhado em forma de mentoria e individualizado, para atingir
                            exatamente aqui que você busca de forma clara, rápida e pra gerar resultados rápidos
                            aplicáveis no seu dia a dia.
                        </p>
                        <p>
                            Simples assim... 
                            <strong>
                                Chama a gente aqui e saiba o que podemos fazer por você, pelo seu
                            desenvolvimento.
                        </strong>
                        </p>
                    </div>
                    <div class="info">
                        <p>
                            brabo
                        </p>
                        <p>
                            Simples assim... 
                            <strong>
                                teste
                        </strong>
                        </p>
                    </div>
                </div>
            </div>
        </section>



        
    </main>

    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/slick.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>