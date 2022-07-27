<?php
include ("../../control/conexion.php");
session_start();
if(isset($_POST['titulo']||
isset($_POST['subtitulo']||
isset($_POST['descripcion']||
isset($_POST['idusuario']||
isset($_POST['idcategoria']||
isset($_POST['primerafoto']||
isset($_POST['segundafoto']||
isset($_POST['tercerafoto']||
isset($_POST['cuartafoto']||
isset($_POST['quintafoto']))
{


 $titulo=$_POST['titulo'];
 $subtitulo=$_POST['subtitulo'];
 $descripcion=$_POST['descripcion'];
 $idcategoria=$_POST['idcategoria'];



 $sql = "INSERT INTO `noticias` 
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
               '. $descripcion.',
                '2022-07-22 16:33:35',
                '. $subtitulo.',
                '. $titulo.',
                   '1',
                   '. $idcategoria.',
                   '. $primerafoto.',
                   '. $segundafoto.',
                   '. $tercerafoto.',
                   '. $cuartafoto.',
                   '. $quintafoto.');
 ";
$result = $con->query($sql);
  echo "success";

 }
 else
 {
  echo "fail";
 }
 exit();


?>