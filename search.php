<html>
  <head>
    <?php
    $search = urlencode(htmlspecialchars($_GET["q"]));
    if(isset($_GET['tbm'])){
      if (htmlspecialchars($_GET["tbm"]) == 'isch') {
        $mode = 'img';
      }
      }else{
        $mode = 'all';
      }
    ?>
    <title><?php echo $search . ' - PHP Proxy'?></title>
  </head>
  <body>
    <?php
    if ($mode == 'all') {
      if (isset($_GET['start'])) {
          $data = file_get_contents('https://www.google.com/search?q=' . $search . "&start=" . $_GET['start']);
      } else {
          $data = file_get_contents('https://www.google.com/search?q=' . $search);
      }
      $data = str_replace("/search", "/search.php", $data);
      $data = str_replace("/?sa", "/google.php?sa", $data);
      $data = str_replace("/url", "/url.php", $data);
    } elseif ($mode == 'img') {
      if (isset($_GET['start'])) {
          $data = file_get_contents('https://www.google.com/search?q=' . $search . '&tbm=isch' . "&start=" . $_GET['start']);
      } else {
          $data = file_get_contents('https://www.google.com/search?q=' . $search . '&tbm=isch');
      }
      $data = str_replace("/search", "/search.php", $data);
      $data = str_replace("/?sa", "/google.php?sa", $data);
      $data = str_replace("/url", "/url.php", $data);
    }
    echo $data;
    ?>
  </body>
</html>
