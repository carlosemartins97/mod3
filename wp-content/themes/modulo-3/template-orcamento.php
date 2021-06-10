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

                <form action="#">
                    <div class="nome-tipo">
                        <div class="nome">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome">
                        </div>
                        <div class="tipo">
                            <label for="tipo">Escolha o tipo de serviços:</label>
                            <input type="text" id="tipo" name="tipo">
                        </div>
                    </div>

                    <div class="email-tel-cel">
                        <div class="email">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="tel-cel">
                            <div class="tel">
                                <label for="tel">Telefone:</label>
                                <input type="tel" id="tel" name="tel">
                            </div>
                            <div class="cel">
                                <label for="cel">Celular:</label>
                                <input type="tel" id="cel" name="cel">
                            </div>
                        </div>
                    </div>

                    <div class="mensagem">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" ></textarea>
                    </div>

                    <div class="termos">
                        <input type="checkbox" id="termos" name="termos">
                        <label for="termos"><strong>Estou de acordo</strong> com o Termo de Uso de Dados LGPD - <strong>Lei n° 13.709</strong></label>
                    </div>

                    <div class="recaptcha">
                        <span>Prove que você não é um robô</span>
                        <div class="g-recaptcha" data-sitekey="6LfDzyQbAAAAABJifjTlRiZOffqMJzMw2ovQ4nlw"></div>
                    </div>

                    <button type="submit" class="link-leia-mais">Enviar <img src="<?=get_template_directory_uri()?>/dist/img/curriculo/seta.png" alt="Seta pra direita"></button>
                </form>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
    </script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>