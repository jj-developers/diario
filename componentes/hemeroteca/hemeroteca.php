<?php
    date_default_timezone_set("America/Mexico_City");

    $fec=date('Y-m-d');
$sql = "SELECT url FROM hemeroteca WHERE idhemeroteca='$fec'";

$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {


    echo '


                    <embed style="border-color: #05457b;
    border-width: 8px;
    border-style: double;border-radius: 15px;"
    
                        src="./adm/'.$row["url"].'"
                        width="100%" height="300" type="application/pdf">
                </div>
                ';
  }

  mysqli_next_result($con);

                ?>