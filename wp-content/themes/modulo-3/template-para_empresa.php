<?php 
    /* 
        Template Name: Para Empresa
    */
    $page = "Para sua empresa";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="empresa()">
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>

    <main class="empresa">

        <section class="profissionais-header">
            <?php include_once get_template_directory() . '/assets/views/includes/header-navigation.php' ?>
            
            <div class="profissionais-header-content">
                <div class="profissionais-header-wrapper">
                    <img src="<?=get_template_directory_uri()?>/dist/img/min-logo.png" alt="Logo simples da empresa Grupo Sartori">
                    <h1>Para Sua Empresa</h1>
                </div>
            </div>
        </section>

        
        <?php 
            $args = array(
                'post_type' => 'intro_empresa',
                'posts_per_page'=> 1,
            );
            
            $recrutamentoQuery = new WP_Query($args);
        ?>
        <section class="profissionais-carreira">
            <?php if($recrutamentoQuery->have_posts()): while($recrutamentoQuery->have_posts()): $recrutamentoQuery->the_post(); ?>
                <div class="profissionais-carreira-content">
                    <h2><?=get_the_title()?></h2>

                    <?=the_content()?>
                </div>
            <?php endwhile; endif; ?>
        </section>


        <?php 
            $args = array(
                'post_type' => 'thumb_empresa',
                'posts_per_page'=> 1,
            );
            
            $thumbQuery = new WP_Query($args);
        ?>  
        <section class="profissionais-thumb">
            <?php if($thumbQuery->have_posts()): while($thumbQuery->have_posts()): $thumbQuery->the_post(); ?>
                <img src="<?=get_field("imagem")?>" alt="<?=get_the_title()?>">
            <?php endwhile; endif; ?>
        </section>


        <?php 
            $args = array(
                'post_type' => 'numeros_empresa',
                'posts_per_page'=> 4,
                'order' => 'asc'
            );
            
            $numerosQuery = new WP_Query($args);
        ?>
        <section class="empresa-numeros">
            <div class="numeros-content">
                <?php if($numerosQuery->have_posts()): while($numerosQuery->have_posts()): $numerosQuery->the_post(); ?>
                    <div class="numeros-post">
                        <div class="numeros-post-header">
                            <h2><?=get_the_title()?></h2>
                            <p><?=get_field("descricao")?></p>
                        </div>
                        <img src="<?=get_template_directory_uri()?>/dist/img/profissionais/pontilhado.png" alt="Pontilhado">
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </section>

        <?php 
            $args = array(
                'post_type' => 'prog_empresa',
                'posts_per_page'=> 4,
                'order' => 'asc'
            );
            
            $programaQuery = new WP_Query($args);
        ?>
        <section class="profissionais-programa">
            <div class="profissionais-programa-content">
                    <div class="opcoes-programa">
                        <?php if($programaQuery->have_posts()): while($programaQuery->have_posts()): $programaQuery->the_post(); ?>
                            <div class="opcoes"><h2><?=get_the_title()?></h2></div>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="info-programa">
                        <?php if($programaQuery->have_posts()): while($programaQuery->have_posts()): $programaQuery->the_post(); ?>
                            <div class="info">
                                <?=the_content()?>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                
            </div>
        </section>

        <?php 
            $args = array(
                'post_type' => 'treinamentos_empresa',
                'posts_per_page'=> 5,
                'order' => 'asc'
            );
            
            $treinamentosQuery = new WP_Query($args);
        ?>
        <section class="empresa-treinamentos">
            <h2>Treinamentos</h2>
            <div class="treinamentos-content">
                
                <div class="treinamentos-wrapper">
                    <?php if($treinamentosQuery->have_posts()): while($treinamentosQuery->have_posts()): $treinamentosQuery->the_post(); ?>
                        <div class="treinamentos active">
                            <div class="img-wrapper">
                                <img src="<?=get_field("icone")?>" alt="<?=get_the_title()?>">
                            </div>
                            <span><?=get_the_title()?></span>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="info-treinamento">
                    <?php if($treinamentosQuery->have_posts()): while($treinamentosQuery->have_posts()): $treinamentosQuery->the_post(); ?>
                        <div class="info">
                            <?=the_content()?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>

        

    <?php 
        $args = array(
            'post_type' => 'footer_empresa',
            'posts_per_page'=> 1,
        );
        
        $footerQuery = new WP_Query($args);
    ?>
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/slick.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>