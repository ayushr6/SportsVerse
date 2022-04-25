<?php session_start();
    $conn = new mysqli('localhost','root','','2022');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = "Select * from colleges";
		$result = $conn->query($stmt);
		if(!$result){
			die("Invalid query: " . $conn->error);
		}

		while($row = $result->fetch_assoc()){
			echo "<tr>
			<td>" . $row["college_id"] . "</td>
			<td>" . $row["college_name"] . "</td>
			<td>" . $row["state"] . "</td>
			<td>" . $row["city"] . "</td>
			</tr>";
		}
		

	}
?>