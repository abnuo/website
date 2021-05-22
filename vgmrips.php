<?php
$urls = shell_exec("python vgmrips.py " . $_GET["url"]);
echo $urls
?>
