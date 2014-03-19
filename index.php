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
		<video id="homeVid" loop>
			<source src="vid/ip_timelapse.mp4" type="video/mp4"> 
		</video>
	</div>
	<div class="section" id="info_">
		<h1>Info</h1>
	</div>
	<div class="section" id="gallery_">
	
	<div class="fotorama" data-width="100%"
     data-height="100%" align="center" data-nav="thumbs" data-fit='cover' data-keyboard="true" data-transition="crossfade" ;
    margin-right: auto >
  <img class="img" src="1.jpg">
  <img class="img" src="2.jpg">
  <img class="img" src="3.jpg">
  <img class="img" src="4.jpg">
  <img class="img" src="5.jpg">
  <img class="img" src="6.jpg">
  <img class="img" src="7.jpg">
  <img class="img" src="8.jpg">
  <img class="img" src="9.jpg">
  <img class="img" src="23.jpg">
  <img class="img" src="24.jpg">
  </div>
	</div>
	<div class="section" id="map_">
		<div id="map">
		</div>
	</div>

</body>

</html>