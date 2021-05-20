<?php
echo "GET: " . $_GET["content"] . "\n";
echo "POST: " . $_POST["content"] . "\n";
echo "RAW: " . file_get_contents('php://input');
?>
