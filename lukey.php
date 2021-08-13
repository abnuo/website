<?php
function addHeader(&$line) {
  header($line);
}
$headers = file("headers.txt");
array_walk_recursive($headers, 'addHeader');
?>
