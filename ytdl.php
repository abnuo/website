<?php
function genStr($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$filename = genStr(5) . '.mp4';
shell_exec("yt-dlp --output dl/$filename https://youtu.be/" . $_GET["id"]);
echo("<a href=\"https://abnuosite.herokuapp.com/dl/$filename.np4\">Your file</a>");
?>
