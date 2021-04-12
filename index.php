<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>The WebSite Of An Abnuos</h1>
<a href="/google.php">My google proxy</a> <a href="https://dazzling-voice-19912.pktriot.net">My other site (may be down; for stuff that requires a non-ephemeral filesystem/etc)</a>
<?php
$poop = array("Free", "XXX", "Porn", "Rule34", "Tits", "Ass", "3gp", "video");
shuffle($poop);
$penis = implode(" ", $poop);
echo "<p>$penis</p>";
?>
<?php
$word = explode('"]', explode('["', file_get_contents("https://random-word-api.herokuapp.com/word"))[1])[0];
$word2 = explode('"]', explode('["', file_get_contents("https://random-word-api.herokuapp.com/word"))[1])[0];
$domain = "http://$word-$word2.com/";
echo "<p>CONGRATS! You are lucky today.. You have won a $word $word2! Clicky click! <a href=\"$domain\">Your surprise!</a></p>";
?>
<?php require('ip.php'); ?>
</body>
</html>
