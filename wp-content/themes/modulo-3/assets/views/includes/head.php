<!DOCTYPE html>
<html lang="pt-br" style="margin-top: 0 !important">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page?> - Grupo Sartori</title>

    <!-- Fonte Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">

    <link rel="icon" href="<?=get_template_directory_uri()?>/dist/img/favicon.ico" type="image/x-icon" />

    <?php if($page == 'Home') { ?>
        <!-- SLICK SLIDER -->
        <link href="<?php echo get_template_directory_uri()?>/assets/utils/slick.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri()?>/assets/utils/slick-theme.css" rel="stylesheet">
    <?php } ?>

    <?php if(strlen($page) > 20) {?>
        <!-- fonte Noto Sans -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials-theme-classic.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials-theme-classic.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jsSocials/1.5.0/jssocials.css" rel="stylesheet">
    <?php } ?>

    <?php if($page == 'Para Profissionais' or $page == 'Para sua empresa') {?>
        <link href="<?php echo get_template_directory_uri()?>/assets/utils/slick.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri()?>/assets/utils/slick-theme.css" rel="stylesheet">
    <?php } ?>

    <?php 
        wp_head();
    ?>
    <!-- <?php //get_template_directory_uri(); ?> usar pra imagens, css, scripts... -->
</head>