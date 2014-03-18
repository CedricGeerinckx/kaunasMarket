<!DOCTYPE html>
<html>
<head>
<title>The Kaunas Market</title>

<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
<script src="js/jquery.fullPage.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnnddgOPyxcKNLuayGpUFqmrNAVbusnk8&sensor=true"></script>
<script src="js/main.js"></script>
<script src="js/map.js"></script>

</head>

<body>
	<?php
	include("includes/navigation.php");
	?>

	<div class="section active" id="section0">

		<h1>Home</h1>
	</div>
	<div class="section" id="section1">
		<h1>Info</h1>
	</div>
	<div class="section" id="section2">
		<div id="map">
		</div>
		<div id="controlpanel">
			<h2>Select category</h2>
			<div id="checkboxes">
				<input type="checkbox" class="checkbox" value="1" checked="checked" id="c1"/><label for="c1"><span></span></label> Food<br/>
				<input type="checkbox" class="checkbox" value="2" checked="checked" id="c2"/><label for="c2"><span></span></label> Clothes<br/>
				<input type="checkbox" class="checkbox" value="3" checked="checked" id="c3"/><label for="c3"><span></span></label> Crafts<br/>
				<input type="checkbox" class="checkbox" value="4" checked="checked" id="c4"/><label for="c4"><span></span></label> Drinks<br/>
				<input type="checkbox" class="checkbox" value="5" checked="checked" id="c5"/><label for="c5"><span></span></label> Other<br/>
			</div>
		</div>
	</div>
	<div class="section" id="section3">
		<h1>History</h1>
	</div>

</body>

</html>