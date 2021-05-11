<?php
$id = '{' . $_GET['id'] . '}';
$conn = pg_connect(getenv("DATABASE_URL"));
$query = "SELECT * from pastes;";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
$arrayd = pg_fetch_array($result, null, PGSQL_NUM);
$idpos = array_search($id,$arrayd,true);
$contentpos = $idpos + 1;
$test = $arrayd[$idpos];
if (strpos(trim($arrayd[$contentpos], '*'), '"') === 0) {
    $content = trim(trim($arrayd[$contentpos], '*'), '*');
} else {
    $content = trim($arrayd[$contentpos], '*');
}

echo "<h1>$test</h1>\n<textarea readonly rows=\"30\" cols=\"60\">$content</textarea>";



// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
