<?php
header('Content-Type: text/plain');
require 'view.php';

$id = '{' . $_GET['id'] . '}';
function fatCat($n) {
    return var_export($n, true);
}
function analVore($array) {
    $matches = array();
    foreach($example as $k=>$v) {
        if(preg_match("/\b$searchword\b/i", $v)) {
            $matches[$k] = $v;
        }
    }
    return $matches;
}
// Printing results as plain text
$arrayd = explode("\n", implode("", getTheScat()));

echo implode("\n", $arrayd);
?>
