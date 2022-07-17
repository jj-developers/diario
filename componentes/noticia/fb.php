<?php

$Url = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$Url .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

echo '<div class="fb-share-button" 
data-href="https://www.your-domain.com/your-page.html" 
data-layout="button_count">
</div>';
?>