<?php

$sql = "call slider(5)";

$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {
    if(!file_exists("adm/".$row['primerafoto'])){
        $foto1="./assets/img/renta.png";
    }else{
        $foto1="./adm/".$row['primerafoto'];
    }
    
    if(!file_exists("adm/".$row['segundafoto'])){
        $foto2="./assets/img/renta.png";
    }else{
        $foto2="./adm/".$row['segundafoto'];
    }
    
    if(!file_exists("adm/".$row['tercerafoto'])){
        $foto3="./assets/img/renta.png";
    }else{
        $foto3="./adm/".$row['tercerafoto'];
    }
    
    if(!file_exists("adm/".$row['cuartafoto'])){
        $foto4="./assets/img/renta.png";
    }else{
        $foto4="./adm/".$row['cuartafoto'];
    }

        
    if(!file_exists("adm/".$row['quintafoto'])){
        $foto5="./assets/img/renta.png";
    }else{
        $foto5="./adm/".$row['quintafoto'];
    }
    
echo '

<nav class="navbar navbar-light navbar-expand-md fixed-bottom text-center">
                <div class="container-fluid" style="height: 120px !important;
    width: 800px !important;">
                    <div class="container">

<div class="carousel slide shadow" data-bs-ride="carousel" data-bss-hover-animate="pulse" id="carousel-5">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="w-100 d-block ban" src="'.$foto1.'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block ban" src="'.$foto2.'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block ban" src="'.$foto3.'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block ban" src="'.$foto4.'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block ban" src="'.$foto5.'" alt="Slide Image"></div>

                            </div>
                        <div><a class="carousel-control-prev" href="#carousel-5" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-5" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                        <ol class="carousel-indicators" style="visibility: hidden;">
                            <li data-bs-target="#carousel-5" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carousel-5" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carousel-5" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carousel-5" data-bs-slide-to="3"></li>
                            <li data-bs-target="#carousel-5" data-bs-slide-to="4"></li>

                        </ol>
                    </div>
                    
                    </div>
                </div>
            </nav>
                    
                    ';
  }



  
  mysqli_next_result($con);

                    ?>