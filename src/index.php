<?php
// If the request is made from our space preview functionality then turn on PHP error reporting
if (isset($_SERVER['HTTP_X_FORWARDED_URL']) && strpos($_SERVER['HTTP_X_FORWARDED_URL'], '.w3spaces-preview.com/') !== false) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Advacruit</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../Advacruit_favicon.png">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="styles.css">
    <!-- Link to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Varela+Round&family=Zen+Dots&display=swap" rel="stylesheet">
    <!-- Link to Font Awesome -->
    <script src="https://kit.fontawesome.com/619bfd8718.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      include "header/header-html.php";
      include "main/main-html.php";
      include "footer/footer-html.php";
    ?>
  </body>
</html>
