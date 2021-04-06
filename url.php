<html>
  <head>
  <?php
  $url = htmlspecialchars($_GET["q"]);
  header('Location: ' . $url);
  exit;
  ?>
  </head>
  <body>
  </body>
</html>