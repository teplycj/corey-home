<?php
  session_start();
  date_default_timezone_set('America/Los_Angeles');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=.5">
    <link rel="stylesheet" href="../style/steezyStyle.css">
    <link rel="stylesheet" href="../style/navBarStyle.css">
    <link rel="stylesheet" href="../style/header.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="project_logic.js"></script>
    <title>Corey Teply - Shiny Apps</title>
  </head>
  <body onload="loadActive('publicpool')">
    <div class="header">
      <span class='logo'>Corey Teply</span>
      <div class="header-right">
        <a href="../index.php">Home</a>
        <div class="dropdown">
          <button onclick="location.href='projects/projects.php';" class="activebtn">Projects</button>
          <div class="dropdown-content">
            <a href="public-pool.php">Public Pool</a>
            <a href="shiny-apps.php">Shiny Apps</a>
            <a href="chemisty.php">Chemistry</a>
            <a href="music.php">Music</a>
            <a href="woodworking.php">Woodworking</a>
          </div>
        </div>
        <a  href="../about.php">About</a>
        <a href="../contact.php">Contact</a>
      </div>
    </div>
    <hr>
    <br>
    <div class="container">
      <div class="row">
        <div class="menuColumn">
          <h1>Shiny Apps</h1>
          <hr>
          <ul style="width:98%">
            <li>
              <a><h4><span id="publicpool" onclick="changeClass(this.id)" class="item-text active">Public Pool Demo</span></h4></a>
            </li>
          </ul>
          <ul style="width:98%">
            <li>
              <a><h4><span id="beermap" onclick="changeClass(this.id)" class="item-text">Beer Map</span></h4></a>
            </li>
          </ul>
        </div>
        <div class="editTableColumn">
          <h2 id = 'shiny_header'>Public Pool Demo</h2>
          <span id = 'shiny_app_output'></span>
        </div>
      </div>
      <hr>
      <footer style="text-align:center;">
       <p>Corey Teply</p>
       <p>&#169; 2025</p>
      </footer>
    </div>
  </body>
</html>
