<?php

//Edit the database

	include('connection.php');
	date_default_timezone_set('Asia/Manila');
	$time = date('h:i:s a', time());

	//set
	/*
	$query = "UPDATE `reports` SET
		`date`='2015-11-22',`month`='11',
		`day`='22',`yaer`='2015',
		`description`='Test Description',
		`type`='Car Incident',
		time='" .$time
		."', `user`='testUser' WHERE day='22'";
	*/

	$query = "DELETE FROM `reports` WHERE year='0'";

	$result = mysqli_query($link, $query);

	if (!$result) {
		die("Error");
	}

	


?>