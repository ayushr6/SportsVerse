<!DOCTYPE html>
<html lang="en">
<head>
   <title>Admin Login Panel</title>

   <style>
    table{
        background-color: black;
        border: 3px solid white;
        border-radius:  22px;
        background: rgba(0,0,0,0.5);
    }

    #type {
        width: 300px;
        height: 32px;
        border: 0;
        outline: 0;
        background: transparent;
        border-bottom: 3px solid white;
        color: white;
        font-size: 25px;
    }

    input::-webkit-input-placeholder{
        font-size: 20px;
        line-height: 3;
        color: white;
    }

    #btn{
        width: 200px;
        background-color: orange;
        font-size: 25px;
        height: 35px;
        
        
    }
    </style>
</head>
<body background = "552037.jpg"> 
    
    <br><br><br><br><br><br><br><br><br>
    <form action='check.php' method='POST'>
    <table width = "20%"  border = "0" cellspacing = "30" align= "center">
        <tr>
            <td align = "center"><img src = "admin-with-cogwheels.png" width = "40%"></td>
        </tr>
        <tr>
            <td><input type = "text" name='admin_id' placeholder= "Admin Username" id ="type"></td>
        </tr>

        <tr>
            <td><input type = "password" name='admin_pass' placeholder= "Password" id ="type"></td>
        </tr>
        <tr>
            <td align = "center"><input type = "submit" value = "Login" id = "btn"></td>
        </tr>
    </table>
    </form>

    
</body>
</html>