<?php $homeUrl = get_home_url();

if($page == 'Para Profissionais') {
    $args = array(
        'post_type' => 'info_footer',
        'posts_per_page'=> 1,
    );
    
    $footerQuery = new WP_Query($args);
}
?>

<section class="cadastre-curriculo">
    <div class="cadastre-curriculo-content">
        <?php if(isset($footerQuery)) { ?>
            <?php if($footerQuery->have_posts()): while($footerQuery->have_posts()): $footerQuery->the_post(); ?>
                <div class="curriculo-info">
                    <h2><?=get_field('titulo_em_negrito')?> <span><?=get_field('titulo_sem_negrito')?></span></h2>

                    <p><?=get_field('descricao')?></p>
                </div>
                <div class="curriculo-button">
                    <img src="<?=get_template_directory_uri()?>/dist/img/curriculo/dotted2.png" alt="Imagem de detalhe de fundo com vários pontos.">
                    <a href="<?=get_field('link_botao')?>"><?=get_field('texto_botao')?> <img src="<?=get_template_directory_uri()?>/dist/img/curriculo/seta.png" alt="Seta pra direita"></a>
                </div>
            <?php endwhile; endif; ?>
        <?php } else { ?>
            <div class="curriculo-info">
                    <h2>Cadastre <span>Seu currículo</span></h2>

                    <p>Cadastre-se grátis e de forma rápida para se candidatar às melhores vagas.</p>
                </div>
                <div class="curriculo-button">
                    <img src="<?=get_template_directory_uri()?>/dist/img/curriculo/dotted2.png" alt="Imagem de detalhe de fundo com vários pontos.">
                    <a href="#">Cadastre-se aqui<img src="<?=get_template_directory_uri()?>/dist/img/curriculo/seta.png" alt="Seta pra direita"></a>
                </div>
        <?php } ?>
    </div>
</section>

<section class="contato-container">
    <div class="contato-content">
        <div class="contato-acesso-rapido">
            <h3>Acesso Rápido</h3>
            <ul>
                <li>sobre nós</li>
                <li>para sua empresa</li>
                <li>para profissionais</li>
                <li>vagas</li>
                <li>saiu na mídia</li>
                <li>quero saber mais</li>
                <li>escola do comportamento</li>
                <li>blog</li>
            </ul>
        </div>
        <div class="contato-onde-estamos">
            <div class="onde-estamos-bloco">
                <h3>onde estamos</h3>
                <span>Av. Senador Feijí 686</span>
                <span>Vila Mathias, Santos - SP</span>
                <span>CEP/11015-504</span>
            </div>
            <div class="onde-estamos-bloco">
                <h3 id="contato-acompanhe-nos">acompanhe-nos</h3>
                <div class="onde-estamos-social">
                    <a href="#"><img src="<?=get_template_directory_uri()?>/dist/img/footer/face-icon.png" alt="Ícone do facebook"></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>/dist/img/footer/insta-icon.png" alt="Ícone do Instagram"></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>/dist/img/footer/store-icon.png" alt="Ícone do Youtube"></a>
                </div>
            </div>
        </div>
        <div class="contato-contatos">
            <div class="contato-contatos-content">
                <h3 id="titulo-contato">contatos</h3>
                <a href="tel:13991590164" class="contato-contatos-card">
                    <img src="<?=get_template_directory_uri()?>/dist/img/footer/phone-icon.png" alt="Ícone de telefone">
                    <div class="contatos-card-info">
                        <small>Comercial</small>
                        <span>(13)<strong> 99159.0164</strong></span>
                    </div>
                </a>
                <a href="tel:13991037559" class="contato-contatos-card">
                    <img src="<?=get_template_directory_uri()?>/dist/img/footer/phone-icon.png" alt="Ícone de telefone">
                    <div class="contatos-card-info">
                        <small>suporte ao candidato</small>
                        <span>(13)<strong> 99103-7559</strong></span>
                    </div>
                </a>
                <a href="tel:13991037559" class="contato-contatos-card">
                    <img src="<?=get_template_directory_uri()?>/dist/img/footer/phone-icon.png" alt="Ícone de telefone">
                    <div class="contatos-card-info">
                        <small>sucesso do cliente</small>
                        <span>(13)<strong> 99103-7559</strong></span>
                    </div>
                </a>
            </div>
            <a href="mailto:contato@sartoridho.com.br?subject=Dúvida">contato@sartoridho.com.br</a>
        </div>
    </div>
</section>

<footer>
    <div class="footer-container">
        <a class="footer-link-logo" href="<?=$homeUrl?>"><img class="footer-logo" src="<?php echo get_template_directory_uri()?>/dist/img/logo.png" alt="Logo do Grupo Sartori"></a>
        <span id="direitos-reservados">GRUPO SARTORI © 2021 - Todos os direitos reservados</span>
        <a href="#" id="desenvolvido-por">DESENVOLVIDO POR <img src="<?php echo get_template_directory_uri()?>/dist/img/kbr-logo.png" alt="Logo da empresa KBRTEC"></a>
    </div>
</footer>