<?php 
    /* 
        Template Name: Sobre
    */
    $page = "Sobre Nós";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body>
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>

    <main class="sobre">

        <section class="sobre-header">
            <?php include_once get_template_directory() . '/assets/views/includes/header-navigation.php' ?>
            
            <div class="sobre-header-content">
                <div class="sobre-header-wrapper">
                    <img src="<?=get_template_directory_uri()?>/dist/img/min-logo.png" alt="Logo simples da empresa Grupo Sartori">
                    <h1>Somos o grupo sartori</h1>
                    <span>Pra Resumir em uma frase:</span>

                    <p>Somos aquela empresa que não busca apenas clientes e sim parceiros de negócios, nos processos estratégicos de RH.</p>
                </div>
            </div>  
            <div class="sobre-socials">
                <div class="sobre-socials-content face">
                    <a href="#"><img src="<?=get_template_directory_uri()?>/dist/img/sobre/icons/facebook.png" alt="Logo do facebook"></a>
                </div>
                <div class="sobre-socials-content insta">
                <a href="#"><img src="<?=get_template_directory_uri()?>/dist/img/sobre/icons/instagram.png" alt="Logo do instagram"></a>
                </div>
            </div>
        </section>

        <section class="sobre-thumbnail">
            <img src="<?=get_template_directory_uri()?>/dist/img/sobre/main.png" alt="Imagem de duas pessoas apertando a mão">
            <span>GRUPO <br> SARTORI</span>
        </section>
        
    </main>

    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>