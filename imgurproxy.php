<?php
$id = $_GET['id'];
echo file_get_contents("https://i.imgur.com/" . $id);
?>
