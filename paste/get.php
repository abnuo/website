<?php
$id = '{' . $_GET['id'] . '}';
$conn = pg_connect(getenv("DATABASE_URL"));
$query = "SELECT * from pastes;";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

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
$arrayd = explode("\n", file_get_contents("http://localhost/paste/view.php"));
$idpos = array_search($id,$arrayd,true);
$contentpos = $idpos + 1;
if (strpos(trim($arrayd[$contentpos], '*'), '"') === 0) {
    $content = trim(trim($arrayd[$contentpos], '*'), '*');
} else {
    $content = trim($arrayd[$contentpos], '*');
}

echo "<h1>$test:$ids:$contents:$idpos</h1>\n<textarea readonly rows=\"30\" cols=\"60\">$content</textarea>";



// Free resultset
pg_free_result($result);

// Closing connection
pg_close($conn);
?>
