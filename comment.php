<?php
$useragent = 'User with user agent ' . $_SERVER['HTTP_USER_AGENT'] . ' just commented ' . $_GET["comment"] . '.';
$fp = fopen('comments.txt', 'a');
fwrite($fp, $_GET["comment"] . "\n");
fclose($fp);
header('Location: /phpmyadmin');
require 'webhok2.php';
exit;
?>
