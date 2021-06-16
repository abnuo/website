<h1>Discord Embed Generator</h1>
<?php
if (isset($_GET["t"])) {
    echo "<meta name='og:title' content='{$_GET["t"]}' />";
}
if (isset($_GET["d"])) {
    echo "<meta name='og:title' content='{$_GET["d"]}' />";
}
if (isset($_GET["i"])) {
    echo "<meta name='twitter:card' content='summary_large_image' />";
    echo "<meta name='twitter:image' content='{$_GET["i"]}' />";
}
?>
