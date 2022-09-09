<?php
session_start();
$menu="noticias";

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
            <div
              class="d-sm-flex justify-content-between align-items-center mb-4"
            >
              <h3 class="text-dark mb-0">Mis noticias</h3>
              <a
                class="btn btn-primary btn-sm d-none d-sm-inline-block"
                role="button"
                href="#"
                data-bs-target="#modal-1"
                data-bs-toggle="modal"
                ><i class="fas fa-cloud-upload-alt fa-sm text-white-50"></i
                > Subir noticia</a
              >
            </div>
          </div> 

          <div class="card-body">
    <div class="row">
        <div class="col-md-6 text-nowrap">
            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Mostrar <select class="d-inline-block form-select form-select-sm">
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select></label></div>
        </div>
        <div class="col-md-6">
            <div id="dataTable_filter" class="text-md-end dataTables_filter">
              <label class="form-label">
                <input id="buscador" class="form-control form-control-sm" type="search" aria-controls="dataTable" placeholder="Buscar" /></label></div>
        </div>
    </div>
    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
        <table id="dataTable" class="table my-0">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Subtitulo</th>
                    <th>Descripción</th>
                    <th>Activa</th>
                    <th>Fecha</th>
                    <th>Categoria</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            <?php include('../componentes/noticias/listanoticias.php') ?>

            </tbody>
            <tfoot>
                <tr>
                    <td>Titulo</td>
                    <td>Subtitulo</td>
                    <td>Descripción</td>
                    <td>Activa</td>
                    <td>Fecha</td>
                    <td>Categoria</td>
                    <td>Opciones</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="row">
        <div class="col-md-6 align-self-center">
            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Mostrando 1 a 10 de 27</p>
        </div>
        <div class="col-md-6">
            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

          <?php include('../componentes/noticias/noticias.php') ?>
         
        <footer class="bg-white sticky-footer">
          <div class="container my-auto">
            <div class="text-center my-auto copyright">
              <span>Copyright © El Diario de Teziutlan 2022</span>
            </div>
          </div>
        </footer>
      </div>
      <a class="border rounded d-inline scroll-to-top" href="#page-top"
        ><i class="fas fa-angle-up"></i
      ></a>
    </div>
    

    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Subir noticia</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <section class="login-clean">
          <form id="subir" method="post">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="mb-3">
              <input
                class="form-control"
                type="text"
                name="titulo"
                id="titulo"

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
              ></textarea>
            </div>
            <div class="mb-3">
              <select
                class="form-select"
                name="idcategoria"
                id="idcategoria"

              >
                <optgroup label="Categorias">
                  <option value="0" disabled selected>Categoria</option>
                  <option value="1">Regional</option>

                  <option value="2">Policiaca</option>
                  <option value="3">Estatal</option>
                  <option value="4">Entretenimiento</option>
                </optgroup>
              </select>
            </div>
            <div class="mb-3">
              <input
                class="form-control"
                type="file"
                id="seleccionararchivo"
                name="seleccionararchivo" value="" multiple
                accept="image/*"
                maxlength="5"
              />
              <div>
                
              </div>
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
      </div>
    </div>
  </div>
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

  </body>
</html>
