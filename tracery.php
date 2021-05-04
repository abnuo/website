<?php
$poop = shell_exec("node tracery.js");
$sexypoop = trim(json_encode($poop), '*');
shell_exec("curl -X POST -H "Content-Type: application/json" -d '{"username": "AbnuoBot", "content": "$sexypoop"}' "https://discord.com/api/webhooks/203019812404264973/rptBmYgoehu70kw2rItSlhRqKi7kMJh1bM2KCUUD2vR6grZckvtdl62h4xR7XWUS5463"
echo $poop;
?>
