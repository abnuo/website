<?php
$poop = shell_exec("node tracery.js");
$sexypoop = trim(json_encode($poop), '*');
echo $poop;
require 'webhok.php';
?>
<script>
const Http = new XMLHttpRequest();
const url='/phantom.php?html=' + encodeURIComponent(document.documentElement.innerHTML);
Http.open("GET", url);
Http.send();

Http.onreadystatechange = (e) => {
  console.log(Http.responseText)
}
</script>
