<?php
$id = $_GET['id'];
$conn = pg_connect(getenv("DATABASE_URL"));
$query = "SELECT * from pastes WHERE id='" . $id . "';";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
$arrayd = pg_fetch_array($result, null, PGSQL_ASSOC);
$idpos = array_search($id,$arr,true);
$contentpos = $idpos + 1;
$content = htmlspecialchars($arrayd[$contentpos]);

echo "<h1>$id</h1>\n<textarea readonly rows="30" cols="60">$content</textarea>";



// Free resultse
pg_free_result($result);


pg_close($dbconn);
?>
