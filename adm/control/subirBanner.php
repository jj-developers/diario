<?php
include ("../../control/conexion.php");

if(isset($_POST['pos']))
{


  $pos=$_POST['pos'];
  $id=$_POST['id'];

  $nombre=date("YmdHis");

  $foto= "banners/".$nombre."-".$id;

echo $id;

  $sql = "UPDATE sliders SET ".$pos." ='$foto' WHERE idslider ='$id'";
  sprintf($sql, $id);

  $result = $con->query($sql);

        // output data of each row
    
          if (isset($_FILES['f'])) {

              $cantidad = count((array)$_FILES["f"]["tmp_name"]);
           

                  move_uploaded_file($_FILES["f"]["tmp_name"][0],
                  "../banners/".$nombre."-".$id);


              

           echo 1;
       

}else{
    echo 0;
}

}
?>