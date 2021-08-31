<h1>Bytebeat</h1>
<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$filename = generateRandomString();
shell_exec("python -c 'import sys;[sys.stdout.write(chr(" . $_GET["e"] . ")) for t in range(" . $_GET["d"] . ")]' " . "| ffmpeg -f u8 -ar 8000 -ac 1 -i :pipe $filename.wav");
echo "<a href=\"https://abnuosite.herokuapp.com/$filename.wav\">Your file</a>"; 
?>
