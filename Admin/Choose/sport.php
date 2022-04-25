<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="s.css">
<link rel="stylesheet" href="../navbar/navbar2.css">
    <title>Sports</title>
</head>
<body>
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
    <br><br><br>
    <div class="container-fluid" id="sports">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6" id="a">
          <div class="card" id="football" type="button">
            <div class="card-body">
              <h5 class="card-title">Points Table</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6" id="b">
          <div class="card"  id="cricket" type="button">
            <div class="card-body">
              <h5 class="card-title">Fixture</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      echo $_SESSION["sport"]; 
    ?>
</body>

</html>