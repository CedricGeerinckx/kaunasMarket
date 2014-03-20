<?php
session_start();
if(isset($_REQUEST["logout"])){
	session_destroy();
}
elseif(isset($_SESSION['LOGIN_STATUS']) && $_SESSION['LOGIN_STATUS']=="logged"){
	header("Location: index.php");
}
elseif(isset($_POST['button'])){
	include("includes/functions.php");
	if(empty($_POST['user']) || empty($_POST['pass'])){
		$error = "You must enter username and password.";
	}
	else{
		$user = $_POST["user"];
		$pass = md5($_POST["pass"]);
		$loginstatus = login($user, $pass);
		if($loginstatus){
			header("Location: index.php");
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>KAUNAS KAZIMIERAS FAIR - Login</title>
<meta charset="utf-8"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/login.css" />

</head>

<body>
<div id="container">
<a href="."><img src="img/logo.png" id="logo"/></a>
<?php
if(isset($error)){
	echo "<p id='error'>".$error."</p>";
} 
if(isset($_SESSION["ERRMSG"])){
	echo "<p id='error'>".$_SESSION["ERRMSG"]."</p>";
	unset($_SESSION["ERRMSG"]);
}
?>
<h1>Login</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
	<p>Username:<br/>
	<input type="text" name="user" required="required" id="user"/></p>
	<p>Password:<br/>
	<input type="password" name="pass" required="required" id="pass"/>
	</p>
	<input type="submit" name="button" id="submitButton" value="Login"/>
</form>
</div>
</body>
</html>