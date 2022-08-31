<?php
include ("../../control/conexion.php");

if(isset($_POST['pos'])&&
isset($_POST['id']))
{


  $pos=$_POST['pos'];
  $id=$_POST['id'];  
  $nombre=date("YmdHis");

  $primerafoto= "imagenes/".$nombre."-0";



  $sql = "UPDATE noticias SET primerafoto='$primerafoto' WHERE idnoticia='$id'";
  sprintf($sql, $id);

  $result = $con->query($sql);

        // output data of each row
    
          if (isset($_FILES['f'])) {

              $cantidad = count((array)$_FILES["f"]["tmp_name"]);
           

                  move_uploaded_file($_FILES["f"]["tmp_name"][0],
                  "../imagenes/".$nombre."-0");


              

           echo 1;
       

}else{
    echo 0;
}

}
?>