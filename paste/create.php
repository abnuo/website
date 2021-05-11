<?php
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$id = generateRandomString(5);
$content = $_POST["content"];
$conn = pg_connect(getenv("DATABASE_URL"));
$query = "INSERT INTO pastes\n    VALUES (ARRAY['$id'], ARRAY['$content']);";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<p>URL:</p><textarea rows="1" cols="0">https://" . $_SERVER['HTTP_HOST'] . "/paste/get.php?id=$id</textarea>";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($conn);
?>
