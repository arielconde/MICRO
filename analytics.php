<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Analytics</title>
	<!--[if lt IE 9]><script type="text/javascript"
	src="http://cdn.jsdelivr.net/excanvas/r3/excanvas.js"></script><![endif]-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript"
	src="http://cdn.jsdelivr.net/jqplot/1.0.8/jquery.jqplot.min.js"></script>
	<link rel="stylesheet" type="text/css"
	href="http://cdn.jsdelivr.net/jqplot/1.0.8/jquery.jqplot.min.css" />
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jqplot/1.0.8/plugins/jqplot.canvasTextRenderer.min.js"></script>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jqplot/1.0.8/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqPlot/1.0.8/plugins/jqplot.cursor.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqPlot/1.0.8/plugins/jqplot.highlighter.min.js"></script>
	<!-- jQuery -->
	<script src="jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
	<style>
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
			<a href='today.php'><button class='btn pages'>Road<br />Status</button></a>
			<a href=''><button class='btn pages'>Search</button></a>
			<a href='analytics.php'><button class='btn pages'>Analytics</button></a>
		</div> 
	 </div>

  <div class='container'>

	<h1 class="center white" id='title'><strong>Analytics</strong></h1>
	<h4 class='center'>Understand the meaning of data easier.</h4>

    <!-- Submit report form -->
    <div class='row'>
      <div class='col-md-8 col-md-offset-2 center'>
        <form class='form-group'>
			
			<span class='white'>Year</span>
			<select class='btn dropdown' name='year' id='dropDownYear'>
				<option value="2015">2015</option>  
				<option value="2014">2014</option>
			</select>
			
			<span class='white'>Month</span>
			<select class='btn dropdown' name='month' id='dropDownMonth'>
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
			
			<span class='white'>Type</span>
			<select class='btn dropdown' name='type' id='dropDownType'>
				<option value="Accident">Accident</option>
				<option value="TrafficLights">Traffic Lights</option>  
				<option value="Water">Water</option>  
				<option value="Fire">Fire</option>
			</select>
			
			<br />
			
          <input id='report' type='submit' class='btn btn-danger btn-lg' name='viewAnalytics' value='View Analytics' />
			
        </form><!--end of form-->
      </div>
		<!--Chart-->
	<div id="chart" style="height: 600px; width: 800px;"></div>
    </div>
	  
	<?php
		echo "<script type='text/javascript'>";
		echo '$(document).ready(function() {';
		echo "$.jqplot('chart', [[";
		include('queryResult.php');
		$options = "{
				title: 'Incident Report',
				axesDefaults: { 
					labelRenderer: $.jqplot.CanvasAxisLabelRenderer
				},
				axes: {
					xaxis: {
						label: 'November',
						min: 1,
						tickInterval: 1
					},
					yaxis: {
						label: 'Report Qty',
						min: 0
					}
				},
				highlighter: {
					show: true,
					sizeAdjust: 10,
					formatString: 'Nov %d<br>Qty: %d'
					
				},
				grid: {
		            backgroundColor: 'white'
        		},
				series: [
					{color: 'orange', highlightColors: []}
				]";
				
			echo "]], ";
			echo $options;
			echo "});";
		echo "});";
		echo "</script>";
	?>

</body>
</html>