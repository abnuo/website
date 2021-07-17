<?php
q = $_GET["q"];
l = $_GET["l"];
tenors = explode("|", shell_exec("python tenor2.py \"$q\" $l"));
foreach ($tenors as $i) {
    echo "<img src=\"$i\" />";
}
?>
