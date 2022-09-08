<?php
include ("../../control/conexion.php");

if(isset($_POST['pos']))
{


  $pos=$_POST['pos'];
  
  $nombre=date("YmdHis");

  $foto= "banners/".$nombre."-0";



  $sql = "UPDATE sliders SET ".$pos." ='$foto' WHERE idslider =5";
  sprintf($sql, $id);

  $result = $con->query($sql);

        // output data of each row
    
          if (isset($_FILES['f'])) {

              $cantidad = count((array)$_FILES["f"]["tmp_name"]);
           

                  move_uploaded_file($_FILES["f"]["tmp_name"][0],
                  "../banners/".$nombre."-0");


              

           echo 1;
       

}else{
    echo 0;
}

}
?>