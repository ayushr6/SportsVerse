<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../navbar/navbar2.css">
    <title>Document</title>
</head>
<body>
<div class="area" >
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
        <div class="logo"> <img src="../../navbar/SportsVerse-removebg-preview.png" alt=""></div>
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
    <div class="container-fluid" id="sports">
        <form action='' method='POST'>
            <input type="submit" name="add_college" value="Add College" id="add" class="button"/>
            <input type="submit" name="add_team" value="Add Team" id="addt" class="button"/>
            <input type="submit" name="add_fixture" value="Add Fixture" id="addf" class="button"/><br>
            <input type="submit" name="update_fixture" value="Update Fixture" id="uf" class="button"/>
        </form>
    </div>
</div>
    <?php
        $_SESSION["category"] = "Boys";
        if (isset($_POST['add_college']) ) {
            header("location: ../Add College/add_college.php");
        }
        if (isset($_POST['add_team']) ) {
            header("location: ../Add Team/add_team.php");
        } 
        if (isset($_POST['add_fixture']) ) {
            header("location: ../../Update/college.php");
        }
        if (isset($_POST['update_fixture']) ) {
            header("location: ../../Update/update_table.php");
        }
    ?>
    
</body>
</html>