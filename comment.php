<?php  
$fp = fopen('comments.txt', 'a');
fwrite($fp, $_GET["comment"] . "\n");
fwrite($fp, 'appending data');
fclose($fp);
?>
