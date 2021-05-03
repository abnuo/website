<?php
header("Content-type: image/png");
$image = shell_exec("python imgur.py");
$getimage = file_get_contents($image);
echo $getimage
?>
