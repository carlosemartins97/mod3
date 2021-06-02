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

        <section class="sobre-content-container">
            <div class="sobre-content-wrapper">
                <div class="sobre-content-info">
                    <p>Uma empresa inovadora quando se fala em gestão de pessoas e todos os seus processos estratégicos que envolvem: Recrutamento & Seleção / Treinamento & desenvolvimento / Avaliações Psicológicas / Clima e Diagnóstico organizacional, esse é o nosso foco.</p>

                    <p>A nossa consultoria conta com um forte viés tecnológico em todos os nossos processos, levando aos nossos clientes assertividade com retenção dos talentos, com um único objetivo: Maximizar os seus resultados com consistência e isso começa no nosso processo seletivo.</p>

                    <p>Somos focados em empresas que realmente tenham esses mesmos valores e que buscam a mesma coisa que acreditamos.</p>

                    <span>Esse é o nosso DNA!</span>

                    <div class="content-info-estrategia">
                        <img src="<?=get_template_directory_uri()?>/dist/img/sobre/objetivo.png" alt="Pessoa subindo uma escada e botando uma bandeira no final, sinalizando vitória.">
                        <span>Entre a estratégia e a execução com com o Grupo Sartori</span>
                    </div>
                    <img src="<?=get_template_directory_uri()?>/dist/img/home/pontilhado.png" alt="Pontilhado para dar detalhe de fundo">
                </div>

                <div class="sobre-visao-missao">
                    <div class="sobre-visao-content">
                        <img src="<?=get_template_directory_uri()?>/dist/img/sobre/visao.png" alt="Desenho de um olho">
                        <h2>Visão</h2>
                        <p>Ser a principal referência em Consultoria de RH do País até 2025.</p>
                    </div>

                    <div class="sobre-missao-content">
                        <img src="<?=get_template_directory_uri()?>/dist/img/sobre/missao.png" alt="Desenho de um olho">
                        <h2>Missão</h2>
                        <p>Ser a empresa que melhor entende e satisfaz as necessidades das empresas e candidatos, de forma humana, personalizada e com resultados consistentes.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sobre-valores">
            <div class="sobre-valores-content">
                <h2>VALORES</h2>
                <div class="sobre-valores-grid">
                    <?php 
                        $valores = array(
                            array("valor"=>"Honestidade", "texto"=>"Verdade acima de qualquer coisa."),
                            array("valor"=>"Inovação", "texto"=>"Trazer aos nossos clientes o que há de em tecnologia para Gestão de Pessoas."),
                            array("valor"=>"Empreendedorismo", "texto"=>"Pensamento de dono e protagonismo, fazem parte do nosso jeito."),
                            array("valor"=>"Agilidade", "texto"=>"Ser rápido em nossas entregas, mantendo a qualidade acima da média."),
                            array("valor"=>"Respeito ao Ser Humano", "texto"=>"Feedback aqui é uma regra, respeitamos o tempo de cada pessoa, seja empresa ou candidato."),
                            array("valor"=>"Ética com transparência", "texto"=>"Não negociar nossos valores ou agir de forma diferente do nosso código de conduta.")
                        )
                    ?>
                    <?php foreach($valores as $key => $valor) { ?>
                        <div class="sobre-valores-valor">
                            <div class="valor-img-wrapper">
                                <img src="<?=get_template_directory_uri()?>/dist/img/sobre/checkmark.png " alt="Checkmark">
                            </div>
                            <div class="valor-info-wrapper">
                                <h3><?= $valor["valor"] ?>:</h3>
                                <p><?= $valor["texto"] ?></p>
                            </div>
                        </div>
                    <?php } ?>
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