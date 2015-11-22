<?php
  
  include("connection.php");
  include('addReport.php');

?>

<!DOCTYPE html>
<html>
<head>

<title>Health Hub Finder</title>

<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">

	<!-- HERE MAPS -->
	<script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="http://js.api.here.com/v3/3.0/mapsjs-ui.css" />
    <script src="http://js.api.here.com/v3/3.0/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- jQuery -->
	<script src="jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<style type="text/css">
  .center {
    text-align: center;
  }

  .map {
    background-color: black;
  }

  textarea {
    height: 500px;
    width: 400px;
  }
	
	.hidden {
		display: none;
	}

	.bold {
		font-weight: bold;
	}
	
	#report {
		margin-top: 20px;
		width: 300px;
	}
	
	#map {
		height: 500px;
	}
	
	.white {
		color: white;
	}
	
	.reportResult {
		padding: 10px;
	}
	
	#dropDownType {
		border: 1px solid gray;
		margin-top: 20px;
		height: 45px;
	}
	
	.pages {
		height: 50px;
		width: 20%;
		font-weight: bold;
		font-size: 1.0em;
		margin-top: 10px;
	}
	
	body {
		background-color: #F39C12;
		background-position: center;
		background-size: cover;
		width: 100%;
		height: 100%;
	}
  
</style>


</head>
<body>
	
	<div class='row'>
	 	<div class='center'>
			<a href='index.php'><button class='btn pages'>Report</button></a>
			<a href=''><button class='btn pages'>Today</button></a>
			<a href='viewReports.php'><button class='btn pages'>Search</button></a>
			<a href='analytics.php'><button class='btn pages'>Analytics</button></a>
		</div> 
	 </div>
	
	<div class='container'>
	  
		<!-- Work on geocoding user cur location, reverse geocode to get location, bogus value for now -->
		<textarea id='longitude' name='longitude' class='hidden'>120.992901</textarea>
		<textarea id='latitude' name='latitude' class='hidden'>14.5649469</textarea>
		<textarea id='location' name='location' class='hidden'>Brgy. 719, Malate, Manila, Metro Manila, Philippines</textarea>

	 
	<br />
	<h2 class='center white' id='title'><strong>Today</strong></h2>
	 <h4 class='center'>Check todays road status.</h4>
	<hr />
  </div>
	
	<!-- The map -->
	<div class='center'>
		<div style="width: 100%; height: 400px" id="mapContainer"></div>
	</div>
	
	
	<!-- Shows the most recent 
	<br />
	<br />
	<br />
	<h3 class='center'>Most Recent</h3>
	<hr />
	-->
	
	<div class='row center'>
		<h3>Todays report summary</h3>
	<div class='col-md-8 col-md-offset-2'>
	<table class="table table-striped">
    	<thead>
			<tr>
				<th>Date</th>
				<th>Time</th>
				<th>Location</th>
				<th>Description</th>
				<th>Type</th>
			</tr>
		</thead>
		<tbody>
		  <?php include('showMostRecent.php'); ?>
		</tbody>
  	</table>
	</div>
	</div>

	<!-- Here maps scripts -->
	<script src="here-maps-scripts.js"></script>

<!-- Script for the interaction with the map -->
<script>
	
	var lat = $('#latitude').html();
	var lng = $('#longitude').html();
	var myLocation = { lng: lng, lat: lat }
	
	// // Create a marker of users current location
    var marker = new H.map.Marker(myLocation);
    map.addObject(marker);
	marker.addEventListener('click', function(e){console.log(e)});
  
</script>


<?php
	
	include('connection.php');
	date_default_timezone_set('Asia/Manila');
	$date = date('Y-m-d', time());
	$query = "SELECT * FROM `reports` WHERE date='" .$date ."'";
	$result = mysqli_query($link, $query);
	if (!$result) {
			echo "maling query";
	}
	
	while ($row = mysqli_fetch_array($result)) {
		
		$latitude = $row['latitude'];
		$longitude = $row['longitude'];
		$location = $row['location'];
		$type = $row['type'];
		$time = $row['time'];
		
		echo '<script>';
	
		echo "var lat = " .$latitude .";";
		echo "var lng = " .$longitude .";";
		echo "var tempLocation = { lng: lng, lat: lat };";
		
		if (strcmp($type, 'Accident') == 0)
			echo "var icon = new H.map.Icon('accident.png');";
		if (strcmp($type, 'TrafficLights') == 0)
			echo "var icon = new H.map.Icon('traffic-lights.png');";
		if (strcmp($type, 'Water') == 0)
			echo "var icon = new H.map.Icon('water.png');";
		if (strcmp($type, 'Fire') == 0)
			echo "var icon = new H.map.Icon('fire.png');";
		
		echo "var tempMarker = new H.map.Marker(tempLocation, {icon: icon});";
		
		echo "map.addObject(tempMarker);";
		echo "tempMarker.addEventListener('click', function(e){
			console.log('" .$location ."');"	
		."});";

		echo '</script>';
	}
	
?>


</body>
</html>