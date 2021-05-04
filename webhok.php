<?php
$url = 'https://discord.com/api/webhooks/831214997044199464/RC7kCRSqm-RDblyBUIqdOYy3icwU9IviZM3e5VAHXMY1FESez0lmfPHrFMlBye98x1-T';
$data = array('username' => 'AbnuoBot', 'content' => $sexypoop);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);
?>
