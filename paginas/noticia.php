<?php include('../control/conexion.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Your Website Title" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
    <title>Titulo de la nota</title>
    
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
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v14.0&appId=434430735194134&autoLogAppEvents=1" nonce="0DajHvyd"></script>



    <div id="contenido" style="display:none">
    
   <?php include('../componentes/noticia/navbar.php') ?>

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
    <div class="shadow-sm p-3">
    <?php include('../componentes/noticia/nota.php') ?>

    </div>
    
    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a id="afbb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>


    <footer style="padding-bottom: 90px;">
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
    <div id="modal-1" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <section class="login-clean">
                        <form method="post">
                            <h2 class="visually-hidden">Login Form</h2>
                            <div class="illustration"><img class="img-fluid" src="logo.png" /></div>
                            <div class="mb-3"><input class="form-control" type="email" name="email"
                                    placeholder="Correo" /></div>
                            <div class="mb-3"><input class="form-control" type="password" name="password"
                                    placeholder="Contraseña" /></div>
                            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Iniciar
                                    sesión</button></div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

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
    <script src="../assets/js/noticia.js" type="module"></script>

</body>

</html>