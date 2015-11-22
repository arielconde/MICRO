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

<!--Bower Components
<script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
<link rel="import" href="bower_components/google-map/google-map.html">
<link rel="import" href="bower_components/google-map/google-map-directions.html">
<link rel="import" href="bower_components/iron-icon/iron-icon.html">
<link rel="import" href="bower_components/iron-icons/iron-icons.html">
<link rel="import" href="bower_components/paper-item/paper-item.html">
<link rel="import" href="bower_components/paper-item/paper-icon-item.html">
<link rel="import" href="bower_components/paper-input/paper-input.html">
<link rel="import" href="bower_components/paper-card/paper-card.html">
<link rel="import" href="bower_components/iron-icons/maps-icons.html">
<link rel="import" href="bower_components/paper-tabs/paper-tabs.html">
-->
	
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
	
	.dropdown {
		border: 1px solid gray;
		margin-top: 10px;
		margin-right: 10px;
	}
	
	.reportResult {
		margin-top: 10px;
	}
	
	.reportBox {
		background-color: yellow;
		padding: 20px;
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
	
	.white {
		color: white;
	}
	
	
  
</style>


</head>
<body>
	
	<div class='row'>
	 	<div class='center'>
			<a href='index.php'><button class='btn pages'>Report</button></a>
			<a href='today.php'><button class='btn pages'>Today</button></a>
			<a href=''><button class='btn pages'>Search</button></a>
			<a href='analytics.php'><button class='btn pages'>Analytics</button></a>
		</div> 
	 </div>

  <div class='container'>

	<h1 class="center white" id='title'><strong>View Reports</strong></h1>
	<h4 class='center'>Search over sent incidents reports by place and time.</h4>

    <!-- Submit report form -->
    <div class='row'>
      <div class='col-md-8 col-md-offset-2 center'>
        <form class='form-group'>
          <input type='text' class='form-control' name='searchText' placeholder='Eg. Manila' />
			
			<span class='white'>Year</span>
			<select class='btn dropdown' name='year' id='dropDownYear'>
				<option value="All">All</option>
				<option value="2015">2015</option>  
				<option value="2014">2014</option>
			</select>
			
			<span class='white'>Month</span>
			<select class='btn dropdown' name='month' id='dropDownMonth'>
				<option value="All">All</option>
				<option value="1">January</option>  
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
			
			<span class='white'>Day</span>
			<select class='btn dropdown' name='day' id='dropDownDay'>
				<option value='All'>All</option>
				<?php
					//Fill the dropdown with day choices
					for ($i = 1; $i <= 31; $i++) {
						echo "<option value='" .$i ."'>" .$i ."</option>";
					}
				
				?>
			</select>
			
			<span class='white'>Type</span>
			<select class='btn dropdown' name='type' id='dropDownType'>
				<option value="All">All</option>
				<option value="Accident">Road Accident</option>
				<option value="TrafficLights">Traffic Lights</option>  
				<option value="Water">Water</option>  
				<option value="Fire">Fire</option>
			</select>
			
			<br />
			
          <input id='report' type='submit' class='btn btn-danger btn-lg' name='search' value='Search' />
			
        </form>
      </div>
    </div>
	 
	<br />
	<h3 class='center white'>Result</h3>  
	<hr />
  </div>
	
	<div class='container'>
	
		<?php include('getQueryResults.php') ?>
		
	</div>



<script>

</script>


</body>
</html>