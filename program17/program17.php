<!DOCTYPE html>
<html>
<head>
    <title>Check whether the page is called https or http</title>
</head>
<body>
  <?php
  echo "<h3>Check whether the page is called https or http</h3>";
  if (!empty($_SERVER['HTTPS'])) 
  {
    echo 'https is enabled';
  }
  else
  {
  echo 'http is enabled'."\n";
  }
  ?>
</body>
</html>
