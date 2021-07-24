<h1>Streaming</h1>
<?php
shell_exec('ffmpeg -re -i "' . $_GET["i"] '" -i smurf.mp3 -vf "loop=loop=-1:size=1:start=0" -f flv rtmp://a.rtmp.youtube.com/live2/' . $_GET["key"]);
echo "Starting stream...";
?>
