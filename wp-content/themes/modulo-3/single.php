<?php 
    $page = get_the_title();
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body onload="integra()"> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <main class="main-integra">

        

        <section class="integra-title">
        <?php include_once('assets/views/includes/header-navigation.php'); ?>
            <div class="integra-title-content">
                <span><?= get_the_date('d/m/Y') ?></span>
                <h1><?= get_the_title() ?></h1>
            </div>
        </section>

        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?=get_the_title()?>" class="integra-thumbnail">

        <section class="integra-content-wrapper">
            <div class="integra-content">
                <p><?=get_the_content()?></p>
            </div>
            <div class="integra-content-social">
                <span>Compartilhe:</span>
                <div class="integra-socials"></div>
            </div>
        </section>

        <section class="integra-noticias-relacionadas">
            <div class="noticias-relacionadas-content">
                <h2>Notícias Relacionadas</h2>

                <div class="noticias-relacionadas">
                <?php 
                    $original_title = get_the_title();
                    $args = array(
                        'post_type' => 'post',
                    );

                    $the_query = new WP_Query($args); ?>
                    
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <?php if(get_the_title() != $original_title) {?>
                                <a href="<?=get_permalink()?>" class="post-link">
                                    <div class="noticias-relacionadas-post">
                                        <div class="post-img-wrapper">
                                            <img src="<?= get_the_post_thumbnail_url()?>" alt="<?=get_the_title()?>">
                                        </div>
                                        <div  class="post-text-wrapper">
                                            <span class="post-date"><?=get_the_date('d/m/Y')?></span>
                                            <h3><?php the_title(); ?></h3>
                                            <span class="link-leia-mais">Leia Mais<img src="<?=get_template_directory_uri()?>/dist/img/curriculo/seta.png" alt="Seta pra direita"></span>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php echo 'Sorry, no posts matched your criteria'; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    </main>
   
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials.min.js"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>