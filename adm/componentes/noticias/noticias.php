<?php
if(isset($_SESSION['correo']))
{
 $conta=0;
    
    $sql = "call ultimanota(1)";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
    
    
    
    $conta++;
    
      }
    
    if($conta<1){

        echo '
        <div class="container d-lg-flex justify-content-lg-center ">

        <img class="img-fluid" src="../../assetsadm/img/2709382.jpg" width="80%" />

        </div>
        <h3 class="text-center" style="padding: 20px">
          No tenemos noticias para mostrar, pero puedes subir algunas.
        </h3>
      </div>
        
        ';

    }
    
    
    
      mysqli_next_result($con);
    



    
}}
?>