<!DOCTYPE html>
<html>
<head>
<title>The Kaunas Market</title>

<meta description="">
<meta keywords="kaziuko muge, kaziuko, muge, kaunas, kaunas muge, kaziuko kaunas">

<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


<link  href="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.css" rel="stylesheet">
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
<!--<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>-->
<script src="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.js"></script>
<script src="js/jquery.fullPage.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnnddgOPyxcKNLuayGpUFqmrNAVbusnk8&sensor=true"></script>
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="js/main.js"></script>
<script src="js/map.js"></script>

</head>

<body>
	<?php
	include("includes/navigation.php");
	?>

	<div class="section active" id="home_">
	<div class="videoContainer">
		<video id="homeVid" loop>
			<source src="vid/vid.webm" type="video/webm">
			<source src="vid/vid.mp4" type="video/mp4">
			<source src="vid/vid.ogg" type="video/ogg">


		</video>

		<div class="overlay">
			<h2>KAUNAS KAZIUKO MUGE</h2>
			<p>
				A bridge between 
				the countryside and the city.
			</p>
		</div>
	</div>
	</div>
	<div class="section" id="section1">
		<div class="slide">
			<div class="intro">
				<h1>Information</h1>
				<p>Not only vertical scrolling but also horizontal scrolling. With fullPage.js you will be able to add horizontal sliders in the most simple way ever.</p>
			</div>
		</div>
	    <div class="slide">
			<div class="intro">
				<h1>News</h1>
				<p>Easy to use. Configurable and customizable.</p>
			</div>
		</div>
	    <div class="slide">
			<div class="intro">
				<h1>History</h1>
				<p>Working in modern and old browsers too! IE 8 users don't have the fault of using that horrible browser! Lets give them a chance to see your site in a proper way!</p>
			</div>
		</div>
		<div class="fullPage-slidesNav bottom">
			<ul>
				<li><a href="#" class="active">INFORMATION</a></li>
				<li><a href="#">NEWS</a></li>
				<li><a href="#">HISTORY</a></li>
			</ul>
		</div>
	</div>
	<div class="section" id="gallery_">
		<div class="fotorama" style="height:100%;width:100%" data-width="100%" data-height="100%" align="center" data-nav="thumbs" data-fit='cover' data-keyboard="true" data-transition="crossfade">
			<img class="img" src="img/gallery/img1.jpg">
			<img class="img" src="img/gallery/img2.jpg">
			<img class="img" src="img/gallery/img3.jpg">
			<img class="img" src="img/gallery/img4.jpg">
			<img class="img" src="img/gallery/img5.jpg">
			<img class="img" src="img/gallery/img6.jpg">
			<img class="img" src="img/gallery/img7.jpg">
			<img class="img" src="img/gallery/img8.jpg">
			<img class="img" src="img/gallery/img9.jpg">
			<img class="img" src="img/gallery/img10.jpg">
			<img class="img" src="img/gallery/img11.jpg">
			<img class="img" src="img/gallery/img12.jpg">
			<img class="img" src="img/gallery/img13.jpg">
			<img class="img" src="img/gallery/img14.jpg">
			<img class="img" src="img/gallery/img15.jpg">
			<img class="img" src="img/gallery/img16.jpg">
			<img class="img" src="img/gallery/img17.jpg">
			<img class="img" src="img/gallery/img18.jpg">
			<img class="img" src="img/gallery/img19.jpg">
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
	<div class="section" id="contact_">
		<h1>Contact</h1>
	</div>
</body>

</html>