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
if (stripslashes(substr($arrayd[$contentpos], 1, -1))[0] == '"') {
    $content = trim(stripslashes(substr($arrayd[$contentpos], 1, -1)), '"');
} else {
    $content = stripslashes(substr($arrayd[$contentpos], 1, -1));
}

echo "<h1>$idpos:$id</h1>\n<textarea readonly rows=\"13\" cols=\"60\">" . htmlspecialchars($content) . "</textarea><br>";
?>
<a href="/paste/raw.php?id=<?php echo $_GET['id']; ?>">Raw</a><a href="/paste/">Create paste</a>
