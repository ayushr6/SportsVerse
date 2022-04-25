<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <style>
        <?php include "style.css";?>
    </style>
    <title>Document</title>
</head>
<body>
    
    
    <!-- <script src="javava.js"></script> -->
    <!-- <script type="text/javascript" src="java.js"></script> -->
    <form action='connect.php' class='form' method="post">
        <p class='field half required error'>
          <label class='label' for='college_id'>Match No</label>
          <input class='text-input' id='college_id' name='college_id' required type='text' value=''>
        </p>
        <p class='field required half'>
            <label class='label' for='college_name'>College Name</label>
            <input class='text-input' id='college_name' name='college_name' type='text'>
        </p>
        <p class='field required half'>
            <label class='label' for='state'>Team 1 ID</label>
            <input class='text-input' id='state' name='state' type='text'>
        </p>
        <p class='field half required'>
            <label class='label' for='city'>Team 1 ID</label>
            <input class='text-input' id='city' name='city' required type='text' value=''>
        </p>
        <p class='field half'>
            <input class='button' type='submit' value='Send' onclick="nam()">
        </p>
    </form>
    <!-- <div class="search_select_box">
        <select data-live-search="true">
            <option>Web Design</option>
            <option>Web Design</option>
            <option>Web Design</option>
            <option>Web Design</option>
            <option>Web Design</option>
            <option>Web Design</option>
        </select>
    </div> -->
    <!-- <div class="wrapper">
      <div class="search-input">
        <a href="" target="_blank" hidden></a>
        <input type="text" placeholder="Type to search..">
        <div class="autocom-box">
        </div>
        <div class="icon"><i class="fas fa-search"></i></div>
      </div>
    </div> -->
    <div class="select">
        <div class="container">
        <h2>Video Category</h2>

        <div class="select-box">
            <div class="options-container">
            <?php include 'college_name.php';?> 
            <!-- <div class="option">
                <input type="radio" class="radio" id="film" name="category" />
                <label for="film">Film & Animation</label>
            </div> -->
            </div>

            <div class="selected">
            Select Team 1
            </div>

            <div class="search-box">
            <input type="text" placeholder="Start Typing..." />
            </div>
        </div>
        </div>
<!-------------------------------------------------------------- -->
        <div class="container">
        <h2>Video Category</h2>

        <div class="select-box2 select-box">
            <div class="options-container2 options-container">
            <?php include 'college_name.php';?> 
            <!-- <div class="option">
                <input type="radio" class="radio" id="film" name="category" />
                <label for="film">Film & Animation</label>
            </div> -->
            </div>

            <div class="selected2 selected">
            Select Team 2
            </div>

            <div class="search-box2 search-box">
            <input type="text" placeholder="Start Typing..." />
            </div>
        </div>
        </div>
    </div>
</body>
<!-- <script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="suggestions.js"></script> -->
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="main2.js"></script>
</html>

