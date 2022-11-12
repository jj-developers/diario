<?php
//$con=mysqli_connect("localhost","eldiar11_silvia","gjSdEF#&K{uq","eldiar11_noticias");
$con=mysqli_connect("localhost","root","","diario");

// Check connection

if (!$con) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>