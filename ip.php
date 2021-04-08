<?php
$ip = end(array_values(array_filter(explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']))));
if (ip2long($ip) == false) {
    $ip = "Probably a malicious script or an attempt at SQL injection.";
}
echo "<hr>\n<p>Your IP: " . $ip . "</p>\n<br>"; 
?>
<p>Charlie don't surf!</p>
<br>
<p>Inspired by <a href="danasoft.com">Danasoft</a></p>
