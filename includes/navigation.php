<div id="navigation">
	<div id="logo">
		
	</div>

<!-- 	<div id="register">
		<a id="register" href="#">REGISTER A VENDOR SPOT</a>
	</div> -->

	<ul id="navlinks">
		<li data-menuanchor="home" class="first active">
			<a href="#home">HOME</a>
		</li>
		<li data-menuanchor="info">
			<a href="#info">INFO</a>
		</li>
		<li data-menuanchor="gallery">
			<a href="#gallery">GALLERY</a>
		</li>
		<li data-menuanchor="map">
			<a href="#map">MAP</a>
		</li>
		<li data-menuanchor="contact">
			<a href="#contact">CONTACT</a>
		</li>
	</ul>
</div>
<?php
if(isset($_SESSION['LOGIN_STATUS']) && $_SESSION['LOGIN_STATUS']=="logged"){
	echo "<div class='alertBox'>You are logged in as Admin. <a href='login.php?logout'>Logout here</a></div>";
}
?>