<?php
    $conn = new mysqli('localhost','root','','2022');

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = "Select * from fixture where sport_name='cricket';";
		$result = $conn->query($stmt);
		if(!$result){
			die("Invalid query: " . $conn->error);
		}
        while($rows = $result->fetch_assoc()){
            $admin_id = $rows['admin_id'];

		}
    }
		
?>