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
		echo "You must enter username and password.";
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
<title>Login</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body>
<?php
if(isset($_SESSION["ERRMSG"])){
	echo $_SESSION["ERRMSG"];
	unset($_SESSION["ERRMSG"]);
}
?>
<div id="container">
<h1>Login</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
	<p>Username:<br/>
	<input type="text" name="user" required="required"/></p>
	<p>Password:<br/>
	<input type="password" name="pass" required="required"/>
	</p>
	<input type="submit" name="button" value="Login"/>
</form>
</div>
</body>
</html>