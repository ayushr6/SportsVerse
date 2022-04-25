<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="update-style.css">
    <link rel="stylesheet" href="../navbar/navbar2.css">
    <title>Document</title>
    <style>
      <?php include "style.css";?>
    </style>
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
    <br><br><br><br>
  <!-- <br><br><br><br><br>
  <form action='' class='form' name="form" method="post">
    <p class='field half required error'>
          <label class='label' for='match_no'>Enter Match No&nbsp;&nbsp;</label>
          <input class='text' id='match_no' name='match_no' required type='text' value='2'>
          &nbsp;&nbsp;
        <button type="button" class="btn-lg btn-outline-success" onclick="validateForm()">Update</button>
  </p>
    </form> -->
    <br><br><br><br>
    <form action='update.php' class='form' name='form' method='POST'>
    
            <p class='field half required error'>
                <label class='label' for='team1_id'>Team 1 Name</label>
                <input class='text-input' id='team1_id' name='team1_id' required type='text' value=''>
            </p>
            <p class='field half required'>
                <label class='label' for='team2_id'>Team 2 Name</label>
                <input class='text-input' id='team2_id' name='team2_id' required type='text' value=''>
            </p>
            <p class='field half required'>
                <label class='label' for='sport'>Sport</label>
                <input class='text-input' id='sport' name='sport' required type='text' value=''>
            </p>
            <p class='field half required'>
                <label class='label' for='match_id'>Match ID</label>
                <input class='text-input' id='match_id' name='match_id' required type='text' value=''>
            </p>
            <p class='field half required'>
                <label class='label' for='date'>Date</label>
                <input class='text-input' id='date' name='date' required type='text' value=''>
            </p>
            <p class='field half required'>
                <label class='label' for='time'>Time</label>
                <input class='text-input' id='time' name='time' required type='text' value=''>
            </p>
            <p class='field half required'>
                <label class='label' for='category'>Category</label>
                <input class='text-input' id='category' name='category' required type='text' value=''>
            </p>
            <p class='field half required'>
                <label class='label' for='winnner'>Winner</label>
                <input class='text-input' id='rst' name='rst' required type='text' value=''>
            </p><br>
            <div>
            <input class='button' type='submit' value='Update' onclick='nam()'>
            </div>
            </form>

</div>
</body>
<script>
// function myFunction() {
//   var x = document.getElementById("form");
//   x.style.display = "block";
// }
function validateForm() {
  var x = document.getElementById("match_no").value;
  if (x == "" || x == null || x == " ") {
    alert("Match No must be filled out");
    return false;
  }else{
    myFunction()
  }
}
</script>
</html>