<?php include('control/conexion.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>diario</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Battambang&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Image-Hover-Effect.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="contenido" style="display:none;">
        <?php include('componentes/home/navbar_index.php') ?>

    
    <?php include('componentes/home/social_header.php') ?>

    <div class="bg-fondo">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-8" data-bss-hover-animate="pulse">
                <?php include('componentes/home/slider_principal.php') ?>

                </div>
                <div class="col-md-4">
                <?php include('componentes/home/ultima_nota.php') ?>

                </div>
            </div>
        </div>
    
    <div class="shadow-sm p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-lg-flex align-items-lg-center" style="height: 200px;">
                    <h1 style="color: #022f84;font-size: 3.5em;margin-left: 3%;margin-top: 0.2em;font-family: titulo;border-bottom: 2px solid #02609d;">Al momento</h1>
                </div>
                <div class="col-md-6">
                    <h1 style="color: #022f84;font-size: 3.5em;margin-left: 3%;opacity: 0;margin-top: 0.2em;font-family: titulo;border-bottom: 2px solid #02609d;">Al momento</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-2">
                   
                        
                        <?php include('componentes/home/ultimas_noticias.php') ?>
                        
                
                </div>
                <div class="col-md-4 pt-4"><img src="https://www.meteored.mx/wimages/foto4da932267bcc3b217bd9697ba8d82e3e.png">
                <h5 class="text-center text-secondary mt-5 mb-1">Edición impresa</h5>
            

            <?php include('componentes/hemeroteca/hemeroteca.php') ?>
            
            </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
            



                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                <?php $id=2; include('componentes/home/carousel.php') ?>

                </div>
                <div class="col-md-4">
                    <?php $id=3; include('componentes/home/carousel.php') ?>

                </div>
                <div class="col-md-4">
                <?php $id=4; include('componentes/home/carousel.php') ?>

                </div>
            </div>
        </div>
    </div>
    <footer style="margin-bottom: 150px;">
        <div class="container mt-5 mb-4">
            

            <?php include('componentes/home/social_footer.php') ?>


            
                    <?php include('componentes/home/banner.php') ?>

                    
        </div>
    </footer>
    

    <?php include('componentes/home/login.php') ?>




    </div>

    <?php include('componentes/loader_index.php') ?>

    <?php mysqli_close($con);?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="assets/js/a.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/z.js"></script>
    <script src="assets/js/index.js"></script>

</body>

</html>