<?php

	//Get query results
		

	include("connection.php");
	//changes 'ALL' to "" for quering results
	$year = isset($_GET['year'])? $_GET['year'] : "";
	
	if ($year == 'All') {
		$year = "%";
	}

	$month = isset($_GET['month'])? $_GET['month'] : "";

	if ($month == 'All')
		$month = "%";

	$day = isset($_GET['day'])? $_GET['day'] : "";

	if (strcmp($day, 'All') == 0) {
		$day = "%";
	}
	
	$searchDate = $year ."-" .$month ."-" .$day;
	$searchText = isset($_GET['searchText'])? $_GET['searchText'] : "%";

	$query = "SELECT * FROM reports WHERE
		year LIKE '" .$year ."' AND 
		month LIKE '" .$month ."' AND
		day LIKE '" .$month ."' AND
		(location LIKE '%" .$searchText ."%' OR description LIKE '%" .$searchText ."%')";
	$result = mysqli_query($link, $query);

	if (!$result) {
		die('Invalid query: ' . mysql_error());
	}
	
	$i = 0;
	while ($row = mysqli_fetch_array($result)) {
		echo "<div class='col-md-3 reportResult'>";
		echo  	"<div class='reportBox'>";
			echo	"<h3>" .$row['location'] ."</h3>";
			echo	"<h5>" .$row['description'] ."</h5>";
			echo	"<h5>Type: " .$row['type'] ."</h5>";
			echo	"<h5>" .$row['date'] ."</h5>"; 
		echo  	"</div>";
		echo "</div>";
		$i++;
		if ($i % 4 == 0) {
			echo '<hr />';
		}
	}

	if ($i == 0) {
		echo "<h3>No reports found for your query.</h3>";
	}


?>