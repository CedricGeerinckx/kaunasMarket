<?php
$dbhost  = "localhost";
$dbname  = "mm_ip";
$dbuser  = "root";
$dbpass  = "";

try{
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
}
catch(PDOException $e){
	die("Database cannot be reached");
}
$conn->exec("SET CHARACTER SET utf8");
?>