<?php
header("Content-Type: image/png");
shell_exec("scrot poop.png");
echo file_get_contents("poop.png");
?>
