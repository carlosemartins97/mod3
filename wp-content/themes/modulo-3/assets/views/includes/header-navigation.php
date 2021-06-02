<header class="header-navigation">
    <div class="filtro-blog-header">
        <ul>
            <li><a href="home">Home</a></li>

            <?php if($page == 'Blog'){ ?>
                <li><a href="<?=$page?>">Blog</a></li>
            <?php } elseif($page == 'Sobre Nós') {?>
                <li><a href="sobre"><?=$page?></a></li>
            <?php } else { ?>
                <li><a href="blog">Blog</a></li>
            <?php } ?>
        </ul>
    </div>
</header>