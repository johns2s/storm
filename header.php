<?php
include("config.php");
/* to debug uncomment: ini_set('display_errors', 1); */
?>

<!doctype html>

<html>

<head>
  <title>Storm: Better sharing</title>
  <meta charset = "UTF-8">
  <link rel="icon" href="media/logo.png" type="image/png">
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Italianno|Source+Sans+Pro" rel="stylesheet">
  <!-- <script src="https://cdn.jsdelivr.net/npm/moment@2/moment.min.js"></script> -->
  <!-- JSDelivr down? Try this: <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> -->
</head>

<body>

<header>
  <a href = "index.php" class = "headerTitle">
    Storm
   </a>

   <nav>

   <?php
    if (isset($_SESSION["user"])) {
      echo "<div id = 'navBig'><a href = 'settings.php' class = 'navLink'>Settings</a><a href = 'logsign.php?logout=true&token=" . $_SESSION['userToken'] . "' class = 'navLink'>Logout</a></div>";
      echo "<div id = 'navSmall'><a title = 'settings' alt = 'settings' href = 'settings.php' class = 'navLink'><img class = 'headIcon' src = 'settings.png'></a><a title = 'logout' alt = 'logout' href = 'logsign.php?logout=true&token=" . $_SESSION['userToken'] . "' class = 'navLink'><img class = 'headIcon' src = 'logout.png'></a></div>";

    }
    else {
      echo "<a href = 'login.php' class = 'navLink'>Login</a><a href = 'signup.php' class = 'navLink'>Signup</a>";
    }
    ?>

  </nav>

</header>
