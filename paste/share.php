
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
    $content = str_replace("\\n","\n",trim(stripslashes(substr($arrayd[$contentpos], 1, -1)), '"'));
} else {
    $content = str_replace("\\n","\n",stripslashes(substr($arrayd[$contentpos], 1, -1)));
}

url = file_get_contents('http://tinyurl.com/api-create.php?url='.'data:text/plain;base64,' . base64_encode($content));
echo "<textarea readonly rows="0" cols="0">" . htmlspecialchars($url) . "</textarea>";
?>
