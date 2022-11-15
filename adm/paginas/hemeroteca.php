<?php
session_start();

if(isset($_SESSION['correo']))
{
  include('../../control/conexion.php');

}else{
    header('Location: ../../index.php');

}
?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Blank Page - Brand</title>
    <link
      rel="stylesheet"
      href="../../assetsadm/bootstrap/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    />
    <link
      rel="stylesheet"
      href="../../assetsadm/fonts/fontawesome-all.min.css"
    />
    <link rel="stylesheet" href="../../assetsadm/fonts/font-awesome.min.css" />
    <link
      rel="stylesheet"
      href="../../assetsadm/fonts/fontawesome5-overrides.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
  
    <link rel="stylesheet" href="../../assetsadm/css/Login-Form-Clean.css" />
    <link rel="stylesheet" href="../../assetsadm/css/untitled.css" />
  </head>

  <body id="page-top">
  <div id="contenido" style="display:none;">

    <div id="wrapper">
    <?php
    $menu="hemeroteca";

    include('../componentes/menu/menulateral.php') ?>
    
      <div
        id="content-wrapper"
        class="d-flex flex-column"
        style="background-color: white"
      >
        <div id="content">
          <nav
            class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top"
          >
            <div class="container-fluid">
              <button
                id="sidebarToggleTop"
                class="btn btn-link d-md-none rounded-circle me-3"
                type="button"
              >
                <i class="fas fa-bars"></i>
              </button>
              <ul class="navbar-nav flex-nowrap ms-auto">
                <li class="nav-item dropdown d-sm-none no-arrow">
                  <a
                    class="dropdown-toggle nav-link"
                    aria-expanded="false"
                    data-bs-toggle="dropdown"
                    href="#"
                    ><i class="fas fa-search"></i
                  ></a>
                  <div
                    class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                    aria-labelledby="searchDropdown"
                  >
                    <form class="me-auto navbar-search w-100">
                      <div class="input-group">
                        <input
                          class="bg-light form-control border-0 small"
                          type="text"
                          placeholder="Search for ..."
                        />
                        <div class="input-group-append">
                          <button class="btn btn-primary py-0" type="button">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
                <div class="d-none d-sm-block topbar-divider"></div>
                <li class="nav-item dropdown no-arrow">
                  <div class="nav-item dropdown no-arrow">
                    <a
                      class="dropdown-toggle nav-link"
                      aria-expanded="false"
                      data-bs-toggle="dropdown"
                      href="#"
                      ><span class="d-none d-lg-inline me-2 text-gray-600 small"
                        >Admin</span
                      ><img
                        class="border rounded-circle img-profile"
                        src="../../assetsadm/img/avatars/2.jpg"
                    /></a>
                    <div
                      class="dropdown-menu shadow dropdown-menu-end animated--grow-in"
                    >
                      <a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-user fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        > Profile</a
                      ><a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        > Settings</a
                      ><a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-list fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        > Activity log</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        > Logout</a
                      >
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid">
          <section class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Hemeroteca</h2>
        </div>
        <div class="row articles">
    <div class="col-md-12 item"><a href="#"></a><input class="form-control" id="date" type="date" />
        <h3 class="name mt-3">Seleccione el pdf</h3><input id="pdf" class="form-control" type="file" accept="application/pdf" />

        <?php
date_default_timezone_set("America/Mexico_City");

$fec=date('Ymd');
$sql = "SELECT url FROM hemeroteca WHERE idhemeroteca='$fec'";
$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {


       echo'  <div id="adobe-dc-view" style="height: 1000px; width: 100%;"></div>


       <script type="text/javascript">
       document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
         var adobeDCView = new AdobeDC.View({clientId: "8b774ee0abe7442497b543371ccddb34", divId: "adobe-dc-view"});
         adobeDCView.previewFile({
           content:{location: {url: "../'.$row["url"].'"}},
           metaData:{fileName: "Bodea Brochure.pdf"}
         }, {embedMode: "SIZED_CONTAINER"});
       });
     </script>';
  }
                        ?>
                </div>
    </div>
</div>
    </div>
</section>

</div>

    <?php include('../componentes/loader.php') ?>

    <script src="../../assetsadm/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/bs-init.js"></script>    
    <script src="../../assets/js/a.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="../../assets/js/Simple-Slider.js"></script>

    <script src="../../assetsadm/js/theme.js"></script>
    <script src="../../assetsadm/js/adm.js"></script>
    <script src="../../assetsadm/js/hemeroteca.js"></script>
    <script src="https://documentcloud.adobe.com/view-sdk/viewer.js"></script>

  </body>
</html>
