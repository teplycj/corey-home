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

    <title>Corey Teply</title>
  </head>
  <body>
    <div class="header">
      <span class='logo'>Corey Teply</span>
      <div class="header-right">
        <a class="active" href="index.php">Home</a>
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
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class='row'>
        <div class="halfColumn">
          <img src="www/home_pic.jpg" width="80%" height="80%" style="border-radius:25px;align:center;padding:10px">
        </div>
        <div class="halfColumn">
          <h1>Corey Teply</h1>
          <h4>
            Experienced researcher and data scientist skilled in problem solving and software engineering. I'm eager to learn, collaborate, and contribute to innovative teams pushing the boundaries in health research, green energy, commerce, or other fields where my expertise can make an impact.
          </h4>
          <hr>
          <div class="row">
            <div class="picColumn">
              <a target="_blank" href="https://www.healthdata.org/"><img src="www/ihme_logo.png" width="95%" height="95%" style="padding-top: 10px" alt=""></a>
            </div>
            <div class="bigColumn">
              <h3 style="float:left;padding-left:10px">Health Researcher at the IHME</h3>
            </div>
          </div>
          <div class="row">
            <div class="picColumn">
              <a target="_blank" href="https://www.publicpoolconsulting.com/"><img src="www/publicpool.png" width="95%" height="95%" style="padding: 0px 0px" alt=""></a>
            </div>
            <div class="bigColumn">
              <h3 style="float:left;padding: 10px 10px">Owner of Public Pool Consulting, LLC</h3>
            </div>
          </div>
          <div class="row">
            <div class="picColumn">
              <a target="_blank" href="https://www.wwu.edu/"><img src="www/wwu.png" width="60%" height="60%" style="padding: 0px 10px" alt=""></a>
            </div>
            <div class="bigColumn">
              <h3 style="float:left;padding: 1px 1px 5px">Master's of Science, Western Washington University</h3>
            </div>
          </div>
          <hr>
          <h2>Quick Links:</h2>
          <ul>
            <li>
              <a href="resume"><h4><span>R&#233;sum&#233;</span></h4></a>
            </li>
          </ul>
          <ul>
            <li>
              <a target="_blank" href="https://github.com/teplycj"><h4><span>GitHub</span></h4></a>
            </li>
          </ul>
          <ul>
            <li>
              <a target="_blank" href="https://www.linkedin.com/in/corey-teply-59b80517a/"><h4><span>LinkedIn</span></h4></a>
            </li>
          </ul>
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
