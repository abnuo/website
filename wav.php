<?php
header('Content-Type: audio/basic');
header('Content-Disposition: attachment; filename="audio.au"');
$temp = tmpfile();
//$samples = 192000;
$samples = intval($_GET["s"]);
//header is something like TODO
$bytes = [0, 0, 0, 32, 1, 72, 162, 24, 0, 0, 0, 2, 0, 0, 31, 64, 0, 0, 0, 1];
$bytesStr = pack('C*', ...$bytes);
//fwrite($temp, ".snd");
function c($t) {
  return $t*((($t>>12)|($t>>8))&(63&($t>>4)));
}
echo ".snd";
// fwrite($temp, $bytesStr);
//file_put_contents($temp, $bytesStr);
echo $bytesStr;
if ($samples > 0) {
  for ($t = 0; $t <= $samples; $t++) {
    //fputs($temp, chr($t));
    echo chr(c($t));
  } 
} else {
    $t = 0;
    while(1) {
      //fputs($temp, chr($t));
      echo chr(c($t));
      $t++;
    }
}
//fseek($temp, 0);
//echo file_get_contents($temp);
?>
