<!DOCTYPE html>
<html lang="en">
<head> 
  <link rel="stylesheet" href="style1.css"> 
  <link rel="stylesheet" href="../navbar/navbar2.css"> 
    
    <title>Document</title>
     
</head>
<body>
<nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"> <img src="../navbar/SportsVerse-removebg-preview.png" alt=""></div>
        <ul class="links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Sports</a></li>
            <li><a href="#work">Admin Login</a></li>
            <li><a href="#contact">About Us</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <table class="table">
      <thead class="thead-light">
        <tr id="header">
          <th>College ID</th>
          <th>College Name</th>
          <th>State</th>
          <th>City</th>
        <tr>
      </thead>

      <tbody>
        <?php include 'connect.php';?>
      </tbody>

    </table>

</body>
</html>