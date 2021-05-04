<?php
$js = shell_exec("phantomjs arguments.js \"" . $_GET["html"] . "\"");
$fp = fopen('names.txt', 'a');//opens file in append mode  
fwrite($fp, $js + '\n');  
fwrite($fp, 'appending data');  
fclose($fp);  
echo $js
?>
