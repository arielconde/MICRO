<?php
  
  include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>

<title>Road Analyst</title>

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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
	
	.navigation {
		width: 100%;
		padding: 0px;
	}
	
	#title {
		font-weight: bold;
		font-family: 'Helvetica', Arial;
	}
	
	body {
		background-color: #F39C12;
		background-position: center;
		background-size: cover;
		width: 100%;
		height: 100%;
	}
	
	body {
		
	}
	
	.white {
		color: white;
	}
	
	#logo {
		margin-top: 10px;
	}
	
	.alert {
		padding: 5px;
		width: 300px;
	}
  
</style>


</head>
<body>
	

  <div class='container'>
	  
	 <div class='row'>
	 	<div class='center'>
			<a href=''><button class='btn pages'>Report</button></a>
			<a href='today.php'><button class='btn pages'>Road<br />Status</button></a>
			<a href='viewReports.php'><button class='btn pages'>Search</button></a>
			<a href='analytics.php'><button class='btn pages'>Analytics</button></a>
		</div> 
	 </div>
	  
	  
	<div class='row center'>
		<img class='center' id='logo' src='Index-icon.png' width="100px" height="100px"/>
	</div>
	<h2 class="center white" id='title'><strong>ROAD ANALYST</strong></h2>
	  <h4 class='center'>Report from your current location. For faster solution.</h4>
	  <h6 class='center'><strong>November 22, 2015</strong></h6>

    <!-- Submit report form -->
    <div class='row'>
      <div class='col-md-8 col-md-offset-2 center'>
        <form class='form-group' method='post'>
          <textarea name='description' class='form-control' placeholder='Details of the Report.'></textarea>
			<span>
				<select class='btn dropdown' name='type' id='dropDownType'>
					<option value="Accident">Accident</option>
					<option value="TrafficLights">Traffic Lights</option>  
					<option value="Water">Water</option>  
					<option value="Fire">Fire</option>
				</select>
			</span>
          
			
			<!-- Work on geocoding user cur location, reverse geocode to get location, bogus value for now -->
			<textarea id='longitude' name='longitude' class='hidden'>120.992901</textarea>
			<textarea id='latitude' name='latitude' class='hidden'>14.5649469</textarea>
			<textarea id='location' name='location' class='hidden'>Brgy. 719, Malate, Manila, Metro Manila, Philippines</textarea>
          <input id='report' type='submit' class='btn btn-danger btn-lg' name='submitReport' value='Report' />
			
        </form>
		  
		<?php include('addReport.php'); ?>
      </div>
    </div>


<script>

</script>


</body>
</html>