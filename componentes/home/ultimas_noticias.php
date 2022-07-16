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
                            <div class="photo-card">
                                <div style="width: 40%;">
                                <img class="img-fluid photo-background" src="'. $row["url"].'"></div>
                                <div class="photo-details">
                                    <h1 class="text-gray" style="color: #6c757d;">| '. $row["categoria"].'</h1>
                                    <p class="text-black text-uppercase">'. $row["titulo"].'</p>
                                </div>
                            </div>
                        </div>
                    </section>
</div>
</div>';
  }

}
mysqli_next_result($con);

?>