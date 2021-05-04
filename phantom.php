<?php
$js = shell_exec("phantomjs arguments.js \"" . str_replace('>', '\>', str_replace('<', '\<', addslashes($_GET["html"]))) . "\"");
echo $js
?>
