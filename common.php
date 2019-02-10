<?php

//Ouputs the header for the page and open the body tag , function import all stylesheets to the webpage
function outputHeader($title)
{
    print('
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <meta name="description" content="Banks game - coursework one for Middlesex University of London">
         <meta name="author" content="Szymon Klimek">
         <title>' . $title . '</title>
         <!-- Link to external style sheets: bootstrap lib, main stylesheet, navigation stylesheet, flipping-card animation -->
         <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="css/main.css">
         <link rel="stylesheet" href="css/scrolling-nav.css">
         <link rel="stylesheet" href="css/flip-card.css">
         <!-- Sign up script for creating account and store user details in local browser storage -->
');
}

// same header as above, includes js file for the game and different body tag with function setupStage()
function outputHeaderGame($title)
{
    print('
     <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Banks game - coursework one for Middlesex University of London">
  <meta name="author" content="Szymon Klimek">
  <title> ..title.. </title>
  <!-- Link to external style sheets: bootstrap lib, main stylesheet, navigation stylesheet, flipping arnimation, stylesheet -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/scrolling-nav.css">
  <link rel="stylesheet" href="css/flip-card.css">

  <script src="js/game-engine.js"></script>

</head>
<body onload="Main();">

');
}


function outputHeaderLeaderboard($title)
{
    print('
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Banks game - coursework one for Middlesex University of London">
  <meta name="author" content="Szymon Klimek">
  <title> ..title.. </title>
  <!-- Link to external style sheets: bootstrap lib, main stylesheet, navigation stylesheet, flipping arnimation, stylesheet -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/scrolling-nav.css">
  <link rel="stylesheet" href="css/flip-card.css">
</head>
<body onload="printRanking();">

');
}



/* Ouputs the navigation bar and logo */
function outputNavigation($pageName){
    //Output logo and first part of navigation
    print('
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="assets/banks-logo-shade.png" /></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            ');

    //Array of pages to link to
    $linkNames = array("Home", "Profile", "Game", "Leaderboard");
    $linkAddresses = array("index.php", "profile.php", "game.php", "leaderboard.php");

    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<li class="nav-item"><a class="nav-link ';
        if($linkNames[$x] == $pageName){
            echo 'active ';
        }
        echo ' " href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li>';
    }
    print('
         </ul>
         </div>
         </div>
         </nav>
    ');
}

// Funcion display fixed footer wtih icons
function outputFooter(){

    print('
  <!-- FOOTER  -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 text-center">
          <img src="assets/banks-footer.png">
        </div>
        <div class="col-lg-6 text-center">
          <p class="m-0 glow">Copyright &copy; 2019 Author: Szymon Klimek<br> Middlesex University of London</p>
        </div>
        <div class="col-lg-3 text-center">
          <img src="assets/createjs-badge-dark.png">
          <img src="assets/bootstrap-solid.svg" width="37px">
        </div>
      </div>
    </div>
  </footer>

   
   ');
}

// Function output all scripts before closing body tag
function outputScripts(){

    print('
        <!-- Signup / Login functions -->
  <script src="js/sign-up-mdx.js"></script>
  <!-- Jquery core JavaScript -->
  <script src="js/jquery/jquery.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- Createjs for game animation -->
  <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>

</body>
</html>
   
   ');
}

