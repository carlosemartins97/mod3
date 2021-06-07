<?php 
    /* 
        Template Name: Para Profissionais
    */
    $page = "Para Profissionais";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body>
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



        
    </main>

    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>