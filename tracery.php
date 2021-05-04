<?php
$poop = shell_exec("node tracery.js");
$sexypoop = trim(json_encode($poop), '*');
shell_exec("curl -X POST -H \"Content-Type: application/json\" -d '{\"username\": \"AbnuoBot\", \"content\": \"$sexypoop\"}' \"https://discord.com/api/webhooks/831214997044199464/RC7kCRSqm-RDblyBUIqdOYy3icwU9IviZM3e5VAHXMY1FESez0lmfPHrFMlBye98x1-T\"");
echo $poop;
?>
