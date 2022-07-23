<?php
include ("../../control/conexion.php");
session_start();
if(isset($_POST['idn']))
{


 $idn=$_POST['idn'];


 $sql = "delete from noticias where idnoticia ='$idn'";
$result = $con->query($sql);
  echo "success";

 }
 else
 {
  echo "fail";
 }
 exit();


?>