<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">

	<div data-role="header" class="jqm-header">
		<h2><img src="_assets/img/jquery-logo.png" alt="jQuery Mobile"></h2>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">


	</div><!-- /content -->
	    <div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
	    	<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
<li data-filtertext="demos homepage" data-icon="home"><a href=".././">Home</a></li>
<li data-filtertext="introduction overview getting started"><a href="../intro/" data-ajax="false">Introduction</a></li>
<li data-filtertext="buttons button markup buttonmarkup method anchor link button element"><a href="../button-markup/" data-ajax="false">Buttons</a></li>
<li data-filtertext="form button widget input button submit reset"><a href="../button/" data-ajax="false">Button widget</a></li>

<!-- Example of collapsable
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Checkboxradio widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="../checkboxradio-checkbox/" data-ajax="false">Checkboxes</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="../checkboxradio-radio/" data-ajax="false">Radio buttons</a></li>
		</ul>
	</div>
</li>
-->



		     </ul>
		</div><!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>RoadWatch Version 0.0.1</p>
		<p>By MICRO</p>
	</div><!-- /footer -->
	<!-- TODO: This should become an external panel so we can add input to markup (unique ID) -->
    


</div><!-- /page -->

</body>
</html>
