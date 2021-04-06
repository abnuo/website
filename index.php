<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>The WebSite Of An Abnuos</h1>
<a href="/google.php">My google proxy</a>
<?php
$poop = array("Free", "XXX", "Porn", "Rule34", "Tits", "Ass", "3gp", "video");
shuffle($poop);
$penis = implode(" ", $poop);
echo "<p>$penis</p>";
?>
<?php
$word = explode('["', file_get_contents("https://random-word-api.herokuapp.com/word"))[1];
$word2 = explode('["', file_get_contents("https://random-word-api.herokuapp.com/word"))[1];
$domain = "http://$word-$word2.com/";
echo "<p>CONGRATS! You are lucky today.. You have won a $word $word2! Clicky click! <a href=\"$domain\">Your surprise!</a></p>";
?>
</body>
</html>
