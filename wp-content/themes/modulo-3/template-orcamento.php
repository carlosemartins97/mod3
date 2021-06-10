<?php 
    /* 
        Template Name: Orçamento
    */
    $page = "Orçamento";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body>
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>

    <main class="orcamento">
    
    <section class="orcamento-header">
        <?php include_once get_template_directory() . '/assets/views/includes/header-navigation.php' ?>
        <div class="orcamento-header-container">
            <h1>Orçamento</h1>
        </div>
    </section>
    
    
    
    
    </main>

    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>