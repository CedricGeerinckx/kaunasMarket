<?php
session_start();
if(isset($_REQUEST["logout"])){
	session_unset();
}
elseif(isset($_SESSION['loginstatus']) && $_SESSION['loginstatus']=="logged"){
	//header("Location: index.php");
	echo "<a href='login.php?logout'>Logout</a>";
}
elseif(isset($_POST['button'])){
	if(empty($_POST['user']) || empty($_POST['user'])){
		echo "Username or password is incorrect";
	}
	else{
		$_SESSION['loginstatus']="logged";
		header("Location: index.php");
	}
}
?>
<h1>Login</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
	<p>Username:<br/>
	<input type="text" name="user" required="required"/></p>
	<p>Password:<br/>
	<input type="password" name="pass" required="required"/>
	</p>
	<input type="submit" name="button" value="Login"/>
</form>