<?php
header('Content-Type: audio/basic');
header('Content-Disposition: attachment; filename="audio.au"');
$temp = tmpfile();
//$samples = 192000;
$samples = intval($_GET["s"]);
$bytes = [0, 0, 0, 32, 1, 72, 162, 24, 0, 0, 0, 2, 0, 0, 31, 64, 0, 0, 0, 1];
$bytesStr = pack('C*', ...$bytes);
//fwrite($temp, ".snd");
echo ".snd";
// fwrite($temp, $bytesStr);
//file_put_contents($temp, $bytesStr);
echo $bytesStr;
for ($t = 0; $t <= $samples; $t++) {
  //fputs($temp, chr($t));
  echo chr($t);
}
//fseek($temp, 0);
//echo file_get_contents($temp);
?>
