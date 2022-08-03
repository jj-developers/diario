<?php
$pagina=$_GET["pagina"];
$idc=$_GET["cat"];

$sql = "call ultimanotacategoria('.$idc.')";
$result = $con->query($sql);
$conta=1;
$contapag=1;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

if($conta<=20*$pagina && $conta>=20*$pagina-20){


echo '

<div class="col-md-6 pt-3">
                <section>
                    <div class="">
                    <a style="    text-decoration:none;
                        " href="noticia.php?nota='.$row["idnoticia"].'">
                        <div class="photo-card">
                            <div class="photo-background" style="/*background-image: url();*/">
                            <img class="img-fluid photo-background" src="../adm/'. $row["url"].'"/></div>
                            <div class="photo-details">
                                <h1 style="color:#6c757d!important" class="text-gray">| '. $row["categoria"].'</h1>
                                <p class="pt-1 text-black">'. $row["titulo"].'</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </section>
            </div>

';
}


$conta++;

  }




}
  mysqli_next_result($con);

?>