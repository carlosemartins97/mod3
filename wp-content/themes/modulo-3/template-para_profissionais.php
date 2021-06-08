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

        <?php 
            $args = array(
                'post_type' => 'intro_profissionais',
                'posts_per_page'=> 1,
            );
            
            $introQuery = new WP_Query($args);
        ?>
        <section class="profissionais-carreira">
            <?php if($introQuery->have_posts()): while($introQuery->have_posts()): $introQuery->the_post(); ?>
                <div class="profissionais-carreira-content">
                    <h2><?=get_the_title()?></h2>

                    <?=the_content()?>
                </div>
            <?php endwhile; endif; ?>
        </section>

        <?php 
            $args = array(
                'post_type' => 'thumb_profissionais',
                'posts_per_page'=> 1,
            );
            
            $thumbQuery = new WP_Query($args);
        ?>           
        <section class="profissionais-thumb">
            <?php if($thumbQuery->have_posts()): while($thumbQuery->have_posts()): $thumbQuery->the_post(); ?>
                <img src="<?=get_field("imagem")?>" alt="<?=get_the_title()?>">
            <?php endwhile; endif; ?>
        </section>

        <section class="profissionais-grid">
            <div class="profissionais-grid-content">
                <h2>O programa é estruturado em 6 etapas, sendo:</h2>
                <div class="grid-wrapper">

                    <?php 
                        $args = array(
                            'post_type' => 'grid_profissionais',
                            'posts_per_page'=> 6,
                            'order' => 'ASC',
                        );
                        
                        $gridQuery = new WP_Query($args);
                    ?>
                    <?php if($gridQuery->have_posts()): while($gridQuery->have_posts()): $gridQuery->the_post(); ?>
                        <div class="profissionais-grid-post">
                            <div class="grid-post-header">
                                <span class="numero"><?=get_field("numero")?></span>
                                <span class="etapa"><?=get_the_title()?></span>
                            </div>
                            <img src="<?=get_template_directory_uri()?>/dist/img/profissionais/pontilhado.png" alt="pontilhado">
                        </div>
                    <?php endwhile; endif; ?>
                </div>

                <a href="#" class="link-leia-mais">Consulte-nos <img src="<?=get_template_directory_uri()?>/dist/img/curriculo/seta.png" alt="Seta pra direita"></a>
                
            </div>
        </section>

        <?php 
            $args = array(
                'post_type' => 'prog_profissionais',
                'posts_per_page'=> 2,
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
    </main>

    <?php 
        $args = array(
            'post_type' => 'info_footer',
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