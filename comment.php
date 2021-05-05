<?php  
$fp = fopen('comments.txt', 'a');
fwrite($fp, $_GET["comment"] . "\n");
fclose($fp);
header('Location: /phpmyadmin');
exit;
?>
