<!DOCTYPE html>
<html>
<head>
<title>The Kaunas Market</title>

<meta description="">
<meta keywords="kaziuko muge, kaziuko, muge, kaunas, kaunas muge, kaziuko kaunas">

<link  href="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
<!--<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>-->
<script src="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.js"></script>
<script src="js/jquery.fullPage.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnnddgOPyxcKNLuayGpUFqmrNAVbusnk8&sensor=true"></script>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
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
	<div class="section" id="section1">
		<div class ="slideContainer">
			<div class="wrapper">
			<div class="slide" id="slide1">
				<h1>Information menu:</h1>
				<ul>
					<li>
						<a href="#info">Information</a>
					</li>
					<li>
						<a href="#info/1">History</a>
					</li>
					<li>
						<a href="#info/2">Vendor of the day</a>
					</li>
					<li>
						<a href="#info/3">Slide4</a>
					</li></ul>
				<div class="infotext" id="text1">
					<h1>WHAT?</h1>
						<p> We are planning to do at really structured and well-designed map of the fair, that is used by the visitors and the vendors. When the vendors register online they see a map with all the spot numbers and they pick a spot. When the fair starts, the visitors get access to the same map with all the different stands placed on the map. We are planning to make a really structured and well-designed map of the fair that is used for the visitors and the vendors. When the vendors register online, they see a map
						</p></div>
				<div class="infotext" id="text2">
					<h1>WHEN?</h1>
						<p>We are planning to do at really structured and well-designed map of the fair, that is used by the visitors and the vendors. When the vendors register online they see a map with all the spot numbers and they pick a spot. When the fair starts, the visitors get access to the same map with all
						</p></div>
				<div class="infotext" id="text3">
					<h1>WHERE?</h1>
						<p>We are planning to do at really structured and well-designed map of the fair, that is used by the visitors and the vendors. When the vendors register online they see a map with all the spot numbers and they pick a spot. When the fair starts, the visitors get access to the same map with all
						</p></div>
				<div class="infotext" id="text4">
					<h1>WHO?</h1>
						<p>We are planning to do at really structured and well-designed map of the fair, that is used by the visitors and the vendors. When the vendors register online they see a map with all the spot numbers and they pick a spot. When the fair starts, the visitors get access to the same map with all
						</p></div>

			</div>
			<div class="slide" id="slide2">
				<h1>Information menu:</h1>
				<ul>
					<li>
						<a href="#info">Information</a>
					</li>
					<li>
						<a href="#info/1">History</a>
					</li>
					<li>
						<a href="#info/2">Vendor of the day</a>
					</li>
					<li>
						<a href="#info/3">Slide4</a>
					</li></ul>		
				<div class="infoBox">
					<h1>History</h1>
					<p> Some random paragraph</p>
			    </div>
			</div>
			<div class="slide" id="slide3">
				<h1>Information menu:</h1>
				<ul>
					<li>
						<a href="#info">Information</a>
					</li>
					<li>
						<a href="#info/1">History</a>
					</li>
					<li>
						<a href="#info/2">Vendor of the day</a>
					</li>
					<li>
						<a href="#info/3">Slide4</a>
					</li></ul>				
					<div class="infoBox">
					<h1>Slide 3</h1>
					<p> Some random paragraph</p>
			    </div>
			</div>
			<div class="slide" id="slide4">
				<h1>Information menu:</h1>
				<ul>
					<li>
						<a href="#info">Information</a>
					</li>
					<li>
						<a href="#info/1">History</a>
					</li>
					<li>
						<a href="#info/2">Vendor of the day</a>
					</li>
					<li>
						<a href="#info/3">Slide4</a>
					</li></ul>		
					<div class="infoBox">
					<h1>Slide 4</h1>
					<p> Some random paragraph</p>
			    </div>
			</div>
			</div>
	    </div>
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

</body>

</html>