<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<title>KAUNAS KAZIMIERAS FAIR</title>
<meta keywords="kaziuko muge, kaziuko, muge, kaunas, kaunas muge, kaziuko kaunas" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css' />


<link rel="stylesheet" href="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.css" />
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<!-- <link rel="stylesheet" type="text/css" href="css/main_mobile.css" />
 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
<!--<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>-->
<script src="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jquery.fullPage.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEGioR1cUS84rLlR3gsCysDAwQSpyVirg&sensor=true"></script>
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="js/main.js"></script>
<script src="js/map.js"></script>

</head>

<body>
<?php
include('includes/functions.php');
include("includes/navigation.php");
?>
<div id="superContainer">
	<div class="section active" id="home_">
	<div class="videoContainer">
		<video id="homeVid" loop>
			<source src="vid/vid.webm" type="video/webm">
			<source src="vid/vid.mp4" type="video/mp4">
			<source src="vid/vid.ogg" type="video/ogg">
		</video>
		<div class="overlay">
			<h2>KAUNAS KAZIMIERAS FAIR</h2>
			<p>
				A bridge between 
				the countryside and the city.
			</p>
		</div>
		<a href="http://ipkaunas-001-site1.smarterasp.net/registration/default.aspx"><div class="register">
			<p><span>REGISTER</span></p>
			 <p>A VENDOR SPOT</p>
		</div></a>
	</div>
	<div class="arrowDown"></div>
	</div>
	<div class="section" id="section1">
			<div class="slide">
				<div class="intro">
					<h1>Information</h1>
					<div class="big-container-box">
					<?php
					if(isset($_SESSION['LOGIN_STATUS']) && $_SESSION['LOGIN_STATUS']=="logged"){
						echo "<button class='editButton' value='information'></button>";
					}
					$text = getPage("information");
					while($content=$text->fetch()) {
						echo $content["content"];
					}
					?>
					</div>	
				</div>
			</div>
		    <div class="slide">
				<div class="intro">
					<h1>News</h1>
					<div class="fb-news-box">
						<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="60%" data-height="50%" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>		
					</div>
				</div>
			</div>
		    <div class="slide">
				<div class="intro">
					<h1>History</h1>
					<div class="big-container-box">
					<?php
					if(isset($_SESSION['LOGIN_STATUS']) && $_SESSION['LOGIN_STATUS']=="logged"){
						echo "<button class='editButton' value='history'></button>";
					}
					$text = getPage("history");
					while($content=$text->fetch()) {
						echo $content["content"];
					}
					?>
					</div>
				</div>
			</div>
			<div class="fullPage-slidesNav">
		  		<ul>
		  			<li><a href="#" class="active">INFORMATION</a></li>
					<li><a href="#">NEWS</a></li>
					<li><a href="#">HISTORY</a></li>
		  		</ul>
		  	</div>
		</div>
	<div class="section" id="gallery_">
		<div class="slide">
			<div class="fotorama" data-width="100%" data-height="88%" data-auto="false" data-nav="thumbs" data-fit='cover' data-keyboard="true" data-transition="crossfade" data-ratio="16/9">
				<?php
				$images = getGallery();
				while($image=$images->fetch()){
					echo "<img src='img/gallery/".$image["name"]."' alt='".$image["name"]."' />";
				}
				?>
		  	</div>
			
		</div>
		<div class="slide">
			<div class="fotorama" data-width="100%" data-height="88%" data-auto="false" data-fit='cover'>
				  <a href="https://www.youtube.com/watch?v=SxozohpuEvQ">FAMERS + KAUNAS = FOOD</a>
				  <a href="https://www.youtube.com/watch?v=HSH_3ni6p14">UKININKAI + KAUNAS = MAISTAS</a>
			</div>
		</div>
		<div class="slide">
			<div class="fotorama" data-width="100%" data-height="88%" data-auto="false" data-fit='cover'>
				  <a href="http://vimeo.com/61527416">Celestial Dynamics</a>
			</div>
		</div>
	  	<div class="fullPage-slidesNav">
	  		<ul>
	  			<li><a href="#" class="active">PICTURES</a></li>
	  			<li><a href="#">MOVIES</a></li>
	  			<li><a href="#">DOCUMENTARY</a></li>
	  		</ul>
	  	</div>
	</div>
	<div class="section" id="map_">
		<div id="mapDiv">
		</div>
		<div id="controlpanel">
			<h2>CATEGORIES</h2>
			<div id="checkboxes">
				<input type="checkbox" class="checkbox" value="1" checked="checked" id="c1"/><label for="c1"><span></span></label> FOOD<br/>
				<input type="checkbox" class="checkbox" value="3" checked="checked" id="c2"/><label for="c2"><span></span></label> CRAFT<br/>
				<input type="checkbox" class="checkbox" value="2" checked="checked" id="c3"/><label for="c3"><span></span></label> CLOTHES<br/>
				<input type="checkbox" class="checkbox" value="4" checked="checked" id="c4"/><label for="c4"><span></span></label> BEAUTY<br/>
				<input type="checkbox" class="checkbox" value="5" checked="checked" id="c5"/><label for="c5"><span></span></label> TOYS<br/>
				<input type="checkbox" class="checkbox" value="6" checked="checked" id="c6"/><label for="c6"><span></span></label> DRINKS<br/>
				<input type="checkbox" class="checkbox" value="7" checked="checked" id="c7"/><label for="c7"><span></span></label> ART<br/>
				<input type="checkbox" class="checkbox" value="8" checked="checked" id="c8"/><label for="c8"><span></span></label> OTHER<br/>
			</div>
		</div>
	</div>
	<div class="section" id="contact_">
		<div class="contactWrapper">
			<div id="contactform">
				<h1>Contact</h1>
					<form method="POST" action="#" name="contactform" id="conform">
						<input type="text" name="nimi" id="name" placeholder="Name" />
						<input type="text" name="email" id="email" placeholder="Email" />
						<textarea name="message" id="message" placeholder="Message" rows="10" cols="40"></textarea>
						<input type="submit" value="Send" name="button" class="submitbutton"/>
					</form>
			</div>
			<div id="contactinfo">
					<h1>Information</h1>
					<h2>Phone number</h2>
					+370 37 400 357 <br/>
					<h2>Email</h2>
					info@seimosukiai.lt<br/>
					<h2>Opening time</h2>
					Monday to Friday, 9 am-4pm<br/>
			</div>
		</div>
	</div>
</div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/da_DK/all.js#xfbml=1&appId=197490163656160";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
</body>

</html>