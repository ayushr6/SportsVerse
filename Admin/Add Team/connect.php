<?php
    $team_id = $_POST['team_id'];
    $team_name = $_POST['team_name'];
    $college_id = $_POST['college_id'];
    $sport = $_POST['sport'];
    $category = $_POST['category'];

    $conn = new mysqli('localhost','root','','2022');

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into events(team_id, sport_name, team_name, college_id, category) 
        values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $team_id, $sport, $team_name, $college_id, $category);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>