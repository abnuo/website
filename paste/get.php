<?php
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
// Printing results in HTML
$arrayd = explode("\n", implode("", getTheScat()));
$idpos = array_search($id,$arrayd);
$contentpos = $idpos + 1;
if ($arrayd[$contentpos][1] == '"') {
    $content = trim(trim($arrayd[$contentpos], '*'), '*');
} else {
    $content = trim($arrayd[$contentpos], '*');
}

echo "<h1>$idpos:$id</h1>\n<textarea readonly rows=\"30\" cols=\"60\">$content</textarea>";
?>
