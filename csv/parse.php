<?php
echo "<html><body><table>\n\n";
$f = tmpfile();
fwrite($f, $_GET["csv"]);
fseek($f, 0);
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>
