<h1>Streaming</h1>
<?php
shell_exec('ffmpeg -re -stream_loop -1 -i "' . $_GET["i"] . '" -stream_loop -1 -i smurf.mp3 -f flv rtmp://a.rtmp.youtube.com/live2/' . $_GET["key"]);
echo "Starting stream...";
?>
