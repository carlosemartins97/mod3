<?php 
    $page = "Blog";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="blog()"> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <main class="main-blog">

        <section class="listagem-blog">
            <div class="listagem-blog-content">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <div class="listagem-blog-post">
                        <div class="listagem-post-thumbnail">
                            <img src="<?=get_the_post_thumbnail_url()?>" alt="Imagem da notícia">
                        </div>
                        <a href="<?=get_permalink()?>" class="listagem-post-texto">
                            <span class="listagem-post-date"><?= get_the_date('d/m/Y') ?></span>
                            <h2><?=get_the_title()?></h2>
                            
                            <p><?=get_the_excerpt()?></p>
                            <span class="link-leia-mais" href="<?=get_permalink()?>">Leia Mais<img src="<?=get_template_directory_uri()?>/dist/img/curriculo/seta.png" alt="Seta pra direita"></span>
                        </a>
                    </div>
                <?php endwhile; endif; ?>
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