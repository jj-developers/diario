<?php

$Url = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$Url .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$Url= urlencode($Url);
echo $Url;

echo '<div class="fb-share-button" data-href="'.$Url.'" data-layout="button_count" data-size="small">

<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$Url.'&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
';
?>