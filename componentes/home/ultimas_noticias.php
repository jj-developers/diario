<?php

$sql = "call ultimanota(5)";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

echo '
<div class="row">
<div class="col-md-12 pt-3">
<section>
                        <div class="container">
                        <a style="    text-decoration:none;
                        " href="paginas/noticia.php?nota='.$row["idnoticia"].'">
                            <div class="photo-card">
                                <div style="width: 40%;">
                                <img class="img-fluid photo-background" src="adm/'. $row["url"].'"></div>
                                <div class="photo-details">
                                    <p class="text-gray" style="color: #6c757d;">| '. $row["categoria"].'</p>
                                    <h1 class="text-black text-uppercase">'. $row["titulo"].'</h1>
                                    <h6 class="text-black text-uppercase">'. $row["subtitulo"].'</h6>

                                </div>
                            </div>
                            </a>
                        </div>
                    </section>
</div>
</div>';
  }

}
mysqli_next_result($con);

?>