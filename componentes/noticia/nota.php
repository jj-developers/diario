<?php
$idn=$_GET["nota"];
$sql = "call nota(".$idn.")";

$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {

echo '<div class="container">
            <div class="row">
                <div class="col-md-12" style="border-bottom: 2px solid rgba(108,117,125,0.33);">
                    <h1 id="titulo" class="text-center text-secondary"><br />'.$row["titulo"].'</h1>
                </div>
                <div class="col">
                    <h6 id="subtitulo" class="text-center text-secondary"><br /><br />'.$row["subtitulo"].'</h6>
                </div>
            </div>
        </div>
        <div class="text-center" id="foto0">
        <img style="min-height: 400px;max-height: 450px; width: 80%;" class="img-fluid p-4" src="'.$row["primerafoto"].'" />
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <p id="descripcion" class="fs-4 text-center" style="color: rgb(102,114,126);">'.$row["descripcion"].'</p>
                </div>
            </div>
        </div>';


        echo '<div class="container">
            <div class="row flex-box flex-wrap-wrap" id="galeria">';
if($row["segundafoto"]){
            echo '<div class="col-md-6 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
            title="El diario de teziutlan" href="#"><img style=" min-width: 100%; min-height: 290px;max-height: 290px;" class="img-fluid"
            src="'.$row["segundafoto"].'" /></a></div>';
}
if($row["tercerafoto"]){
            echo '<div class="col-md-6 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
            title="El diario de teziutlan" href="#"><img style=" min-width: 100%; min-height: 290px;max-height: 290px;" class="img-fluid"
            src="'.$row["tercerafoto"].'" /></a></div>';
}

if($row["cuartafoto"]){
            echo '<div class="col-md-6 mt-2 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
            title="El diario de teziutlan" href="#"><img style=" min-width: 100%; min-height: 290px;max-height: 290px;" class="img-fluid"
            src="'.$row["cuartafoto"].'" /></a></div>';
}
if($row["quintafoto"]){
            echo ' <div class="col-md-6 mt-2 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
            title="El diario de teziutlan" href="#"><img style=" min-width: 100%; min-height: 290px;max-height: 290px;" class="img-fluid"
            src="'.$row["quintafoto"].'" /></a></div>';
}
            echo '</div>
        </div>';

  }
  mysqli_next_result($con);

        ?>
