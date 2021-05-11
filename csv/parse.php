<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head><?php
echo "\n<body>\n<table>\n\n";
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
echo "\n</table>\n</body>\n</html>";
?>
