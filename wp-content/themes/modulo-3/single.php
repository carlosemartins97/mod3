<?php 
    $page = get_the_title();
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="integra()"> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <main class="main-integra">

        <?php include_once('assets/views/includes/header-navigation.php'); ?>

        <section class="integra-title">
            <div class="integra-title-content">
                <span><?= get_the_date('d/m/Y') ?></span>
                <h1><?= get_the_title() ?></h1>
            </div>
        </section>

        <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="integra-thumbnail">

        <section class="integra-content-wrapper">
            <div class="integra-content">
                <p><?=get_the_content()?></p>
            </div>
            <div class="integra-content-social">
                <span>Compartilhe:</span>
                <div class="integra-socials"></div>
            </div>
        </section>

        <section class="integra-noticias-relacionadas">
            <div class="noticias-relacionadas-content">
                <h2>Notícias Relacionadas</h2>
            </div>
        </section>
    </main>
   
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>