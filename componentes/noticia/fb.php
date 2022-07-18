<?php

$Url = "https%3A%2F%2Feldiariodeteziutlan.com%2Fpaginas%2Fnoticia.php%3Fnota%3";
$Url= urlencode($Url);
echo $Url;

echo '<div class="fb-share-button" data-href="'.$Url.'" data-layout="button_count" data-size="small">

<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$Url.';src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
';
?>