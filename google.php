<?php
    $data = file_get_contents('https://www.google.com');
    $data = str_replace("/search", "/search.php", $data);
    $data = str_replace("<img alt=\"Google\" height=\"92\" src=\"/images/branding/googlelogo/1x/googlelogo_white_background_color_272x92dp.png\" style=\"padding:28px 0 14px\" width=\"272\" id=\"hplogo\">", "<img alt=\"Google\" height=\"240\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/350px-Webysther_20160423_-_Elephpant.svg.png\" style=\"padding:28px 0 14px\" width=\"350\" id=\"hplogo\">", $data);
    echo $data;
?>