<?php
    $admin_id = $_POST['admin_id'];
    $admin_pass = $_POST['admin_pass'];

    $conn = mysqli_connect ('localhost','root','','2022');

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = "select * from signin where admin_id='$admin_id' and password='$admin_pass'";
        $result = $conn->query($stmt);
		if(mysqli_num_rows($result)==1){
            header("location:../Choose/s2.php");
        }
        else{
            echo "Credentials do not match !!";
        }
	}
?>