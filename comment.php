<?php
$useragent = 'User with user agent ' . $_SERVER['HTTP_USER_AGENT'] . ' has commented.';
$fp = fopen('comments.txt', 'a');
fwrite($fp, $_GET["comment"] . "\n");
fclose($fp);
require 'webhok2.php'
header('Location: /phpmyadmin');
exit;
?>
