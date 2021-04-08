<?php
$ip = $_SERVER["HTTP_X_FORWADED_FOR"][0];
if (ip2long($ip) == false) {
    $ip = "Probably a malicious script or an attempt at SQL injection.";
}
echo "<hr>\n<p>Your IP: " . $ip . "</p>"; 
?>
