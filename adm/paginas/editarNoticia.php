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
      <nav
        class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
      >
        <div class="container-fluid d-flex flex-column p-0">
          <a
            class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0 bg-white"
            href="#"
          >
            <div class="sidebar-brand-icon">
              <img class="img-fluid" src="../../assetsadm/img/logo.png" />
            </div>
          </a>
          <hr class="sidebar-divider my-0" />
          <ul id="accordionSidebar" class="navbar-nav text-light">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php"
                ><i class="fas fa-home"></i><span>Inicio</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="blank.html"
                ><i class="far fa-newspaper"></i><span>Noticias</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="table.html"
                ><i class="far fa-comments"></i><span>Opiniones</span></a
              ><a class="nav-link" href="table.html"
                ><i class="fas fa-book-open"></i><span>Hemeroteca</span></a
              ><a class="nav-link" href="table.html"
                ><i class="fas fa-users"></i><span>Usuarios</span></a
              ><a class="nav-link" href="table.html"
                ><i class="fa fa-youtube-play"></i><span>Youtube</span></a
              ><a class="nav-link" href="table.html"
                ><i class="fa fa-picture-o"></i><span>Slider</span></a
              ><a class="nav-link" href="table.html"
                ><i class="fas fa-bullhorn"></i><span>Banners</span></a
              >
            </li>
          </ul>
          <div class="text-center d-none d-md-inline">
            <button
              id="sidebarToggle"
              class="btn rounded-circle border-0"
              type="button"
            ></button>
          </div>
        </div>
      </nav>
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
            <div
              class="d-sm-flex justify-content-between align-items-center mb-4"
            >
              <h3 class="text-dark mb-0">Edicion</h3>



              
             
              
            </div>
          </div> 

          <div class="card-body">
    <div class="row">
 <?php
$idn=$_GET["nota"];
$sql = "call nota(".$idn.")";

$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {
  
echo '

<section class="photo-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Lightbox Gallery</h2>
        </div>
        <div class="row photos" data-bss-baguettebox>';

        echo    '<div class="col-sm-6 col-md-4 item">';
        if($row["primerafoto"]){

        echo '
        <img style="  height: 180px;max-height: 180px;" class="img-fluid" src="../'.$row["primerafoto"].'" />';
      }
        echo '
        <input
        nota="'.$row["idnoticia"]. '"
        class="form-control"
        type="file"
        id="primerafoto"
        name="seleccionararchivo" value="" multiple
        accept="image/*"
        maxlength="5"
      />
        </div>';
        
       


         echo   '<div class="col-sm-6 col-md-4 item">';
         if($row["segundafoto"]){

         echo '<img style="  height: 180px;max-height: 180px;" class="img-fluid" src="../'.$row["segundafoto"].'" />';
         }
         echo '<input
         class="form-control"
         type="file"
         id="seleccionararchivo"
         name="seleccionararchivo" value="" multiple
         accept="image/*"
         maxlength="5"
       />
         </div>';
        

        echo  '<div class="col-sm-6 col-md-4 item">';
        if($row["tercerafoto"]){

        echo ' <img style="  height: 180px;max-height: 180px;" class="img-fluid" src="../'.$row["tercerafoto"].'" />';
        }

        

        echo '<input
        class="form-control"
        type="file"
        id="seleccionararchivo"
        name="seleccionararchivo" value="" multiple
        accept="image/*"
        maxlength="5"
      />
        </div>';
        

        echo '<div class="col-sm-6 col-md-4 item">';
        if($row["cuartafoto"]){

        echo '<img style="  height: 180px;max-height: 180px;" class="img-fluid" src="../'.$row["cuartafoto"].'" />';
        }
        echo '<img style="  height: 180px;max-height: 180px;" class="img-fluid" src="../../assets/img/logo_cuadrado.png" />';

        echo '<input
        class="form-control"
        type="file"
        id="seleccionararchivo"
        name="seleccionararchivo" value="" multiple
        accept="image/*"
        maxlength="5"
      />
        </div>';
        

        echo '<div class="col-sm-6 col-md-4 item">';
        if($row["quintafoto"]){

        echo '<img style="  height: 180px;max-height: 180px;" class="img-fluid" src="../'.$row["quintafoto"].'" />';

        }
        echo '<img style="  height: 180px;max-height: 180px;" class="img-fluid" src="../../assets/img/logo_cuadrado.png" />';

        echo '<input
        class="form-control"
        type="file"
        id="seleccionararchivo"
        name="seleccionararchivo" value="" multiple
        accept="image/*"
        maxlength="5"
      />
        </div>';
        
        echo '</div>
    </div>
    

    
</section>

    <section class="login-clean">
          <form id="subir" method="post">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="mb-3">
              <input
                class="form-control"
                type="text"
                name="titulo"
                id="titulo"
                value="'.$row["titulo"].'"
                placeholder="Titulo"
              />
            </div>
            <div class="mb-3"></div>
            <div class="mb-3">
              <input
                class="form-control"
                type="text"
                name="subtitulo"
                id="subtitulo"
                value="'.$row["subtitulo"].'"

                placeholder="Encabezado"
              />
            </div>
            <div class="mb-3">
              <textarea
                class="form-control"
                rows="6"
                cols="30"
                style="height: 100%"
                name="descripcion"
                id="descripcion"
               

                placeholder="Noticia"
              >'.$row["descripcion"].'</textarea>
            </div>


            <div class="mb-3">
              <select
                class="form-select"
                name="idcategoria"
                id="idcategoria"
                value="'.$row["idcategoria"].'"


              >
                <optgroup label="Categorias">
                  <option value="1">Regional</option>

                  <option value="2">Policiaca</option>
                  <option value="3">Estatal</option>
                  <option value="4">Entretenimiento</option>
                </optgroup>
              </select>
            </div>
          
            <div class="mb-3">
              <button data-bs-dismiss="modal"
                class="btn btn-primary d-block w-100"
                type="submit"
              >
                Subir
              </button>
            </div>
          </form>
        </section>
        
        
        
        ';
    }



    ?>
         
         


       
      </div>
      <a class="border rounded d-inline scroll-to-top" href="#page-top"
        ><i class="fas fa-angle-up"></i
      ></a>
    </div>
    



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
    <script src="../../assetsadm/js/editNota.js"></script>

  </body>
</html>
