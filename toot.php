<h1>KrazyRobo Fart Jar</h1>
<marquee><h1>Wanna Fart?</h1></marquee>
<?php
if (isset($_GET['n'])) {
    $toot = shell_exec("python bot.py " . $_GET['n']);
} else {
    $toot = shell_exec("python bot.py");
}
echo $toot;
?>
