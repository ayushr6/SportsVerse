<?php
    $conn = new mysqli('localhost','root','','2022');

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = "Select * from fixture where sport_name='football' order by dates,times";
		$result = $conn->query($stmt);
		if(!$result){
			die("Invalid query: " . $conn->error);
		}

		while($rows = $result->fetch_assoc()){
            $match_id = $rows['match_id'];
            $team1_id = $rows['team1_id'];
            $team2_id = $rows['team2_id'];
            $sport_name = $rows['sport_name'];
            $date = $rows['dates'];
            $time = $rows['times'];
            $rst = $rows['result'];
            $team1_id = strtoupper($team1_id);
            $team2_id = strtoupper($team2_id);
            $rst = strtoupper($rst);
			echo "<tr>
            <td>$match_id</td>
            <td>$team1_id</td>
            <td>$team2_id</td>
            <td>$date</td>
            <td>$time</td>
            <td>$rst</td>
            </tr>
            ";
		}

	}
?>