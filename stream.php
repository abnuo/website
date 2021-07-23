<h1>Streaming</h1>
<?php
shell_exec("ffmpeg -re -i noise -f tee rtmp://a.rtmp.youtube.com/live2/" . $_GET["key"]);
echo "Starting stream...";
?>
