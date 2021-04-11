<?php
$output = shell_exec('curl -c http://127.0.0.1:8080 http://mitm.it/');
$fgc = file_get_contents('http://mitm.it/');
echo "<p>Curl output: <pre>$output</pre></p><br><p>File_get_contents output:<pre>$fgc</pre></p>";
?>
