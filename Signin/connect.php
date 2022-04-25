<?php
    $college_id = $_POST['college_id'];
    $college_name = $_POST['college_name'];
    $state = $_POST['state'];
    $city = $_POST['city'];

    $conn = new mysqli('localhost','root','','2022');

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into colleges(college_id, college_name, state, city) 
        values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $college_id, $college_name, $state, $city);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>