<?php $homeUrl = get_home_url(); ?>

<nav>
    <div class="nav-content">
        <div class="nav-header">
            <a class="nav-link-logo" href="<?=$homeUrl?>"><img class="nav-logo" src="<?php echo get_template_directory_uri()?>/dist/img/logo.png" alt="Logo do Grupo Sartori"></a>
            <i class="fas fa-bars" id="collapse-nav-button"></i></button>
        </div>
        
        
        <ul class="nav-bar">
            <li class="nav-link"><a href="<?=$homeUrl?>/sobre">Sobre nós</a></li>
            <li class="nav-link"><a href="#">Para sua Empresa</a></li>
            <li class="nav-link"><a href="<?=$homeUrl?>/para-profissionais">Para profissionais</a></li>
            <li class="nav-link"><a href="<?=$homeUrl?>/blog">Blog</a></li>
            <li class="nav-link"><a href="<?=$homeUrl?>/saiu_midia">Saiu na mídia</a></li>
            <li class="nav-link"><a href="#">Clientes</a></li>
        </ul>
        <a href="#" id="nav-contato" >Contatos</a>
    </div>
</nav>