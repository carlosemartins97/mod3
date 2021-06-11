<?php 
    /* 
        Template Name: Contato
    */
    $page = "Contato";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body>
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>

    <main class="contato">
    
    <section class="contato-header">
        <?php include_once get_template_directory() . '/assets/views/includes/header-navigation.php' ?>
        <div class="contato-header-container">
            <h1>CONTATOS</h1>
        </div>
        <?php include_once get_template_directory() . '/assets/views/includes/socials.php' ?>
    </section>

    <section class="contato-form">
        <div class="contato-form-content">
            <div class="form-wrapper">
                <div>
                    <h2>Entre em contato conosco para qualquer informação ou dúvida.</h2>
                    
                    <?php echo do_shortcode( '[contact-form-7 id="217" title="contato"]' ); ?>

                </div>
            </div>
            <div class="contato-wrapper">
                <div class="contato">
                    <?php include get_template_directory() . '/assets/views/includes/contatos-card.php' ?>
                </div>
                <div class="onde-estamos">
                    <h3>onde estamos</h3>
                    <span>Av. Senador Feijí 686</span>
                    <span>Vila Mathias, Santos - SP</span>
                    <span>CEP/11015-504</span> 
                </div>
            </div>
        </div>
    </section>

    <section class="localizacao">
    <iframe  
    frameborder="0" 
    scrolling="no" 
    marginheight="0" 
    marginwidth="0" 
    id="gmap_canvas" 
    src="https://maps.google.com/maps?width=1920&amp;height=450&amp;hl=en&amp;q=Avenida%20Senador%20Feij%C3%B3,%20686%20Santos+(Grupo%20Sartori)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
    </iframe> 
    <a href='https://www.symptoma.pt/pt/info/covid-19#info'>Síntomas de coronavirus</a> 
    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=d759b09a3bf5ecf9bc9cd0498866888295ac87da'>
    </script>
    </section>

    
    
    
    
    </main>

    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>