<?php
//cookie
$cookie_name = "user";
$cookie_value = "Yahoo Baba";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");  // 86400 = 1 day

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (!isset($_COOKIE[$cookie_name])) {
    echo "not set";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
  }
  ?>
</body>

</html>