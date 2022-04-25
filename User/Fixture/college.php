<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css"> 
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
    <br><br><br><br><br>
    <!-- <div class="btn-div">
      <form method="POST">
        <input name="category" value="Girls" onclick="getVal();" id="category" class="button"/>
      </form>
    </div> -->
    <div class="search">
      <div class="input_search">
        <h4>Enter Team Name</h4>
        <input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search for team.." title="Type in a name">
      </div>
      <div class="input_search">
        <h4>Enter Date</h4>
        <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="YYYY-MM-DD" title="Type in a name">
      </div>
    </div>
    <!-- <script src="javava.js"></script> -->
    <table class="table table-bordered" id="myTable">
        <thead>
          <tr id="header">
            <th scope="col">Match No</th>
            <th scope="col">Team 1</th>
            <th scope="col">Team 2</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Winner</th>
          </tr>
        </thead>
        <tbody>
          <?php include "match_no.php";?>          
        </tbody>
      </table>
  </div>
      <script>
        <?php $_SESSION["category"] = "boys" ?>
        if($_SESSION["category"]=="boys"){
          var ele = document.getElementById('category');
          ele.value = "Girls";
        }
        else{
          var ele = document.getElementById('category');
          ele.value = "Boys";
        }
        function getVal() {
          var ele = document.getElementById('category');
          if (ele.value=="Girls") {
            ele.value = "Boys";
            <?php $_SESSION["category"] = "Girls";?>
            window.location.reload();
          }
          else if(ele.value=="Boys") {
            ele.value = "Girls";
            <?php $_SESSION["category"] = "Boys";?>
            window.location.reload();
          }
        }
      </script>
      <script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td1 = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[2];
    if (td1 || td2) {
      txtValue = td1.textContent || td1.innerText;
      if (td1.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td1 = tr[i].getElementsByTagName("td")[3];
    if (td1) {
      txtValue = td1.textContent || td1.innerText;
      if (td1.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>