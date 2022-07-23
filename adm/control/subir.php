<?php
include ("../../control/conexion.php");


$sql = "SELECT idnoticia FROM noticias 
WHERE idnoticia = (SELECT max(idnoticia) 
FROM noticias WHERE idnoticia > 2);";

$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {

    if (isset($_FILES['f']))
    {
        $cantidad = count((array)$_FILES["f"]["tmp_name"]);
        for ($i=0; $i<$cantidad; $i++)
        {

            move_uploaded_file($_FILES["f"]["tmp_name"][$i],"../imagenes/".$_FILES["f"]["name"][$i]);
            echo 1;

        }
    }
    else{
        echo 0;
    }

    
  }

?>