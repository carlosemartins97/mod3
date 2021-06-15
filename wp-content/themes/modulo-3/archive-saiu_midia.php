<?php 
    $page = "Saiu na mídia";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="midia()"> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <main class="main-saiu_midia">

        <section class="filtro-saiu_midia">
            <?php include_once('assets/views/includes/header-navigation.php'); ?>
            <div class="filtro-saiu_midia-content">
                <div class="filtro-saiu_midia-form">
                    <h1>Saiu na mídia</h1>

                    <form action="#">
                        <label for="pesquisa"><img src="<?=get_template_directory_uri()?>/dist/img/blog/icons/filter.png" alt="filtro de pesquisa"> Filtro por período</label>
                        <div class="pesquisa-wrapper"> 
                            <span>De:</span>
                            <input id="de" name="de" type="text">
                        </div>
                        <div class="pesquisa-wrapper">
                        <span>Até:</span>
                            <input id="ate" name="ate" type="text">
                            <button type="submit">OK</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php
        //Protect against arbitrary paged values
        $paged = $_GET['pagina']??1;
        
        $args = array(
            'posts_per_page' => 5,
            'paged' => $paged,
            'post_type' => 'saiu_midia',
        );
        
        query_posts( $args );
        ?>
        <section class="listagem-saiu_midia">
            <div class="listagem-saiu_midia-content">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <div class="saiu_midia-post">
                        <div class="post-info">
                            <span class="post-data"><?=get_field('data')?></span>
                            <h2 class="post-titulo"><?=get_the_title()?></h2>
                            <span class="post-fonte"><img src="<?=get_template_directory_uri()?>/dist/img/saiu-midia/icons/globo.png" alt="Imagem de um globo"> Fonte: <?=get_field('fonte')?></span>
                        </div>
                        <div class="post-link">
                            <a href="<?=get_field('link')?>">ver na mídia <img src="<?=get_template_directory_uri()?>/dist/img/curriculo/seta.png" alt="Seta pra direita"></a>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </section>

        <section class="pagination-blog">
            <?php if(have_posts()):?>
                <div class="pagination-blog-content">
                    <?php
                        echo paginate_links( array(
                            'current' => $paged,
                            'format' => '?pagina=%#%',
                        ) );
                    ?>
                </div>
            <?php endif; ?>
        </section>
    </main>
   
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>