<h1>Welcome to <?php echo $_SERVER['HTTP_HOST']; ?></h1>
<?php
$marios = array("Danky", "Yeety", "Dankest", "Derpiest", "Memiest", "Doggo", "Boi", "Yeetus", "Among Us", "Sponge Adventure Bob", "Play Now");
$randerp = shuffle($marios);
$copy = $randerp;
$url = implode("-", $randerp);
$joinderp = implode(" ", $copy);
echo "<a href=\"$url.com\">$joinderp</a>";
?>
<?php
$datey = date("Y");
echo "Copyright &copy; $datey " . $_SERVER['HTTP_HOST']  . ". All Rights Reserved.";
?>
