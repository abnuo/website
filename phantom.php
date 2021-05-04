<?php
$js = shell_exec("phantomjs arguments.js \"" . $_GET["html"] . "\"");
?>
