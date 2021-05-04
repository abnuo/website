<?php
$poop = shell_exec("node tracery.js");
$sexypoop = trim(json_encode($poop), '*');
echo $poop;
?>
