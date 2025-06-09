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
    <!-- Favicon (add later) -->
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="styles.css">
    <!-- Link to fonts: Zen Dots, Varela Round -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&family=Zen+Dots&display=swap" rel="stylesheet">
    <!-- Link to Font Awesome -->
    <script src="https://kit.fontawesome.com/619bfd8718.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <?php
      include "header.php";
    ?>
  </header>
  <footer>
  </footer>
</body>
</html>
