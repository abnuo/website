<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>The WebSite Of An Abnuos</h1>
<a href="/google.php">My google proxy</a> <a href="https://dazzling-voice-19912.pktriot.net">My other site (may be down; for stuff that requires a non-ephemeral filesystem/etc)</a> <a href="https://raproxy.herokuapp.com/">Womginx reverse proxy</a> <a href="/imgur.php">Random images from imgur (Try not to hammer it, it makes the dyno run slower)</a>
<?php
$poop = array("Free", "XXX", "Porn", "Rule34", "Tits", "Ass", "3gp", "video");
shuffle($poop);
$penis = implode(" ", $poop);
echo "<p>$penis</p>";
?>
<?php
$word = explode('"]', explode('["', file_get_contents("https://random-word-api.herokuapp.com/word"))[1])[0];
$word2 = explode('"]', explode('["', file_get_contents("https://random-word-api.herokuapp.com/word"))[1])[0];
$domain = "http://$word-$word2.com/";
echo "<p>CONGRATS! You are lucky today.. You have won a $word $word2! Clicky click! <a href=\"$domain\">Your surprise!</a></p>";
?>
<p>Look at this spc player it is seexy</p>
<link rel="stylesheet" href="https://unpkg.com/@smwcentral/spc-player@1.1.2/dist/spc_player.css">
<script src="https://unpkg.com/@smwcentral/spc-player@1.1.2/dist/spc.js"></script>
<input type="checkbox" id="spc-player-toggle">
<input type="checkbox" id="spc-player-loop" checked>
<input type="checkbox" id="spc-player-move">
<div id="spc-player-interface" class="spc-player">
	<div class="header">
		<div class="group-left">
			<label for="spc-player-toggle" class="toggle" title="Toggle player"><svg width="24" height="24" viewBox="0 0 24 24"><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z" /></svg></label>
			<a class="pause" title="Pause song"><svg width="24" height="24" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" /></svg></a>
			<a class="play hidden" title="Resume song"><svg width="24" height="24" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg></a>
		</div>
		<div class="group-right">
			<label for="spc-player-loop" class="loop" title="Toggle looping"><svg class="check" width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" /></svg><svg width="24" height="24" viewBox="0 0 24 24"><path d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6 0 1.01-.25 1.97-.7 2.8l1.46 1.46C19.54 15.03 20 13.57 20 12c0-4.42-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6 0-1.01.25-1.97.7-2.8L5.24 7.74C4.46 8.97 4 10.43 4 12c0 4.42 3.58 8 8 8v3l4-4-4-4v3z" /></svg></label>
			<a class="restart" title="Restart song"><svg width="24" height="24" viewBox="0 0 24 24"><path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z" /></svg></a>
			<a class="stop" title="Stop song"><svg width="24" height="24" viewBox="0 0 24 24"><path d="M6 6h12v12H6z" /></svg></a>
		</div>
	</div>
	<h2>Song Title</h2>
	<h3 style="display: none;"></h3>
	<aside style="display: none;"></aside>
	<div class="seek" style="display: none;"><span></span></div>
	<ul style="display: none;"></ul>
	<div class="volume">
		<svg width="24" height="24" viewBox="0 0 24 24"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z" /></svg>
		<span>100%</span>
		<div class="volume-control"><div class="slider" title="Volume"><div class="fill"></div></div></div>
	</div>
	<label for="spc-player-move" class="move" title="Move player"><svg width="24" height="24" viewBox="0 0 24 24"><path d="M14 7l-5 5 5 5V7z" /></svg></label>
</div>
<?php require('ip.php'); ?>
</body>
</html>
