<?php

	//Show reports php

	include('connection.php');

	$query = "SELECT * FROM reports";

	$result = mysqli_query($link, $query);

	while ($row = mysqli_fetch_array($result)) {

		echo $row['description'] ."<br />" ;

	}



?>