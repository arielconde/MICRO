<?php


	if (isset($_POST['submitReport'])) {
		include('connection.php');
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		date_default_timezone_set('Asia/Manila');
		$date = date('Y-m-d', time());
		$time = date('h:i:s a', time());
		$user = 'testUser'; // $_SESSION['user'];
		$description = isset($_POST['description']) ? $_POST['description'] : "";
		$location = isset($_POST['location']) ? $_POST['location'] : "" ;
		$latitude = isset($_POST['latitude']) ? $_POST['latitude'] : "" ;
		$longitude = isset($_POST['longitude']) ? $_POST['longitude'] : "" ;
		$type = isset($_POST['type']) ? $_POST['type'] : "";
		$day = date('d', time());
		$month = date('m', time());
		$year = date('Y', time());


		//Insert the data description  etc in the database
		$query = "INSERT INTO reports (date, time, description, type, user, location, latitude, longitude, day, month, year) VALUES('"
			.$date ."', '"
			.$time ."','"
			.$description ."','"
			.$type ."', '"
			.$user ."', '"
			.$location ."', '"
			.$latitude ."', '"
			.$longitude ."', '"
			.$day ."', '"
			.$month ."', '"
			.$year ."')";

		$result = mysqli_query($link, $query);

		if (!$result) {
			die('Invalid query:' . mysql_error());
		} else {
			echo "<alert class='alert alert-success'>Report Sent.</alert>";
		}
	}


?>