<?php
include ("../../control/conexion.php");

if(isset($_POST['titulo'])&&
isset($_POST['subtitulo'])&&
isset($_POST['descripcion'])&&
isset($_POST['idcategoria']))
{


  $titulo=$_POST['titulo'];
  $subtitulo=$_POST['subtitulo'];
  $descripcion=$_POST['descripcion'];
  $idcategoria=$_POST['idcategoria'];


  $sql = "SELECT MAX(idnoticia) AS idnoticia FROM noticias;  ";

  $result = $con->query($sql);

        // output data of each row
    if($row = $result->fetch_assoc()) {
          if (isset($_FILES['f'])) {

              $cantidad = count((array)$_FILES["f"]["tmp_name"]);
              for ($i=0; $i<$cantidad; $i++)
              {

                  move_uploaded_file($_FILES["f"]["tmp_name"][$i],
                  "../imagenes/".$_FILES["f"]["name"][$i]);
                  
                  if($i==$cantidad-1){
                    echo 1;
                  }

              }

              $primerafoto= "imagenes/".$_FILES["f"]["name"][0];
              if(isset($_FILES["f"]["name"][1])){
                              $segundafoto= "imagenes/".$_FILES["f"]["name"][1];

              }else{
                $segundafoto="";
              }
              if(isset($_FILES["f"]["name"][2])){
                $tercerafoto= "imagenes/".$_FILES["f"]["name"][2];

}else{
  $tercerafoto="";

}
if(isset($_FILES["f"]["name"][3])){
  $cuartafoto= "imagenes/".$_FILES["f"]["name"][3];

}else{
  $cuartafoto="";

}

if(isset($_FILES["f"]["name"][4])){
  $quintafoto= "imagenes/".$_FILES["f"]["name"][4];

}else{
  $quintafoto="";

}

date_default_timezone_set('America/Mexico_City');      

$date = date('Y-m-d H:i:s');

              $sqls = "INSERT INTO `noticias` 
              (`idnoticia`,
              `activa`,
                `descripcion`,
                `fecha`,
                  `subtitulo`,
                  `titulo`,
                    `idusuario`,
                    `idcategoria`,
                      `primerafoto`,
                      `segundafoto`,
                        `tercerafoto`,
                        `cuartafoto`,
                          `quintafoto`) 
                          VALUES 
                          (NULL,
                          '1',
                            ' $descripcion',
                            '$date',
                            '$subtitulo',
                            '$titulo',
                                '1',
                                ". $idcategoria.",
                                '$primerafoto',
                                '$segundafoto',
                                '$tercerafoto',
                                '$cuartafoto',
                                '$quintafoto');
              ";
            $results = $con->query($sqls);

          }
        
          else{
            echo 0;
          }
    }
} 
    

?>