<?php

$sql = "call ultimanota(1)";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo'
<div id="ultima" nota="'. $row["idnoticia"].'" class="text-center hovereffect" style="background-color: #000000;">
<img class="img-fluid img-responsive" src="adm/'. $row["url"].'" 
style="height: 100%;filter: brightness(0.7);background-color: #000000;">
                        <div class="shadow overlay">
                            <h2 class="text-start">| '. $row["categoria"].'</h2>
                            <p class="fs-4 fw-bold">
                            <a class="text-decoration-none" href="#" 
                            style="font-family: Roboto, sans-serif;">'. $row["titulo"].'</a></p>
                        </div>
                    </div>
';
  }
} else {
  echo "0 results";
}


mysqli_next_result($con);

?>