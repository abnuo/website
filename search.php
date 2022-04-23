<?php
require "searchconfig.php";

function search(string $q,string $keyword="web",int $page=1) {
	$opts = array('http'=>array('header' => "User-Agent: search.php/1.0\r\n"));
	$context = stream_context_create($opts);
	$response = json_decode(file_get_contents("https://api.qwant.com/v3/search/".$keyword."?q=".urlencode($q)."&count=10&offset=".strval(($page-1)*10)."&locale=en_us",false,$context),true);
	$results = [];
	if($keyword == "web") {
		foreach($response["data"]["result"]["items"]["mainline"][0] as $row) {
			if(gettype($row) == "array") {
				foreach($row as $i) {
					array_push($results,$i);
				}
			}
		}
	} else {
		$results = $response["data"]["result"]["items"];
	}
	return $results;
}
if(array_key_exists("q",$_GET)) {
	$query = $_GET["q"];
} else {
	require "searchhome.php";
}
if(array_key_exists("k",$_GET)) {
	$keyword = $_GET["k"];
} else {
	$keyword = "web";
}
if(array_key_exists("p",$_GET)) {
	$page = intval($_GET["p"]);
} else {
	$page = 1;
}
$results = search($query,$keyword,$page);
?>
<p id="resultsnum"><?php echo count($results); ?> results</p>
<div id="results">
<?php
foreach($results as $i) {
	echo "<div class=\"result\">";
	echo "<a href=\"".$i["url"]."\">".htmlspecialchars($i["title"])."</a>";
	if(isset($i["desc"])) {
		echo "<p>".htmlspecialchars($i["desc"])."</p>";
	}
	if(isset($i["media"])) {
		echo "<br><img src=\"".$i["media"]."\" alt=\"".htmlspecialchars($i["title"])."\" width=\"500\">";
	}
	echo "</div>";
}
?>
</div>
<hr>
<nav id="footer"><a href="?">Search</a> | <a href="<?php echo "?q=".$_GET["q"]."&k=".$_GET["k"]."&p=".strval($page-1); ?>">Previous</a> | <a href="<?php echo "?q=".$_GET["q"]."&k=".$_GET["k"]."&p=".strval($page+1); ?>">Next</a> | Getting bad results? Try refreshing the page.</nav>
