<?php

$sql = "call ultimanota(5)";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

if(!is_image("adm/".$row["url"])){
  $foto="./assets/img/marca.png";

}else{
  $foto="adm/".$row["url"];
}

echo '
<div class="row">
<div class="col-md-12 pt-3">
<section>
                        <div class="container">
                        <a style="    text-decoration:none;
                        " href="paginas/noticia.php?nota='.$row["idnoticia"].'">
                            <div class="photo-card">
                                <div style="width: 40%;">
                                <img class="img-fluid photo-background" src="'.$foto.'"></div>
                                <div class="photo-details">
                                    <p class="text-gray" style="color: #6c757d;">| '. $row["categoria"].'</p>
                                    <h1 class="text-black text-uppercase">'. $row["titulo"].'</h1>
                                    <h6 style=" overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2; /* number of lines to show */
                                            line-clamp: 2; 
                                    -webkit-box-orient: vertical;" class="text-black text-uppercase">'. $row["subtitulo"].'</h6>

                                </div>
                            </div>
                            </a>
                        </div>
                    </section>
</div>
</div>';
  }

}

function is_image($path)
{
  if (file_exists($path)){

    $a =  getimagesize($path);
    $image_type = $a[2];

    if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
    {
        return true;
    }
    return false;
  }else{
    return false;
  }
  }

mysqli_next_result($con);

?>