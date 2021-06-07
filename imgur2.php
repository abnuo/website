<?php
$image = shell_exec("python imgur.py");
header("Location: " . $image);
?>
