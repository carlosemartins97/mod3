<?php 
    $page = "Blog";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <main class="main-blog">
        

        <section class="filtro-blog">
            <?php include_once('assets/views/includes/header-navigation.php'); ?>
            <div class="filtro-blog-content">
                <div class="filtro-blog-form">
                    <h1>Últimas do blog</h1>

                    <form action="<?echo home_url('/'); ?>" role="search" method="get" >
                        <label for="pesquisa"><img src="<?=get_template_directory_uri()?>/dist/img/blog/icons/filter.png" alt="filtro de pesquisa"> O que você procura</label>
                        <div class="pesquisa-wrapper">
                            <input id="s" name="s" type="text" value="">
                            <button type="submit">OK</button>
                        </div>
                        <div class="select-wrapper">
                            <select name="cat" id="cat">
                                <option value="">Categoria</option>
                                <option value="2">Santos</option>
                                <option value="1">Brasil</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php 
            $paged = ( get_query_var( 'paged' ) );
            $args = array(
              'posts_per_page' => 2,
              'paged'          => $paged,
              'post_type' => 'post'
            );
            
            query_posts( $args ); 
        ?>
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
                <?php endwhile;  endif; ?>
            </div>
        </section>

        <section class="pagination-blog">
            <?php if(have_posts()): ?>
                <div class="pagination-blog-content">
                    <?php 
                        echo paginate_links();
                    ?>
                </div>
            <?php endif; ?>
        </section>
    </main>
   
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>