<?php
echo "GET: " . $_GET["content"];
echo "POST: " . $_POST["content"];
if ($_SERVER['REQUEST_METHOD'] === 'PUT' || $_SERVER['REQUEST_METHOD'] === 'PATCH') { 
    $putty = file_get_contents('php://input');
    echo putty;
}
?>
