<?php
$js = shell_exec("phantomjs arguments.js \"" . str_replace('>', '\>', str_replace('<', '\<', $_GET["html"])) . "\"");
echo $js
?>
