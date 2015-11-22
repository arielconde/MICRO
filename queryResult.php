<?php


	//Returns result
	include('connection.php');

	if (isset($_GET['viewAnalytics'])) {
		$year = $_GET["year"]; //hard coded
		$month = $_GET["month"];
		$type = $_GET["type"];

		for ($i = 0; $i < 31; $i++) {
			$datequery = $year ."-" .$month ."-" .$i;
			$query = "SELECT * FROM reports WHERE date='" .$datequery ."' AND type='" .$type ."'";
			$result = mysqli_query($link, $query);
			$numResult = mysqli_num_rows($result);
			echo $numResult;
			if (date('Y-m-d') == $datequery)
				break;
			else
				echo ", ";
		}
	}
?>