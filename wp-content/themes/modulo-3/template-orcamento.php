<?php 
    /* 
        Template Name: Orçamento
    */
    $page = "Orçamento";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="orcamento()">
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>

    <main class="orcamento">
    
    <section class="orcamento-header">
        <?php include_once get_template_directory() . '/assets/views/includes/header-navigation.php' ?>
        <div class="orcamento-header-container">
            <h1>Orçamento</h1>
        </div>
        <?php include_once get_template_directory() . '/assets/views/includes/socials.php' ?>
    </section>

    <section class="orcamento-form">
        <div class="orcamento-form-content">
            <div class="form-wrapper">
                <h2>Solicite um orçamento</h2>

                <p>Por favor preencha este formulário.</p>
                <p>Em até um dia útil responderemos ao seu orçamento.</p>

                <?php echo do_shortcode( '[contact-form-7 id="214" title="Contact form 1"]' ); ?>
            </div>
        </div>
    </section>

    <section class="orcamento-contato">
        <div class="contato-content">
            <h2>Se preferir solicite um orçamento por:</h2>

            <div class="contato-wrapper">
                <div class="contato">
                    <img src="<?=get_template_directory_uri()?>/dist/img/footer/phone-icon.png" alt="Ícone de telefone">
                    <div>
                        <span class="titulo">COMERCIAL</span>
                        <span class="ddd">(13) </span> <span class="numero">99159.0164</span>
                    </div>
                </div>
                <div class="contato">
                    <img src="<?=get_template_directory_uri()?>/dist/img/footer/phone-icon.png" alt="Ícone de telefone">
                    <div>
                        <span class="titulo">Sucesso ao cliente</span>
                        <span class="ddd">(13) </span> <span class="numero">99159.0164</span>
                    </div>
                </div>
                <div class="contato">
                    <img src="<?=get_template_directory_uri()?>/dist/img/footer/phone-icon.png" alt="Ícone de telefone">
                    <div>
                        <span class="titulo">Suporte ao candidato</span>
                        <span class="ddd">(13) </span> <span class="numero">99159.0164</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    </main>

    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>