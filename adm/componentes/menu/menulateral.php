<?php
echo '<nav
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
           
            <li class="nav-item">';
            if($menu=="noticias"){

            echo  '<a class="nav-link active" href="noticias.php"
                ><i class="far fa-newspaper"></i><span>Noticias</span></a
              >';
            }else{
                echo  '<a class="nav-link " href="noticias.php"
                ><i class="far fa-newspaper"></i><span>Noticias</span></a
              >';
            }
            echo '</li><li class="nav-item">';

            if($menu=="opiniones"){
            echo '<a class="nav-link active" href="table.html"
                ><i class="far fa-comments"></i><span>Opiniones</span></a
              >';
            }else{

                echo '<a class="nav-link " href="table.html"
                ><i class="far fa-comments"></i><span>Opiniones</span></a
              >';

            }

            if($menu=="hemeroteca"){
              echo '<a class="nav-link active" href="hemeroteca.php"
                ><i class="fas fa-book-open"></i><span>Hemeroteca</span></a
              >';
            }else{
                echo '<a class="nav-link " href="hemeroteca.php"
                ><i class="fas fa-book-open"></i><span>Hemeroteca</span></a
              >';
            }
            if($menu=="usuarios"){
              echo '<a class="nav-link active" href="table.html"
                ><i class="fas fa-users"></i><span>Usuarios</span></a
              >';
            }else{
                echo '<a class="nav-link " href="table.html"
                ><i class="fas fa-users"></i><span>Usuarios</span></a
              >';
            }

            if($menu=="youtube"){
              echo '<a class="nav-link active" href="table.html"
                ><i class="fa fa-youtube-play"></i><span>Youtube</span></a
              >';
            }else{
                echo '<a class="nav-link " href="table.html"
                ><i class="fa fa-youtube-play"></i><span>Youtube</span></a
              >';
            }
            if($menu=="sliders"){
              echo '<a class="nav-link active" href="table.html"
                ><i class="fa fa-picture-o"></i><span>Sliders</span></a
              >';
            }else{
                echo '<a class="nav-link " href="table.html"
                ><i class="fa fa-picture-o"></i><span>Slider</span></a
              >';
            }

            if($menu=="banners"){

              echo '<a class="nav-link active" href="banners.php"
                ><i class="fas fa-bullhorn"></i><span>Banners</span></a
              >';
            }else{
                echo '<a class="nav-link " href="banners.php"
                ><i class="fas fa-bullhorn"></i><span>Banners</span></a
              >';
            }
              
              echo '

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
      </nav>';

      ?>