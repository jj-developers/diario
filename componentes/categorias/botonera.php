<?php
$pagina=$_GET["pagina"];
$idc=$_GET["cat"];

$sql = "call ultimanotacategoria('.$idc.')";
$result = $con->query($sql);
$conta=1;
$contapag=1;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {





$conta++;

  }

 $paginas=$conta/20;
 $paginas=round($paginas, 0, PHP_ROUND_HALF_DOWN)+1;
 for($i=1;$i<=$paginas;$i++){
if($i==$pagina){
    echo '
    <button class="btn btn-success border rounded-circle m-1" 
    style="height: 40px;width: 40px;background-color: #05457b70">'.$i.'</button>
    ';
}else{
    echo '
    <button class="btn btn-success border rounded-circle m-1" 
    style="height: 40px;width: 40px;background-color: #05457b    ">'.$i.'</button>
    ';
}  
 }



}
  mysqli_next_result($con);

?>