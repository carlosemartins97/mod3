<?php 
    $page = "Home";
    include_once get_template_directory() . '/assets/views/includes/head.php' 
?> 

<body> 
    <?php include_once get_template_directory() . '/assets/views/includes/nav.php' ?>
    
    <?php include_once get_template_directory() . '/assets/views/includes/footer.php' ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5ced3d7c26.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#collapse-nav-button').click(function(){
                $('.nav-bar').slideToggle();
            })
        })
        $(window).resize(function(){
            var windowWidth = window.innerWidth;
            if(windowWidth >= 768){
                $('.nav-bar').css('display','flex')
            }
        })
    </script>
</body>
</html>