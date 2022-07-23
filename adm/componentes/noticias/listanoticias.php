<?php
if(isset($_SESSION['correo']))
{
    
    $sql = "call ultimanota(10)";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
    
        echo '
        <tr>
                    <td>'.$row["titulo"].'</td>
                    <td >'.$row["subtitulo"].'</td>
                    <td >'.substr($row["descripcion"],0,140).'...</td>
                    <td>'.$row["activa"].'</td>
                    <td>'.$row["fecha"].'</td>
                    <td>'.$row["categoria"].'</td>
                    <td>
                    <button  class="btn btn-primary btn-sm" type="button" 
                    style="margin-right: 2px;"><i class="fas fa-edit"></i>
                    </button><button id="borrar" nota="'.$row["idnoticia"].'" class="borrar btn btn-danger btn-sm" type="button">
                    <i class="fas fa-trash"></i></button></td>
                </tr>
        
        ';
    
    
      }
    

       

    }
    
    
    
      mysqli_next_result($con);
    



    
}
?>