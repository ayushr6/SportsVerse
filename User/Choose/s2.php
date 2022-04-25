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
    <link rel="stylesheet" href="s12.css">
    <link rel="stylesheet" href="../../navbar/navbar2.css">
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
            <input id="nav-toggle" type="checkbox" />
            <div class="logo"><img src="../../navbar/SportsVerse-removebg-preview.png" alt="" /></div>
            <ul class="links">
                <li><a href="../HomePage/sport.php">Home</a></li>
                <li><a href="../../Admin/Sign In/page.php">Admin Login</a></li>
                <li><a href="#contact">About Us</a></li>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>
    
        <div class="" id="sports">
            <form action="" method="POST">
                <input type="submit" name="fixture" value="Fixture" id="fixture" class="button" />
                <input type="submit" name="ptable" value="Points Table" id="points" class="button" />
            </form>
        </div>
    </div>

    <?php
        $_SESSION["category"] = "Boys";
        if (isset($_POST['fixture']) ) {
            echo "asga";
            header("location: ../Fixture/college.php");
        }
        if (isset($_POST['ptable']) ) {
            header("location: ../Stats/college.php");
        } 
    ?>
    
</body>
</html>