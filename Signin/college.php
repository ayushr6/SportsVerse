<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css"> 
    <title>Document</title>
    <style>
      <?php include "style.css";?>
    </style>
</head>
<body>  
  
<form action='' class='form' name='form' method='POST'>
  <div class="heading"><h1>Sign In</h1></div>
  

    <p class='field required error'>
        <label class='label' for='admin_id'>Admin ID</label>
        <input class='text-input' id='admin_id' name='admin_id' required type='text' value=''>
    </p>
    <p class='field required'>
        <label class='label' for='admin_pass'>Admin Password</label>
        <input class='text-input' id='admin_pass' name='admin_pass' required type='text' value=''>
    </p>
    <input class='button' type='submit' value='Update' onclick='nam()'>
    <?php include "update.php";?>
</form>


</body>
</html>