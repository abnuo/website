<?php
$js = shell_exec("phantomjs arguments.js \"" . addslashes($_GET["html"]) . "\"");
$fp = fopen('names.txt', 'a');//opens file in append mode  
fwrite($fp, $js . '\n');
fclose($fp);
echo $js
?>
