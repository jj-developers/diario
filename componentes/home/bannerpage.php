<?php

$sql = "call slider(5)";

$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {

echo '

<nav class="navbar navbar-light navbar-expand-md fixed-bottom text-center">
                <div class="container-fluid" style="height: 120px !important;
    width: 800px !important;">
                    <div class="container">

<div class="carousel slide shadow" data-bs-ride="carousel" data-bss-hover-animate="pulse" id="carousel-5">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="w-100 d-block ban" src="../adm/'.$row["primerafoto"].'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block ban" src="../adm/'.$row["segundafoto"].'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block ban" src="../adm/'.$row["tercerafoto"].'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block ban" src="../adm/'.$row["cuartafoto"].'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block ban" src="../adm/'.$row["quintafoto"].'" alt="Slide Image"></div>

                            </div>
                        <div><a class="carousel-control-prev" href="#carousel-5" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-5" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                        <ol class="carousel-indicators">
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