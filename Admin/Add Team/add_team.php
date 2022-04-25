<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="../../navbar/navbar2.css">
    <title>Document</title>
</head>
<body>
    <!-- <script src="javava.js"></script> -->
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
    
    <div class="form-div">
        <form action='connect.php' class='form' method="post">
            <p class='field half required'>
            <label class='label' for='team_name'>Team 1 Name</label>
            <input class='text-input' id='team_name' name='team_name' required type='text' value=''>
            </p>
            <p class='field required half'>
                <label class='label' for='team_id'>Team ID</label>
                <input class='text-input' id='team_id' name='team_id' type='text'>
            </p>
            <p class='field required half'>
                <label class='label' for='college_id'>College ID</label>
                <input class='text-input' id='college_id' name='college_id' type='text'>
            </p>
            <p class='field half required'>
                <label class='label' for='date'>Sport</label>
                <input class='text-input' id='Sport' name='sport' required type='text' value=''>
            </p>
            <p class='field half required'>
                <label class='label' for='category'>Category</label>
                <input class='text-input' id='category' name='category' required type='text' value=''>
            </p>
            <p class='field half'>
                <input class='button' type='submit' value='Add' onclick="nam()">
            </p>
        </form>
    </div>
</div>
</body>
</html>