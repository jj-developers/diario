<?php
    date_default_timezone_set("America/Mexico_City");

    $fec=date('Y-m-d');
$sql = "SELECT url FROM hemeroteca WHERE idhemeroteca='$fec'";

$result = $con->query($sql);

  // output data of each row
  if($row = $result->fetch_assoc()) {


    echo '
    <div id="adobe-dc-view" style="height: 300px; width: 100%;"></div>


    <script type="text/javascript">
    document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
      var adobeDCView = new AdobeDC.View({clientId: "8b774ee0abe7442497b543371ccddb34", divId: "adobe-dc-view"});
      adobeDCView.previewFile({
        content:{location: {url: "./adm/'.$row["url"].'"}},
        metaData:{fileName: "Bodea Brochure.pdf"}
      }, {embedMode: "SIZED_CONTAINER"});
    });
  </script>
                ';
  }

  mysqli_next_result($con);

                ?>