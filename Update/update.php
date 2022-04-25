<?php
	$sport = $_POST['sport'];
    $team1_id = $_POST['team1_id'];
    $team2_id = $_POST['team2_id'];
	$match = $_POST['match_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
	$rst = $_POST['rst'];
	$category = $_POST['category'];

    $conn = new mysqli('localhost','root','','2022');

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = ("update fixture set team1_name='$team1_id',team2_name='$team2_id',dates='$date',times='$time',
                                result='$result' where sport_name='$sport' and category='$category' and match_id='$match'");
        $conn->query($sql);
		header("location:update_table.php");
	}
?>