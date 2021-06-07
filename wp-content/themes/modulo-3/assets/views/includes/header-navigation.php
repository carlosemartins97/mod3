<?php $homeUrl = get_home_url(); ?>
<header class="header-navigation">
    <div class="filtro-blog-header">
        <ul>
            <li><a href="<?= $homeUrl ?>">Home</a></li>

            <?php if($page == 'Blog'){ ?>
                <li><a href="<?=$homeUrl?>/blog">Blog</a></li>
            <?php } elseif($page == 'Sobre Nós') {?>
                <li><a href="<?=$homeUrl?>/sobre"><?=$page?></a></li>
            <?php } elseif($page == 'Para Profissionais') {?>
                <li><a href="<?=$homeUrl?>/para-profissionais"><?=$page?></a></li>
            <?php } elseif($page == 'Saiu na mídia') {?>
                <li><a href="<?=$homeUrl?>/saiu_midia"><?=$page?></a></li>
            <?php } else { ?>
                <li><a href="blog">Blog</a></li>
            <?php } ?>
        </ul>
    </div>
</header>