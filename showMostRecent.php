<?php
	
	include('connection.php');
	date_default_timezone_set('Asia/Manila');
	$date = date('Y-m-d', time()); //Date today
	$query = "SELECT * FROM `reports` WHERE date='" .$date ."'";
	
	$result = mysqli_query($link, $query);

	//Implement something here to get the top 10 most recent
	$k = 0;
	while ($row = mysqli_fetch_array($result)) {
		$reportsToday[] = $row;
		$k++;
	}

	//Outs the top 10 most recent
	$i = 0;
	for ($i = 0; $i < 10 && $i < $k; $i = $i + 1) {
     	echo '<tr>';
        echo	'<td>' .$reportsToday[$i]['date'] ."</td>";
		echo	'<td>' .$reportsToday[$i]['time'] ."</td>";
		echo	'<td>' .$reportsToday[$i]['location'] ."</td>";
		echo	'<td>' .$reportsToday[$i]['description'] ."</td>";
		echo	'<td>' .$reportsToday[$i]['type'] ."</td>";
        echo '</tr>';
	}

	if ($k == 0) {
		echo "<h1>No records for today</h1>";
	}
	

	


?>