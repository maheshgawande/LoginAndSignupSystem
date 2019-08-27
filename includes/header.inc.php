<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
      async
    />
    <link rel="stylesheet" href="css/style.css" defer />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo">
          <span>YOURLOGO</span>
        </div>
        <ul class="nav">
          <li class="nav-logsign">
            <?php
              if (!isset($_SESSION['uname'])) {
                echo '<a href="html/login.html">login</a>
                <span>&nbsp;|&nbsp;</span>
                <a href="html/signup.html">signup</a>';
              } else {
                echo '<span>'.$_SESSION['uname'].'</span>&nbsp;|&nbsp;<a href="includes/logout.php">logout</a>';
              }
            ?>
          </li>
          <li><a href="index.php">Home</a></li>
          <li><a href="html/services.html">Services</a></li>
          <li><a href="html/about.html">About</a></li>
          <li><a href="html/contact.html">Contact</a></li>
          <li><a href="html/faq.html">FAQ</a></li>
        </ul>
        <div class="header-search">
          <input
            type="text"
            name="search"
            aria-label="search"
            placeholder="search"
          />
          <label for="search">
            <img src="img/icon-search.svg" alt="search icon" z />
          </label>
        </div>
        <img src="img/icon-user.svg" alt="user icon" class="user-icon" />
        <div class="logsign">
          <?php
            if (!isset($_SESSION['uname'])) {
              echo '<a href="html/login.html">login</a>
              <span>&nbsp;|&nbsp;</span>
              <a href="html/signup.html">signup</a>';
            } else {
              echo '<span>'.$_SESSION['uname'].'</span>&nbsp;|&nbsp;<a href="includes/logout.php">logout</a>';
            }
          ?>
        </div>
        <div class="ham-menu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </header>