<?php 
    $page = "Home";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>