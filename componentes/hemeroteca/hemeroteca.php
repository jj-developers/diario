<?php
$sql = "call hemeroteca()";

$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {
echo '


                    <embed style="border-color: #05457b;
    border-width: 8px;
    border-style: double;border-radius: 15px;"
    
                        src="./adm/'.$row["url"].'"
                        width="100%" height="250" type="application/pdf">
                </div>
                ';
  }

  mysqli_next_result($con);

                ?>