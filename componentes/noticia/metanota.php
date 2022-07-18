<?php
$idn=$_GET["nota"];
$sql = "call nota(".$idn.")";

$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {

echo '<meta property="og:url"           content="https://www.eldiariodeteziutlan.com/paginas/noticia.php?nota='.$idn.'" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="'.$row["titulo"].'" />
<meta property="og:description"   content="'.$row["subtitulo"].'" />
<meta property="og:image"         content="'$row["primerafoto"]'" />
    <title>'.$row["titulo"].'</title>
    ';
  }
  mysqli_next_result($con);

?>