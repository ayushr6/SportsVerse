<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css"> 
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
            <label class='label' for='college_id'>College ID</label>
            <input class='text-input' id='college_id' name='college_id' required type='text' value=''>
            </p>
            <p class='field required half'>
                <label class='label' for='college_name'>College Name</label>
                <input class='text-input' id='college_name' name='college_name' type='text'>
            </p>
            <p class='field required half'>
                <label class='label' for='state'>State</label>
                <input class='text-input' id='state' name='state' type='text'>
            </p>
            <p class='field half required'>
                <label class='label' for='city'>City</label>
                <input class='text-input' id='city' name='city' required type='text' value=''>
            </p>
            <div>
                <input class='button' type='submit' value='Add' onclick="nam()">
            </div>
        </form>
    </div>
    </div>
</body>
</html>