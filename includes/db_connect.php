<?php
$dbhost  = "localhost";
$dbname  = "mm_ip";
$dbuser  = "mm_ip";
$dbpass  = "ip";

try{
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
}
catch(PDOException $e){
	die("Database cannot be reached");
}
$conn->exec("SET CHARACTER SET utf8");
?>