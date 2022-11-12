<?php
include ("../../control/conexion.php");

if(isset($_POST['fecha']))
{


  $fecha=$_POST['fecha'];
  

  $foto= "hemeroteca/".$fecha;


  $sql = "INSERT INTO `hemeroteca` (`idhemeroteca`, `url`) VALUES ('$fecha', '$foto') ON DUPLICATE KEY UPDATE url='$foto'";

  $result = $con->query($sql);

        // output data of each row
    
          if (isset($_FILES['f'])) {
           

                  move_uploaded_file($_FILES["f"]["tmp_name"][0],"../hemeroteca/".$fecha);


              

           echo 1;
       

}else{
    echo 0;
}

}else{
  echo '..';
}
?>