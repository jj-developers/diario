<?php

$sql = "call slider(1)";
$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {



echo '<div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="w-100 d-block sl" src="'.$row["primerafoto"].'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block sl" src="'.$row["segundafoto"].'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block sl" src="'.$row["tercerafoto"].'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block sl" src="'.$row["cuartafoto"].'" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block sl" src="'.$row["quintafoto"].'" alt="Slide Image"></div>

                            </div>
                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>

                        </ol>
                    </div>';
  }
  mysqli_next_result($con);

                    ?>