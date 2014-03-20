<?php
if(isset($_REQUEST["content"])){
	$content = $_REQUEST["content"];
	include("db_connect.php");
	$sql="SELECT * FROM pages WHERE name=?;";
	$result = $conn->prepare($sql);
	$result->bindParam(1, $content);
	$result->execute();
	$result=json_encode($result->fetchAll(PDO::FETCH_ASSOC));
	header('Content-Type: application/json');
	echo $result;
}
elseif(isset($_REQUEST["save"])){
	$id=$_POST["contentId"];
	$content=$_POST["contentBox"];
	include("db_connect.php");
	$sql="UPDATE pages SET content=? WHERE id=?;";
	$result = $conn->prepare($sql);
	$result->bindParam(1, $content);
	$result->bindParam(2, $id);
	$result->execute();
	header("Location: ../index.php");
}
?>