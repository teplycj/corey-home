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
    <link rel="stylesheet" href="style/header.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Corey Teply - About</title>
  </head>
  <body>
    <div class="header">
      <span class='logo'>Corey Teply</span>
      <div class="header-right">
        <a href="index.php">Home</a>
        <div class="dropdown">
          <button onclick="location.href='projects/projects.php';" class="dropbtn">Projects</button>
          <div class="dropdown-content">
            <a href="projects/public-pool.php">Public Pool</a>
            <a href="projects/shiny-apps.php">Shiny Apps</a>
            <a href="projects/chemisty.php">Chemistry</a>
            <a href="projects/music.php">Music</a>
            <a href="projects/woodworking.php">Woodworking</a>
          </div>
        </div>
        <a class="active"  href="about.php">About</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row">
        <img src="www/about_top_pic.jpg" width="65%" height="65%" class="verticalCenter" style="border-radius:25px;" alt="">
      </div>
      <div class="row">
        <br>
        <p class="smallContainer">
          My name is Corey, and I live in Eugene, Oregon. I am currently employed at Univeristy of Washington's <a target="_blank" href="https://www.healthdata.org/" style="color:#202121">Institute for Health Metrics and Evaluation</a> as a data scientist and health researcher.
          I also am the owner of <a target="_blank" href="https://www.publicpoolconsulting.com/" style="color:#202121">Public Pool Consulting, LLC</a> - a consulting business that helps restaurants design equitable tip pool structures for their hourly staff, along with helping compile sales data to help restaurants track trends.<br>
          <br>
          I enjoy hiking
        </p>
      </div>
      <br>

      <hr>
      <footer style="text-align:center;">
       <p>Corey Teply</p>
       <p>&#169; 2025</p>
    </footer>
    </div>
  </body>
</html>
