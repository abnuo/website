
<?php
$ip = end(array_values(array_filter(explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']))));
echo "<hr>\n<p>Your IP: " . $ip . "</p>\n<br>"; 
?>
<p>Charlie don't surf!</p>
<br>
<p>Inspired by <a href="danasoft.com">Danasoft</a></p>
<p>This is the unsafe version for showing how x forwarded for is not to be trusted.</p>
