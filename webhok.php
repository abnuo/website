<?php
$line = '';

$f = fopen('names.txt', 'r');
$cursor = -1;

fseek($f, $cursor, SEEK_END);
$char = fgetc($f);

/**
 * Trim trailing newline chars of the file
 */
while ($char === "\n" || $char === "\r") {
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}

/**
 * Read until the start of file or first newline char
 */
while ($char !== false && $char !== "\n" && $char !== "\r") {
    /**
     * Prepend the new char
     */
    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}

fclose($f);
$url = 'https://discord.com/api/webhooks/831214997044199464/RC7kCRSqm-RDblyBUIqdOYy3icwU9IviZM3e5VAHXMY1FESez0lmfPHrFMlBye98x1-T';
$data = array('username' => 'AbnuoBot', 'content' => $poop . '\nhttps://abnuosite.herokuapp.com/' . $line, 'file' => file_get_contents('temp/' . $line));

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
