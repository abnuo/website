<h1>VGM Converter</h1>
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
shell_exec("vgm-conv -f " . $_GET["f"] . " " . "-t " . $_GET["t"] . " -o $filename.vgm " . $_GET["i"]);
?>
