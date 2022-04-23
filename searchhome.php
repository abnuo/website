<?php
@require "searchconfig.php";
if(!array_key_exists("k",$_GET)) {
	$_GET["k"] = "web";
}
?>
<html>
  <head>
    <title><?php echo htmlspecialchars(SITE_NAME); ?></title>
  </head>
  <body>
    <nav id="navbar"><a href="?k=web">Web</a> | <a href="?k=images">Images</a></nav>
	<img src="<?php echo htmlspecialchars(LOGO); ?>"/>
	<form action="/search.php" method="GET">
	  <input type="text" id="q" name="q">
	  <input type="hidden" id="k" name="k" value="<?php echo htmlspecialchars($_GET["k"]); ?>">
	  <input type="submit" value="Search">
	</form>
  </body>
</html>
<?php
die();
?>
