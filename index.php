<!DOCTYPE html>
<html>
<head>
<title>The Kaunas Market</title>
<link  href="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
<!--<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>-->
<script src="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.js"></script>
<script src="js/jquery.fullPage.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnnddgOPyxcKNLuayGpUFqmrNAVbusnk8&sensor=true"></script>
<script src="js/main.js"></script>
<script src="js/map.js"></script>

</head>

<body>
	<?php
	include("includes/navigation.php");
	?>

	<div class="section active" id="home_">

		<h1>Home</h1>
	</div>
	<div class="section" id="info_">
		<h1>Info</h1>
	</div>
	<div class="section" id="gallery_">
	
	<div class="fotorama" data-width="72%"
     data-height="800/600" align="center" ;
    margin-right: auto >
  <img class="img" src="1.jpg">
  <img class="img" src="2.jpg">
  <img class="img" src="3.jpg">
  </div>
	</div>
	<div class="section" id="map_">
		<div id="map">
		</div>
	</div>

</body>

</html>