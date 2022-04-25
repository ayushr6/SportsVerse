<?php
    $conn = new mysqli('localhost','root','','2022');

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = "Select college_name from colleges";
		$result = $conn->query($stmt);
		if(!$result){
			die("Invalid query: " . $conn->error);
		}

		while($rows = $result->fetch_assoc()){
			$college_name = $rows['college_name'];
			// echo "<a value='$college_name' name='$college_name'>$college_name</a>";
			// echo "<input type="radio" class="radio" id="$college_name" name="category" />
            // 	  <label for="$college_name">Film & Animation</label>";
			echo "<div class='option'>
            	  <input type='radio' class='radio' id='$college_name' name='category' />
            	  <label for='$college_name'>$college_name</label>
          		</div>";
		}

	}
?>