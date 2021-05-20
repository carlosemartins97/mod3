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

    <?php if($page == 'Home') { ?>
        
    <?php } ?>

    <?php 
        wp_head();
    ?>
    <!-- <?php //get_template_directory_uri(); ?> usar pra imagens, css, scripts... -->
</head>