<?php
  session_start();
  date_default_timezone_set('America/Los_Angeles');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=.5">
    <link rel="stylesheet" href="style/steezyStyle.css">
    <link rel="stylesheet" href="style/navBarStyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Corey Teply</title>
  </head>
  <body>
    <div class="header">
      <span class='logo'>Corey Teply</span>
      <div class="header-right">
        <a class="active" href="index.php">Home</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
      </div>
    </div>
  </body>
  <hr>
  <div class='row'>
    <div class="halfColumn">
      <img src="www/home_pic.jpg" width="80%" height="80%" style="border-radius:25px;align:center;padding:10px">
    </div>
    <div class="column">
      <h1>Welcome!</h1>
    </div>
  </div>
</html>
