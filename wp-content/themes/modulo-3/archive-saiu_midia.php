<?php 
    $page = "Saiu na mídia";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <main class="main-saiu_midia">
        <?php include_once('assets/views/includes/header-navigation.php'); ?>

        <section class="filtro-saiu_midia">
            <div class="filtro-saiu_midia-content">
                <div class="filtro-saiu_midia-form">
                    <h1>Saiu na mídia</h1>

                    <form action="#">
                        <label for="pesquisa"><img src="<?=get_template_directory_uri()?>/dist/img/blog/icons/filter.png" alt="filtro de pesquisa"> Filtro por período</label>
                        <div class="pesquisa-wrapper"> 
                            <span>De:</span>
                            <input id="pesquisa" name="pesquisa" type="text">
                        </div>
                        <div class="pesquisa-wrapper">
                        <span>Até:</span>
                            <input id="pesquisa" name="pesquisa" type="text">
                            <button type="submit">OK</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

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
            <div class="pagination-blog-content">
                <div class="pagination-prev">
                    <a href="#"><img src="<?=get_template_directory_uri()?>/dist/img/blog/icons/pagination-left.png" alt="seta pra esquerda">Anterior</a>
                </div>
                <div class="pagination-pages">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#" class="active">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
                <div class="pagination-next">
                    <a href="">Próximo<img src="<?=get_template_directory_uri()?>/dist/img/blog/icons/pagination-right.png" alt="seta pra direita"></a>
                </div>
            </div>
        </section>
    </main>
   
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>