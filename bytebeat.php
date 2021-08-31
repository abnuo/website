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
shell_exec("python bytebeat.py " . $_GET["e"] . " " . $_["d"] . " | sox -traw -r8000 -b8 -e unsigned-integer $filename.wav");
<?php echo("<a href=\"https://abnuosite.herokuapp.com/$filename.wav\">Your file</a>"); ?>
