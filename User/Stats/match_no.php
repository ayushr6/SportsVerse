<?php
    $sport = $_SESSION["sport"];
    $category = "boys";
    $conn = new mysqli('localhost','root','','2022');

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = "Select * from events where sport_name='$sport' and category='$category'";
		$result = $conn->query($stmt);
		if(!$result){
			die("Invalid query: " . $conn->error);
		}
        while($rows = $result->fetch_assoc()){
            $team1_id = $rows['team_name'];
            $count1_stmt = "Select * from fixture where sport_name='$sport' and team1_name='$team1_id' and team2_name not like '$team1_id' and category='$category';";
            $count2_stmt = "Select * from fixture where sport_name='$sport' and team2_name='$team1_id' and team1_name not like '$team1_id' and category='$category';";
            $win_count_stmt = "Select * from fixture where sport_name='$sport' and result='$team1_id' and category='$category';";
            $draw_count_stmt = "Select * from fixture where sport_name='$sport' and result='draw' and (team1_name='$team1_id' OR team2_name='$team1_id') and category='$category';";
            $pending_count_stmt = "Select * from fixture where sport_name='$sport' and result='pending' and (team1_name='$team1_id' OR team2_name='$team1_id') and category='$category';";
            
		    $count1 = $conn->query($count1_stmt);
            $count2 = $conn->query($count2_stmt);
            $win_count = $conn->query($win_count_stmt);
            $draw_count = $conn->query($draw_count_stmt);
            $pending_count = $conn->query($pending_count_stmt);

            $team1_id = $rows['team_name'];
            $matches_played = mysqli_num_rows($count1) + mysqli_num_rows($count2) - mysqli_num_rows($pending_count);
            $matches_won = mysqli_num_rows($win_count);
            $matches_lost = $matches_played - $matches_won - mysqli_num_rows($draw_count);
            $points = $matches_won*2 + mysqli_num_rows($draw_count);
            $team1_id = strtoupper($team1_id);
            if($conn->connect_error){
                echo "$conn->connect_error";
                die("Connection Failed : ". $conn->connect_error);
            } else {
                $check = $conn->query("select * from stats where team_name='$team1_id' and sport_name='$sport' and category='$category'");
                $count = mysqli_num_rows($check);
                if($count==0){
                    $stmt1 = $conn->prepare("insert into stats(sport_name,team_name,matches_played,matches_lost,matches_won,points,category)
                    values(?,?,?,?,?,?,?)");
                    $stmt1->bind_param("sssssss",$sport,$team1_id,$matches_played,$matches_won,$matches_lost,$points,$category);
                    $execval = $stmt1->execute();
                }
                  
                $conn->query("update stats set matches_played='$matches_played' where team_name='$team1_id' and sport_name='$sport' ");
                $conn->query("update stats set matches_won='$matches_won' where team_name='$team1_id' and sport_name='$sport' ");
                $conn->query("update stats set matches_lost='$matches_lost' where team_name='$team1_id' and sport_name='$sport' ");
                $conn->query("update stats set points='$points' where team_name='$team1_id' and sport_name='$sport' ");
                // $stmt = $conn->prepare("insert into colleges(college_id, college_name, state, city) 
                // values(?, ?, ?, ?)");
		        // $stmt->bind_param("ssss", $college_id, $college_name, $state, $city);
                // $execval = $stmt->execute();
                // echo $execval;
            }

		}
        $stmt = "Select * from stats where sport_name='$sport' order by points desc";
		$result = $conn->query($stmt);
		if(!$result){
			die("Invalid query: " . $conn->error);
		}
        while($rows = $result->fetch_assoc()){
            $team1_id = strtoupper($rows['team_name']);
            $matches_played = $rows['matches_played'];
            $matches_won = $rows['matches_won'];
            $matches_lost = $rows['matches_lost'];
            $points = $rows['points'];
                echo "<tr>
                <td>$team1_id</td>
                <td>$matches_played</td>
                <td>$matches_won</td>
                <td>$matches_lost</td>
                <td>$points</td>
                </tr>
                ";
            }

	}
?>