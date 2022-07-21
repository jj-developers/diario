<?php
include ("../conexion.php");
session_start();
if(isset($_POST['email']))
{


 $email=$_POST['email'];
 $pass=$_POST['password'];


 $sql = "select * from usuarios where correo='$email'";
$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) { 

    if (password_verify($pass, $row['contrasena'])) {

  $_SESSION['correo']=$row['correo'];
  echo "success";
    }else{

        echo "fail";


    }
 }
 else
 {
  echo "fail";
 }
 exit();
}

?>