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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../navbar/navbar2.css">
    <title>Sports</title>
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
                <li><a href="../../Admin/Sign In/page.php">Admin Login</a></li>
                <li><a href="#contact">About Us</a></li>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>
        <br><br><br>
        <div class="outer" id="sports">
            <div class="inner">
                <form action="" method="POST">
                    <input type="submit" name="button" value="Football" id="football" class="button"/>

                    <input type="submit" name="button" value="Basketball" id="basketball" class="button"/>


                    <input type="submit" name="button" value="Volleyball" id="volleyball" class="button"/>


                    <input type="submit" name="button" value="Cricket" id="cricket" class="button"/>


                    <input type="submit" name="button" value="Chess" id="Chess" class="button"/>


                    <input type="submit" name="button" value="Table Tennis" id="TableTennis" class="button"/>

                    <div class="inner">
                        <input type="submit" name="button" value="Kabaddi" id="Kabaddi" class="button"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
        $sport="hello";
        if (isset($_POST['button']) ) {
            $_SESSION["sport"] = $_POST['button'];
            $sport = $_POST['button'];
            header("location: ../Choose/s2.php");
        }
    ?>
    <!-- <script>
        document.getElementById('Chess').onclick = function() {
            alert("chess");

        };
    </script> -->
</body>
</html>