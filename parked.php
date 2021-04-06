<h1>Welcome to <?php echo $_SERVER['HTTP_HOST']; ?></h1>
<?php
$marios = array("Danky", "Yeety", "Dankest", "Derpiest", "Memiest", "Doggo", "Boi", "Yeetus", "Among Us", "Sponge Adventure Bob", "Play Now");
for ($i = 1; $i <= 10; $i++) {
    shuffle($marios);
    $copy = $marios;
    $url = implode("-", $marios);
    $joinderp = implode(" ", $copy);
    echo "<a href=\"http://$url.com\">$joinderp</a>\n<br>";
}
?>
<?php
$datey = date("Y");
echo "Copyright &copy; $datey " . $_SERVER['HTTP_HOST']  . ". All Rights Reserved.";
?>
