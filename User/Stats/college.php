<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style1.css"> 
  <link rel="stylesheet" href="../navbar/navbar2.css">
    <title>Document</title>
</head>
<body>
<div class="area">
        <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
        </ul>
<nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"> <img src="../navbar/SportsVerse-removebg-preview.png" alt=""></div>
        <ul class="links">
            <li><a href="#home">Home</a></li>
            <li><a href="#work">Admin Login</a></li>
            <li><a href="#contact">About Us</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <table class="table table-bordered">
        <thead class="thead-light">
          <tr id="header">
            <th scope="col">Team ID</th>
            <th scope="col">Matches Played</th>
            <th scope="col">Matches Won</th>
            <th scope="col">Matches Lost</th>
            <th scope="col">Points</th>
          </tr>
        </thead>
        <tbody>
          <?php include "match_no.php";?>          
        </tbody>
      </table>
  </div>
</body>
</html>