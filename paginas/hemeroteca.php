<?php include('../control/conexion.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Battambang&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/Image-Hover-Effect.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="../assets/css/Social-Icons.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>

<div id="contenido" style="display:none">
    
   <?php include('../componentes/navbar.php') ?>
   <header style="margin-top: 5%;">
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-6"><img class="img-fluid" src="../assets/img/logo.png" /></div>
                <div class="col-md-6">
                    <div class="social-icons"
                        style="font-weight: bold;/*margin-top: 0.5em;*/text-align: center;font-size: 1.2em;color: #00375a;">
                        <p id="fecha">26 de Mayo del 2022</p><a
                            href="https://api.whatsapp.com/send?phone=522226920068"><i
                                class="icon ion-social-whatsapp"></i></a>
                        <a href="https://twitter.com/DTeziutlan"><i class="icon ion-social-twitter"></i></a><a
                            href="https://www.facebook.com/NoticiasDiariodeteziutlan"><i
                                class="icon ion-social-facebook"></i></a><a
                            href="https://www.instagram.com/diariodeteziutlan/"><i
                                class="icon ion-social-instagram"></i></a><a
                            href="https://www.youtube.com/channel/UChzC0P7l3CbIJcTJfUuj-Yg/videos"><i
                                class="icon ion-social-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <h1 class="text-center text-secondary mt-2 mb-3">Edición impresa</h1>
    <div class="p-3">
    <?php include('../componentes/hemeroteca/hemerotecaout.php') ?>
    
    <footer style="padding-bottom: 90px;padding-top: 190px;">
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-6"><img class="img-fluid" src="../assets/img/logo.png" width="70%" /></div>
                <div class="col-md-6">
                    <div class="social-icons"
                        style="font-weight: bold;/*margin-top: 0.5em;*/text-align: center;font-size: 1.2em;color: #00375a;">
                        <footer class="footer-basic">
                            <ul class="list-inline pb-2">
                                <li class="list-inline-item"><a href="#">Contacto</a></li>
                                <li class="list-inline-item"><a href="#">Directorio</a></li>
                                <li class="list-inline-item"><a href="#">Quienes somos</a></li>
                                <li class="list-inline-item"></li>
                            </ul>
                        </footer><a href="https://api.whatsapp.com/send?phone=522226920068"><i
                                class="icon ion-social-whatsapp"></i></a>
                        <a href="https://twitter.com/DTeziutlan"><i class="icon ion-social-twitter"></i></a><a
                            href="https://www.facebook.com/NoticiasDiariodeteziutlan"><i
                                class="icon ion-social-facebook"></i></a><a
                            href="https://www.instagram.com/diariodeteziutlan/"><i
                                class="icon ion-social-instagram"></i></a><a
                            href="https://www.youtube.com/channel/UChzC0P7l3CbIJcTJfUuj-Yg/videos"><i
                                class="icon ion-social-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php include('../componentes/home/bannerpage.php') ?>
    <?php include('../componentes/login.php') ?>


</div>
<?php include('../componentes/loader.php') ?>

    <?php mysqli_close($con);?>


    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="../assets/js/a.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
    <script src="../assets/js/Simple-Slider.js"></script>
    <script src="../assets/js/z.js"></script>

</body>

</html>