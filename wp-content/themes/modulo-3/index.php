<?php 
    $page = "Blog";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <main class="main-blog">
        <?php include_once('assets/views/includes/header-navigation.php'); ?>

        <section class="filtro-blog">
            <div class="filtro-blog-content">
                <div class="filtro-blog-form">
                    <h1>Últimas do <br> blog</h1>

                    <form action="#">
                        <label for="pesquisa"><img src="<?=get_template_directory_uri()?>/dist/img/blog/icons/filter.png" alt="filtro de pesquisa"> O que você procura</label>
                        <div class="pesquisa-wrapper">
                            <input id="pesquisa" name="pesquisa" type="text">
                            <button type="submit">OK</button>
                        </div>
                        <div class="select-wrapper">
                            <select name="categoria" id="categoria">
                                <option value="">Categoria</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="listagem-blog">
            <div class="listagem-blog-content">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <a href="<?=get_permalink()?>" class="blog-post-link">
                        <div class="listagem-blog-post">
                            <div class="listagem-post-thumbnail">
                                <img src="<?=get_the_post_thumbnail_url()?>" alt="Imagem da notícia">
                            </div>
                            <div  class="listagem-post-texto">
                                <span class="listagem-post-date"><?= get_the_date('d/m/Y') ?></span>
                                <h2><?=get_the_title()?></h2>
                                
                                <p><?=get_the_excerpt()?></p>
                                <span class="link-leia-mais" >Leia Mais<img src="<?=get_template_directory_uri()?>/dist/img/curriculo/seta.png" alt="Seta pra direita"></span>
                            </div>
                        </div>
                    </a>
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
    <script src="<?= get_template_directory_uri()?>/assets/js/slick.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>