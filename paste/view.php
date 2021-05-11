<?php
function getTheScat() {
    $conn = pg_connect(getenv("DATABASE_URL"));
    $query = "SELECT * from pastes;";
    $result = pg_query($query) or die('Query failed: ' . pg_last_error());

    // Printing results
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        foreach ($line as $col_value) {
            echo "$col_value\n";
        }
    }

    // Free resultset
    pg_free_result($result);

    // Closing connection
    pg_close($conn);
}
?>
