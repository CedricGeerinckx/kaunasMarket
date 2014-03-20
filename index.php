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
					<div class="big-container-box">
							<div class="infotext" id="infotext1">
								<h1>WHAT?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non ligula quis velit ultricies fringilla nec vel mi. Cras mattis, lorem id dictum suscipit, sapien odio elementum neque, sit amet porttitor enim tortor vitae massa. Quisque metus nisl, tempor nec porta sit amet, placerat ut augue. Duis rutrum tincidunt sodales. Nam quis ultrices lacus. Integer ultrices iaculis eros nec dapibus. In at dolor magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
								</p>
							</div>
							<div class="infotext" id="infotext2">
								<h1>WHEN?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non ligula quis velit ultricies fringilla nec vel mi. Cras mattis, lorem id dictum suscipit, sapien odio elementum neque, sit amet porttitor enim tortor vitae massa.
								</p>

							</div>
							<div class="infotext" id="infotext3">
								<h1>WHERE?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non ligula quis velit ultricies fringilla nec vel mi. Cras mattis, lorem id dictum suscipit, sapien odio elementum neque, sit amet porttitor enim tortor vitae massa.
								</p>

							</div>
							<div class="infotext" id="infotext4">
								<h1>WHO?</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non ligula quis velit ultricies fringilla nec vel mi. Cras mattis, lorem id dictum suscipit, sapien odio elementum neque, sit amet porttitor enim tortor vitae massa. Quisque metus nisl, tempor nec porta sit amet, placerat ut augue. Duis rutrum tincidunt sodales. Nam quis ultrices lacus. Integer ultrices iaculis eros nec dapibus. In at dolor magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
								</p>

							</div>
					</div>	
				</div>
			</div>
		    <div class="slide">
				<div class="intro">
					<h1>News</h1>
					<div class="fb-news-box">
						<h1>Facebook news</h1>
						<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="700" data-height="600" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>		
					</div>
					<div class="other-news-box">
						<h1>Other news</h1>
						<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non ligula quis velit ultricies fringilla nec vel mi. Cras mattis, lorem id dictum suscipit, sapien odio elementum neque, sit amet porttitor enim tortor vitae massa. Quisque metus nisl, tempor nec porta sit amet, placerat ut augue. Duis rutrum tincidunt sodales. Nam quis ultrices lacus. Integer ultrices iaculis eros nec dapibus. In at dolor magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam justo lacus, vehicula quis luctus non, tempus non sem. Ut dignissim tincidunt luctus. Nam ut dapibus lorem, eget feugiat turpis. Etiam a vulputate quam. Sed ante magna, convallis nec urna vitae, scelerisque commodo urna.
	Morbi bibendum ullamcorper augue. Integer tempor nunc vitae tellus facilisis eleifend. Sed pretium pellentesque nisl, vel facilisis magna vulputate sed. Sed ac sagittis orci, non sagittis libero. Sed sit amet ante eget enim cursus euismod in nec elit. Etiam viverra purus eget nulla congue, sit amet consectetur odio bibendum. Nullam vel quam sed ante consequat tempor vitae non turpis. Nam congue turpis eget mauris placerat imperdiet dignissim at augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis purus fermentum, tincidunt arcu et, congue urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque nec ipsum tempus, laoreet nisi sagittis, sodales leo. Integer sodales convallis varius. Integer tincidunt leo et auctor cursus. Fusce et leo varius, euismod orci sit amet, placerat orci. Fusce egestas viverra est non vehicula.
	Nulla tincidunt adipiscing condimentum. Maecenas vehicula felis dui, nec vulputate neque accumsan et. Integer pulvinar venenatis posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper mi sed risus pulvinar dignissim. Duis neque augue, laoreet a tincidunt id, suscipit eget purus. Ut lacus nisi, dapibus quis nulla sit amet, 
						</p>
					</div>
				</div>
			</div>
		    <div class="slide">
				<div class="intro">
					<h1>History</h1>
					<div class="big-container-box">
					<h1> Kaziuko Muge</h1>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non ligula quis velit ultricies fringilla nec vel mi. Cras mattis, lorem id dictum suscipit, sapien odio elementum neque, sit amet porttitor enim tortor vitae massa. Quisque metus nisl, tempor nec porta sit amet, placerat ut augue. Duis rutrum tincidunt sodales. Nam quis ultrices lacus. Integer ultrices iaculis eros nec dapibus. In at dolor magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam justo lacus, vehicula quis luctus non, tempus non sem. Ut dignissim tincidunt luctus. Nam ut dapibus lorem, eget feugiat turpis. Etiam a vulputate quam. Sed ante magna, convallis nec urna vitae, scelerisque commodo urna.
	Morbi bibendum ullamcorper augue. Integer tempor nunc vitae tellus facilisis eleifend. Sed pretium pellentesque nisl, vel facilisis magna vulputate sed. Sed ac sagittis orci, non sagittis libero. Sed sit amet ante eget enim cursus euismod in nec elit. Etiam viverra purus eget nulla congue, sit amet consectetur odio bibendum. Nullam vel quam sed ante consequat tempor vitae non turpis. Nam congue turpis eget mauris placerat imperdiet dignissim at augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis purus fermentum, tincidunt arcu et, congue urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque nec ipsum tempus, laoreet nisi sagittis, sodales leo. Integer sodales convallis varius. Integer tincidunt leo et auctor cursus. Fusce et leo varius, euismod orci sit amet, placerat orci. Fusce egestas viverra est non vehicula.
	Nulla tincidunt adipiscing condimentum. Maecenas vehicula felis dui, nec vulputate neque accumsan et. Integer pulvinar venenatis posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper mi sed risus pulvinar dignissim. Duis neque augue, laoreet a tincidunt id, suscipit eget purus. Ut lacus nisi, dapibus quis nulla sit amet,  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non ligula quis velit ultricies fringilla nec vel mi. Cras mattis, lorem id dictum suscipit, sapien odio elementum neque, sit amet porttitor enim tortor vitae massa. Quisque metus nisl, tempor nec porta sit amet, placerat ut augue. Duis rutrum tincidunt sodales. Nam quis ultrices lacus. Integer ultrices iaculis eros nec dapibus. In at dolor magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam justo lacus, vehicula quis luctus non, tempus non sem. Ut dignissim tincidunt luctus. Nam ut dapibus lorem, eget feugiat turpis. Etiam a vulputate quam. Sed ante magna, convallis nec urna vitae, scelerisque commodo urna.
	Morbi bibendum ullamcorper augue. Integer tempor nunc vitae tellus facilisis eleifend. Sed pretium pellentesque nisl, vel facilisis magna vulputate sed. Sed ac sagittis orci, non sagittis libero. Sed sit amet ante eget enim cursus euismod in nec elit. Etiam viverra purus eget nulla congue, sit amet consectetur odio bibendum. Nullam vel quam sed ante consequat tempor vitae non turpis. Nam congue turpis eget mauris placerat imperdiet dignissim at augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis purus fermentum, tincidunt arcu et, congue urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque nec ipsum tempus, laoreet nisi sagittis, sodales leo. Integer sodales convallis varius. Integer tincidunt leo et auctor cursus. Fusce et leo varius, euismod orci sit amet, placerat orci. Fusce egestas viverra est non vehicula.
	Nulla tincidunt adipiscing condimentum. Maecenas vehicula felis dui, nec vulputate neque accumsan et. Integer pulvinar venenatis posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper mi sed risus pulvinar dignissim. Duis neque augue, laoreet a tincidunt id, suscipit eget purus. Ut lacus nisi, dapibus quis nulla sit amet, 
					</p>
					</div>
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
		<div class="fotorama" data-width="100%" data-height="100%" data-auto="false" data-nav="thumbs" data-fit='cover' data-keyboard="true" data-transition="crossfade" data-ratio="16/9">
			<?php
			$images = getGallery();
			while($image=$images->fetch()){
				echo "<img src='img/gallery/".$image["name"]."'/>";
			}
			?>
	  	</div>
	</div>
	<div class="section" id="map_">
		<div id="mapDiv">
		</div>
		<div id="controlpanel">
			<h2>Select category</h2>
			<div id="checkboxes">
				<input type="checkbox" class="checkbox" value="1" checked="checked" id="c1"/><label for="c1"><span></span></label> Food<br/>
				<input type="checkbox" class="checkbox" value="3" checked="checked" id="c2"/><label for="c2"><span></span></label> Crafts<br/>
				<input type="checkbox" class="checkbox" value="2" checked="checked" id="c3"/><label for="c3"><span></span></label> Clothes<br/>
				<input type="checkbox" class="checkbox" value="4" checked="checked" id="c4"/><label for="c4"><span></span></label> Beauty<br/>
				<input type="checkbox" class="checkbox" value="5" checked="checked" id="c5"/><label for="c5"><span></span></label> Toys<br/>
				<input type="checkbox" class="checkbox" value="6" checked="checked" id="c6"/><label for="c6"><span></span></label> Drinks<br/>
				<input type="checkbox" class="checkbox" value="7" checked="checked" id="c7"/><label for="c7"><span></span></label> Art<br/>
				<input type="checkbox" class="checkbox" value="8" checked="checked" id="c8"/><label for="c8"><span></span></label> Other<br/>
			</div>
		</div>
	</div>
	<div class="section" id="contact_">
		<h1>Contact</h1>
		<div id="contactform">
			<form method="POST" action="" name="contactform" id="conform">
				<input type="text" name="nimi" id="name" placeholder="Name" />
				<input type="text" name="email" id="email" placeholder="Email" />
				<textarea name="message" id="message" placeholder="Message" rows="10" cols="40"></textarea>
				<input type="submit" value="Send" name="button" class="submitbutton"/>
			</form>
			<div id="vastaus"></div>
		</div>
		<div id="contactinfo">
			<h2>Information</h2>
			<p>
			Kaunasblaablaa</br>
			etc<br/>
			</p>
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